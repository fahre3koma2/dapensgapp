<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use App\Models\Admin\JenisPensiun as AdminJenisPensiun;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\JenisPensiun;


class PensiController extends Controller
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

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.home', $data);
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
        $menu = 'profil';
        $edit = false;

        $user = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));
        $jenis = AdminJenisPensiun::query()->get()->sortBy('id');
        //dd($jenis);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'jenis' => $jenis,
        ];

        return view('admin.dapen.profil', $data);
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
        $menu = 'profil';
        $edit = true;

        $user = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));
        $jenis = AdminJenisPensiun::query()->get()->sortBy('id');
        //dd($jenis);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'jenis' => $jenis,
        ];

        return view('admin.dapen.profil', $data);
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

    public function profil()
    {
        //
        $menu = 'profil';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.profil', $data);
    }

    public function uploadfoto()
    {
        //
        $menu = 'profil';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.uploadfoto', $data);
    }

    public function faq()
    {
        //
        $menu = 'faq';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.faq', $data);
    }

    public function datainfo()
    {
        //
        $menu = 'datainfo';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.datainfo', $data);
    }

    public function register()
    {
        //
        $menu = 'register';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.register.form1', $data);
    }

    public function geoloc()
    {
        //
        $menu = 'register';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.geoloc', $data);
    }
}
