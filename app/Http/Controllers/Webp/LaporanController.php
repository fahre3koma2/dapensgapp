<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Laporan;
use App\Models\Admin\KontakKami;

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

    public function laporberitaduka()
    {
        //
        $menu = 'laporan';
        $type = 'laporberitaduka';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'type' => $type
        ];

        return view('webprofil.layanan.laporberitaduka', $data);
    }

    public function laporanakmenikah()
    {
        //
        $menu = 'laporan';
        $type = 'laporanakmenikah';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'type' => $type
        ];

        return view('webprofil.layanan.laporanakmenikah', $data);
    }

    public function laporanakbekerja()
    {
        //
        $menu = 'laporan';
        $type = 'laporanakbekerja';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'type' => $type
        ];

        return view('webprofil.layanan.laporanakbekerja', $data);
    }

    public function lapormenikahlagi()
    {
        //
        $menu = 'laporan';
        $type = 'lapormenikahlagi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'type' => $type
        ];

        return view('webprofil.layanan.lapormenikahlagi', $data);
    }

    public function laporbercerai()
    {
        //
        $menu = 'laporan';
        $type = 'laporbercerai';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'type' => $type,
        ];

        return view('webprofil.layanan.laporbercerai', $data);
    }

    public function Laporankirim(Request $request)
    {
        //
        $data = $request->except('_token');
        $tgl = date('Y-m-d', strtotime($request->tgl_acara));

        $record = Laporan::where('jenis', $data['jenis'])->latest()->first();

        if ($record) {
            $expNum = explode('-', $record->nolaporan);
            $nextNumber = $data['kode'] . date('d') . date('y') . '-' . sprintf("%05d", $expNum[2] + 1);
        } else {
            $nextNumber = $data['kode'] . date('d') . date('y') . '-00001';
        }

        try {

            $data['tgl_acara'] = $tgl;
            $data['nolaporan'] = $nextNumber;
            $berita = Laporan::create($data);

            return redirect()->route('terimaberita', ['id' => encrypt($berita->nolaporan)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
    }

    public function terimaberita($id)
    {
        $menu = 'Laporan';
        $edit = false;
        $berita = Laporan::where('nolaporan', decrypt($id))->first();
        //dd($berita);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('webprofil.layanan.terimaberitaduka', $data);
    }

    public function terimapesan($id)
    {
        $menu = 'Kontak';
        $edit = false;
        $berita = KontakKami::where('nolaporan', decrypt($id))->first();
        //dd($berita);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('webprofil.layanan.terimapesan', $data);
    }

    public function kontakkirim(Request $request)
    {
        //
        $data = $request->except('_token');
        //$tgl = date('Y-m-d', strtotime($request->tgl_acara));

        $record = KontakKami::latest()->first();

        if ($record) {
            $expNum = explode('-', $record->nolaporan);
            $nextNumber = "KK-" . date('d') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
        } else {
            $nextNumber = "KK-" . date('d') . date('y') . '-00001';
        }

        try {

            $data['nolaporan'] = $nextNumber;
            $berita = KontakKami::create($data);

            return redirect()->route('terimapesan', ['id' => encrypt($berita->nolaporan)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
    }
}
