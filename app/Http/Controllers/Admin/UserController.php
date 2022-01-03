<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\Admin\Unit;
use App\Models\Admin\JenisPensiun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Admin\Role;
use Spatie\Permission\Models\Role as ModelsRole;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\BiodataImport;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;

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
        $menu = 'pegawai';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $users = User::query()->with(['biodata', 'RolesUser'])->where('name', '!=', 'Admin')->where('status', '=', 'Pegawai')->orderBy('name')->get();
        $roles = Role::query()->orderBy('name')->where('name', '!=', 'Pensiunan')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'users' => $users,
            'roles' => $roles,
        ];

        return view('admin.user.index', $data);

    }

    public function pensi()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $users = User::query()->with(['biodata', 'RolesUser'])->where('name', '!=', 'Admin')->where('status', '=', 'Pensiunan')->orderBy('nopeserta')->get();
        $roles = Role::query()->orderBy('name')->where('name', '!=', 'Pensiunan')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'users' => $users,
            'roles' => $roles,
        ];

        return view('admin.user.pensi', $data);
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

        $jenis = JenisPensiun::query()->get()->sortBy('id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'jenis' => $jenis
        ];

        return view('admin.user.create', $data);
    }

    public function pensicreate()
    {
        //
        $menu = 'user';
        $edit = false;

        $jenis = JenisPensiun::query()->get()->sortBy('id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'jenis' => $jenis
        ];

        return view('admin.user.pensicreate', $data);
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
        $nopsrta = $request->nopeserta;

        if ($request->status == 'Pensiunan')
        {
            $data['email'] = 'DP'.$nopsrta;
            $pass = $nopsrta . '22';
            $data['password'] = bcrypt($pass);
        } else {
            $data['password'] = bcrypt('12345678');
        }

        $validator = Validator::make($data, User::$rules, User::$errormessage);

        if ($validator->fails()) {
            $errormessage = $validator->messages();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            //$data['userid_created'] = Auth::user()->id;
            //$data['userid_updated'] = Auth::user()->id;
            $data['login_type'] = 'app';

            //dd($data);
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

        if ($request->status == 'Pensiunan') {
            Alert::success('Data berhasil ditambah')->persistent('Ok');
            alert()->success('Berhasil', 'User Berhasil di tambah');
            return redirect()->route('admin.pensi', $data);
        } else {
            Alert::success('Data berhasil ditambah')->persistent('Ok');
            alert()->success('Berhasil', 'User Berhasil di tambah');
            return redirect()->route('admin.user.index', $data);
        }
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
        $edit = false ;

        try {
            $menu = 'User';
            $user = User::query()->with(['biodata'])->find(decrypt($id));
            $jenis = JenisPensiun::query()->get()->sortBy('id');
            //dd($user);
            $data = [
                    'menu' => $menu,
                    'edit' => $edit,
                    'user' => $user,
                    'jenis' => $jenis,
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
            $jenis = JenisPensiun::query()->get()->sortBy('id');

            $data = [
                    'menu' => $menu,
                    'edit' => $edit,
                    'user' => $user,
                    'jenis' => $jenis,
                ];

            return view('admin.user.edit', $data);
        } catch (Exception $ex) {
            return redirect()->back();
        }
    }

    public function pensiedit($id)
    {
        //
        $edit = true;

        try {
            $menu = 'User';
            $user = User::query()->with(['biodata'])->find(decrypt($id));
            $jenis = JenisPensiun::query()->get()->sortBy('id');

            $data = [
                'menu' => $menu,
                'edit' => $edit,
                'user' => $user,
                'jenis' => $jenis,
            ];

            return view('admin.user.edit', $data);
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
            $biodata = Biodata::where('user_id',$user->id)->first();

            //dd($biodata);
            $user->update($data);
            $biodata->update($data);

            alert()->success('Berhasil', 'User Berhasil di Update');

            return redirect()->route('admin.pensi');

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

        alert()->success('Berhasil', 'User Berhasil di Hapus')->persistent('Ok');
        Alert::success('Data berhasil dihapus')->persistent('Ok');

        return redirect()->route('admin.pensi');
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

    public function importfile()
    {
        $menu = 'User';
        $edit = 'file';

        $data = [
            'menu' => $menu,
            'edit' => $edit,
        ];

        return view('admin.user.importuser', $data);
    }


    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        //Excel::import(new BiodataImport, $request->file('file')->store('temp'));
        return back();
    }

    public function uploadfoto(Request $request)
    {
        $data = $request->except('_token');

        $this->validate(
            $request,
            [
                'foto' => 'required|mimes:mimes:jpeg,jpg,png|max:2000'
            ],
            [
                'foto.required' => 'Tidak ada file yang di upload',
                'foto.mimes' => 'File harus gambar format png/jpg',
                'foto.max' => 'File tidak boleh lebih dari 2 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file

        $image = $request->file('foto');
        $nopeserta = $request->nopeserta;
        $nama_file = $nopeserta . '.' . $image->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload
        $filePath = public_path('dapen/foto/thumb');

        $img = Image::make($image->path());
        $img->resize(150, 150, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $nama_file);

        $tujuan_upload = 'dapen/foto';
        $image->move($tujuan_upload, $nama_file);

        $data['file'] = $nama_file;

        $user = Biodata::query()->find($data['idx']);
        // dd($user);
        $user->update($data);

        alert()->success(
            'Berhasil',
            'Foto berhasil di tambahkan'
        );

        return redirect()->back()->with('message', 'Operation Successful !');
    }
}
