<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Panduan;
use App\Models\Admin\Laporan;
use App\Models\User;

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

class InformasiController extends Controller
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
    }

    public function downloadinfo()
    {
        //
        $menu = 'panduan';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.informasi.panduan', $data);
    }

    public function laporberitaduka()
    {
        //
        $menu = 'laporberitaduka';
        $edit = false;

        $user = User::query()->with('biodata')->find(auth()->user()->id);
        $berita = Laporan::where('jenis', 'laporberitaduka')->where('nopensiun', $user->biodata->nopeserta)->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.dapen.layanan.laporberitaduka', $data);
    }

    public function laporberitadukacetak($id)
    {

        $berita = Laporan::query()->find(decrypt($id));

        $pdf = PDF::loadview('admin.layanan.laporan.cetakberitaduka', ['berita' => $berita]);
        return $pdf->download('laporan-beritaduka-pdf.pdf');
    }

    public function panduanuser($isi)
    {
        //
        $menu = 'panduan';
        $edit = false;
        $judul = $isi;

        $mohon = Panduan::where('status', $isi)->first();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul,
        ];

        return view('admin.dapen.informasi.pengkiniandata', $data);
    }

    public function pengkiniandata()
    {
        //
        $menu = 'pengkiniandata';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.informasi.pengkiniandata', $data);
    }


    public function lupapassword()
    {
        //
        $menu = 'lupapassword';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.informasi.lupapassword', $data);
    }
}
