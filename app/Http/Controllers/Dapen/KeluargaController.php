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

        if ($record == null) {
            $data['urut'] = 1;
        } else {
            $data['urut'] = sprintf("%01d", $record['urut'] + 1);
        }

        $data['hubungan'] = 'A';
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
            return redirect()->route('pensi.permohonananak-form2', $request->idx);
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
