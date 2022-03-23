<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Admin\Formulir;
use App\Models\Admin\Panduan;


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

    public function panduan()
    {
        //
        $menu = 'panduan';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.informasi.panduan', $data);
    }

    public function panduanuser($isi)
    {
        //
        $menu = 'panduan';
        $edit = false;

        $mohon = Panduan::where('status', $isi)->first();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon
        ];

        return view('webprofil.informasi.panduanuser', $data);
    }

    public function pdp()
    {
        //
        $menu = 'pdp';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.informasi.pdp', $data);
    }

    public function laporankeuangan()
    {
        //
        $menu = 'laporankeuangan';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.informasi.laporankeuangan', $data);
    }

    public function downloadform()
    {
        //
        $menu = 'downloadform';
        $edit = false;

        $form = Formulir::orderBy('id')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'form' => $form
        ];

        return view('webprofil.informasi.download', $data);
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

        return view('webprofil.informasi.pengkiniandata', $data);
    }

    public function loginuser()
    {
        //
        $menu = 'loginuser';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.informasi.loginuser', $data);
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

        return view('webprofil.informasi.lupapassword', $data);
    }
}
