<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
