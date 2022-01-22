<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BiodataUpdate;
use App\Models\Biodata;
use App\Models\Admin\Lampiran;

use Alert;
use Exception;
use Crypt;
use Validator;
use Image;
use Str;
use File;
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
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $users = BiodataUpdate::where([['baru', '1'], ['tampil', null], ['verifikasi', null]])->orderBy('updated_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'users' => $users,
        ];

        return view('admin.dapen.pengkiniandata.index', $data);
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
        $menu = 'pensi';
        $edit = false;

        $biodata = BiodataUpdate::where('nopeserta', decrypt($id))->orderBy('updated_at', 'desc')->get();

        if($biodata->count() > 1)
        {
            $user1 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', 1], ['verifikasi', 1], ['baru', 2]])->orderBy('created_at', 'desc')->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', null], ['verifikasi', null], ['baru', 1]])->first();
            $new = 1;

        }else{

            $user1 = Biodata::where([['nopeserta', $biodata[0]->nopeserta]])->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta] , ['baru', 1]])->first();
            $new = 0;
        }


        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'biodata' => $biodata,
            'user1' => $user1,
            'user2' => $user2,
            'new' => $new

        ];

        return view('admin.dapen.pengkiniandata.edit', $data);
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

        try {

            if ($data['new'] == '1') {
                $user1 = BiodataUpdate::where('nopd', $data['user1'])->first();
                $user2 = BiodataUpdate::where('nopd', $data['user2'])->first();
            } else {
                $user1 = Biodata::query()->find($data['user1']);
                $user2 = BiodataUpdate::where('nopd', $data['user2'])->first();
            }

                $datauser1['baru'] = 2;
                $datauser1['tampil'] = 2;

                $datauser2['baru'] = 2;
                $datauser2['verifikasi'] = 1;
                $datauser2['tampil'] = 1;

                $user1->update($datauser1);
                $user2->update($datauser2);

            return redirect()->route('admin.pengkiniandata.index')->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
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
