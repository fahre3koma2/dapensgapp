<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Konten;

class KontenController extends Controller
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

    public function visimisi()
    {
        //
        $menu = 'visimisi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.konten.visimisi', $data);
    }

    public function sejarahpendirian()
    {
        //
        $menu = 'sejarahpendirian';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.konten.sejarahpendirian', $data);
    }

    public function pendiri()
    {
        //
        $menu = 'pendiri';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.konten.pendiri', $data);
    }

    public function strukturorganisasi()
    {
        //
        $menu = 'strukturorganisasi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.konten.strukturorganisasi', $data);
    }

    public function profilgambar()
    {
        //
        $konten = konten::where('status', 'home')->get();

        $menu = 'profilgambar';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
        ];

        return view('admin.konten.profilgambar', $data);
    }
}
