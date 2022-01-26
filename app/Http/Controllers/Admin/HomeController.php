<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Panduan;
use App\Models\BiodataUpdate;
use App\Models\Admin\SKeterangan;
use App\Models\Admin\SkPenetapan;
use App\Models\Admin\BeritaDuka;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'kontakkami';
        $edit = false;

        $form = Panduan::orderBy('id')->get();

        $skket = SKeterangan::where('status', null)->count();
        $skpen = SkPenetapan::where('status', null)->count();

        $dash['pengkinian'] = BiodataUpdate::where([['baru', '1'], ['tampil', null], ['verifikasi', null]])->count();
        $dash['permohonan'] = '';
        $dash['sk'] = $skket + $skpen;
        $dash['berduk'] = BeritaDuka::where('status', null)->count();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'dash' => $dash
        ];

        if(Auth::user()->roles[0]->name == 'Pensiunan'){
            return view('admin.dapen.home', $data);
        } else {
            return view('admin.home.index', $data);
        }

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
}
