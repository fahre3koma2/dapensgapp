<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Konten;
use App\Models\Admin\Artikel;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konten = konten::where('status', 'home')->get();
        $splash = konten::where('status', 'splash')->first();
        $artikel = Artikel::where('kategori', 'Home')->orderBy('id')->paginate(3);
        $menu = 'beranda';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
            'artikel' => $artikel,
            'splash' => $splash
        ];

        return view('webprofil.index', $data);
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

    public function kontakkami()
    {
        //
        $menu = 'kontakkami';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.home.kontakkami', $data);
    }
}
