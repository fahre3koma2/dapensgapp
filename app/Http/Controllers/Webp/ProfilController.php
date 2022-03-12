<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Artikel;
use App\Models\Admin\ProfilInfo;

class ProfilController extends Controller
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

        $visi = ProfilInfo::where('jenis', 'visi')->first();
        $misi = ProfilInfo::where('jenis', 'misi')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'visi' => $visi,
            'misi' => $misi,
        ];

        return view('webprofil.profil.visimisi', $data);
    }

    public function sejarah()
    {
        //
        $menu = 'sejarah';
        $edit = false;

        $sejarah = ProfilInfo::where('jenis', 'sejarah')->first();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'sejarah' => $sejarah,
        ];

        return view('webprofil.profil.sejarah', $data);
    }

    public function pengajuanpensiun()
    {
        //
        $menu = 'pengajuanpensiun';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.profil.pengajuanpensiun', $data);
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

        return view('webprofil.profil.pendiri', $data);
    }

    public function budaya()
    {
        //
        $menu = 'budaya';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.profil.budayakerja', $data);
    }

    public function struktur()
    {
        //
        $menu = 'budaya';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.profil.struktur', $data);
    }

    public function homedetail($id)
    {
        //
        $menu = 'home';
        $edit = false;

        $artikel = Artikel::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'artikel' => $artikel
        ];

        return view('webprofil.profil.homedetail', $data);
    }

}
