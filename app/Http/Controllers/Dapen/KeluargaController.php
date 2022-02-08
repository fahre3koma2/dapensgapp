<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\DataKeluarga;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;
use File;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->except('_token');

        $menu = 'keluarga';
        $edit = false;

        $record = DataKeluarga::where('nopeserta', $request->nopeserta)->latest()->first();

        if ($request->hubungan == 'S') {
            $data['urut'] = 0;
        } elseif ($request->hubungan == 'I') {
            $data['urut'] = 1;
        } else {
            if ($record == null) {
                $data['urut'] = 2;
            } else {
                $data['urut'] = sprintf("%01d", $record['urut'] + 1);
            }
        }
        //$data['tgl_lahir'] = $request->tgl_lahir->format('Y-m-d');
        $mohon = DataKeluarga::create($data);

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        alert()->success('Berhasil', 'Anggota Keluarga berhasil di tambahkan');

        if($request->page == 'permohonan'){
            return redirect()->route('pensi.permohonananak-form2', $request->idx);
        } else {
            return redirect()->route('pensi.pengkiniandata-form2', $request->idx);
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
        $data = $request->except('_token', '_method');

        try {

            foreach ($data as $key) {
                $kel = explode("_", $key);

                $mohon = DataKeluarga::query()->find($kel[1]);
                if($kel[0] == 'cerai'){
                    $status['st_cerai'] = 1;
                    $status['st_wafat'] = 0;
                    $status['st_kerja'] = 0;
                    $status['st_nikah'] = 0;
                } elseif ($kel[0] == 'wafat') {
                    $status['st_wafat'] = 1;
                    $status['st_kerja'] = 0;
                    $status['st_nikah'] = 0;
                    $status['st_cerai'] = 0;
                } elseif ($kel[0] == 'kerja') {
                    $status['st_kerja'] = 1;
                    $status['st_nikah'] = 0;
                    $status['st_cerai'] = 0;
                    $status['st_wafat'] = 0;
                } else {
                    $status['st_nikah'] = 1;
                    $status['st_cerai'] = 0;
                    $status['st_wafat'] = 0;
                    $status['st_kerja'] = 0;
                }
                //dd($status);
                $mohon->update($status);
            }

            alert()->success('Data Keluarga Berhasil Di Perbaruhi, Silahkan klik Submit untuk lanjut', 'Berhasil')->persistent('Ya');
            return redirect()->route('pensi.pengkiniandata-form2', ['id' => $id])->with('message', 'Operation Successful !');
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
        //dd($id);
        $keluarga = DataKeluarga::query()->find(decrypt($id));

        $keluarga->delete();

        alert()->success('Berhasil', 'User Berhasil di Hapus')->persistent('Ok');
        Alert::success('Data berhasil dihapus')->persistent('Ok');

        return redirect()->back();
    }
}
