<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BiodataUpdate;

use Carbon\Carbon;
use PDF;
use Carbon\CarbonPeriod;


class PengkinianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $biodata = BiodataUpdate::where('user_id', auth()->user()->id)->orderBy('updated_at', 'desc')->get();
        // if ($cek > 0) {
        //     alert()->warning('Masih Ada Permohonan yang belum selesai', 'Gagal');
        //     return redirect()->back()->withInput();
        // }

        $menu = 'pensi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'biodata' => $biodata,
            'user' => $biodata[0]->user_id

        ];


        return view('admin.dapen.layanan.pengkiniandata.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $data['baru'] = 1;
            $data['user_id'] = $user->id;
            $biodata = BiodataUpdate::create($data);

            //dd($biodata);
            $user->update($data);
            //$biodata->update($data);

            alert()->success('Berhasil', 'User Berhasil di Update');

            return redirect()->back();
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
    }
}
