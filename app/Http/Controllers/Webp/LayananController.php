<?php

namespace App\Http\Controllers\Webp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\BeritaDuka;

class LayananController extends Controller
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

    public function pengajuanpensiun()
    {
        //
        $menu = 'pengajuanpensiun';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.layanan.pengajuanpensiun', $data);
    }

    public function laporberitaduka()
    {
        //
        $menu = 'laporberitaduka';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('webprofil.layanan.laporberitaduka', $data);
    }


    public function beritadukakirim(Request $request)
    {
        //
        $data = $request->except('_token');
        $tgl = date('Y-m-d', strtotime($request->tgl_meninggal));
        $record = BeritaDuka::latest()->first();

            if($record){
                $expNum = explode('-', $record->nolaporan);
                $nextNumber = 'BD-'. date('m') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
            } else {
                $nextNumber = 'BD-'. date('m') . date('y') . '-001';
            }

        try {

            $data['tgl_meninggal'] = $tgl;
            $data['nolaporan'] = $nextNumber;
            $berita = BeritaDuka::create($data);

            return redirect()->route('terimaberita', ['id' => encrypt($berita->nolaporan)])->with('message', 'Operation Successful !');

        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }

    }

    public function terimaberita($id)
    {
        $menu = 'laporberitaduka';
        $edit = false;
        $berita = BeritaDuka::where('nolaporan', decrypt($id))->first();
        //dd($berita);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('webprofil.layanan.terimaberitaduka', $data);
    }

    public function adminlaporberitaduka()
    {
        //
        $menu = 'laporberitaduka';
        $edit = false;

        $berita = BeritaDuka::latest()->get()->sortBy('created_at');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'berita' => $berita
        ];

        return view('admin.dapen.layanan.laporberitaduka', $data);
    }
}
