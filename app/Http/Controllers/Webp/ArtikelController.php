<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Admin\Artikel;
use App\Models\Admin\Kategori;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kat)
    {
        //
        $menu = 'artikel';
        $edit = false;

        $konten = Artikel::where('kategori', '!=', 'Home')->where('kategori', $kat)->orderBy('id', 'desc')->paginate(3);
        //$kategori = Kategori::query()->get()->sortBy('id');

        $kategori = DB::table('kategori')
        ->join('artikel', 'kategori.nama', '=', 'artikel.kategori')
        ->select('kategori.id as id', 'kategori.nama as nama', DB::raw("count(artikel.kategori) as count"))
        ->groupBy('kategori.id')
        ->get();

        $bulan = DB::table('artikel')
        ->select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%M %Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
        ->groupBy('year','month')
        ->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
            'kategori' => $kategori,
            'bulan' => $bulan,
            'kat' => $kat,
        ];

        return view('webprofil.berita.artikel', $data);
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
        $menu = 'artikel';
        $edit = false;

        $artikel = Artikel::query()->find(decrypt($id));
        $konten = Artikel::orderBy('id', 'desc')->paginate(3);
        $kategori = DB::table('kategori')
            ->join('artikel', 'kategori.nama', '=', 'artikel.kategori')
            ->select('kategori.id as id', 'kategori.nama as nama', DB::raw("count(artikel.kategori) as count"))
            ->groupBy('kategori.id')
            ->get();

        $bulan = DB::table('artikel')
        ->select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%M %Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
        ->groupBy('year', 'month')
        ->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'artikel' => $artikel,
            'kategori' => $kategori,
            'bulan' => $bulan,
            'konten' => $konten
        ];

        return view('webprofil.berita.artikeldetail', $data);
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
}
