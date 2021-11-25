<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\Admin\Unit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Admin\Role;
use Spatie\Permission\Models\Role as ModelsRole;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'user';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $users = User::query()->with(['biodata', 'RolesUser'])->where('name', '!=', 'Admin')->orderBy('name')->get();
        $roles = Role::query()->orderBy('name')->where('name', '!=', 'Pensiunan')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'users' => $users,
            'roles' => $roles,
        ];

        return view('admin.user.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'user';
        $edit = false;

        $unit = Unit::where('nama', '!=', 'Administrator')->pluck('nama', 'id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'unit' => $unit
        ];

        return view('admin.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');

        $validator = Validator::make($data, User::$rules, User::$errormessage);

        if ($validator->fails()) {
            $errormessage = $validator->messages();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // $data['userid_created'] = Auth::user()->id;
            // $data['userid_updated'] = Auth::user()->id;
            $data['password'] = bcrypt('12345678');
            $data['login_type'] = 'app';

            $user = User::create($data);
            $user->assignRole('user');

            $data['user_id'] = $user->id;
            $biodata = Biodata::create($data);

        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }

        $data = [
            'user' => $user->id,
        ];

        return redirect()->route('admin.user.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $edit = true;

        try {
            $menu = 'User';
            $user = User::query()->with(['biodata'])->find(decrypt($id));

            $data = [
                    'menu' => $menu,
                    'edit' => $edit,
                    'user' => $user,
                ];

            return view('admin.user.detail', $data);
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = true;

        try {
            $menu = 'User';
            $user = User::query()->with(['biodata'])->find(decrypt($id));

            $data = [
                    'menu' => $menu,
                    'edit' => $edit,
                    'user' => $user,
                ];

            return view('admin.user.create', $data);
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->except('_token');
        // Validator::make($data, [
        //     'email' => ['required', Rule::unique('users')->ignore(decrypt($id))],
        // ]);

        try {

            $user = User::query()->find(decrypt($id));
            //dd($user->id);
            $biodata = Biodata::where('user_id',$user->id)->first();

            //dd($biodata);
            $user->update($data);
            $biodata->update($data);

            alert()->success('Berhasil', 'User Berhasil di Update');

            return redirect()->route('user.index');

        } catch (Exception $ex) {

            alert()->error('Gagal', 'User gagal di Update');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::query()->find(decrypt($id));
        $biodata = Biodata::where('user_id', $user->id)->first();

        $user->syncRoles(['']);

        $user->delete();
        $biodata->delete();

        alert()->success('Berhasil', 'User Berhasil di Update')->persistent('Ok');
        Alert::success('Data berhasil dihapus')->persistent('Ok');

        return redirect()->route('admin.user.index');
    }

    public function removeRole(Request $request)
    {
        DB::table('model_has_roles')
        ->where([['model_id', decrypt($request->user_id)], ['role_id', decrypt($request->role_id)]])
            ->delete();

        return response('success', 200);
    }

    public function addRole(Request $request)
    {
        $data['role'] = Role::query()->find(decrypt($request->role_id));
        $data['user'] = User::query()->find(decrypt($request->user_id));
        $data['user']->assignRole($data['role']);

        return view('admin.user.roleuser', $data);
    }
}
