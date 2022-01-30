<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Laporan;

class LaporanController extends Controller
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

    public function beritaduka()
    {
        //
        $menu = 'laporberitaduka';
        $edit = false;

        $berita = Laporan::where('jenis', 'laporberitaduka')->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.layanan.laporan.laporberitaduka', $data);
    }

    public function anakmenikah()
    {
        //
        $menu = 'laporanakmenikah';
        $edit = false;

        $berita = Laporan::where('jenis', 'laporanakmenikah')->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.layanan.laporan.laporanakmenikah', $data);
    }

    public function anakbekerja()
    {
        //
        $menu = 'laporanakbekerja';
        $edit = false;

        $berita = Laporan::where('jenis', 'laporanakbekerja')->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.layanan.laporan.laporanakbekerja', $data);
    }

    public function menikahlagi()
    {
        //
        $menu = 'lapormenikahlagi';
        $edit = false;

        $berita = Laporan::where('jenis', 'lapormenikahlagi')->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.layanan.laporan.lapormenikahlagi', $data);
    }

    public function bercerai()
    {
        //
        $menu = 'laporbercerai';
        $edit = false;

        $berita = Laporan::where('jenis', 'laporbercerai')->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.layanan.laporan.laporbercerai', $data);
    }
}
