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
        $konten = konten::query()->get();

        $menu = 'profilgambar';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
        ];

        return view('admin.konten.profilgambar', $data);
    }

    public function editgambar($id)
    {
        //
        $konten = Konten::query()->find(decrypt($id));

        $menu = 'profilgambar';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
        ];

        return view('admin.konten.editgambar', $data);
    }

    public function updategambar(Request $request)
    {
        $data = $request->except('_token');

        $this->validate(
            $request,
            [
                'file' => 'required|mimes:mimes:jpeg,jpg,png|max:2000'
            ],
            [
                'file.required' => 'Tidak ada file yang di upload',
                'file.mimes' => 'File harus gambar format png/jpg',
                'file.max' => 'File tidak boleh lebih dari 2 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file

        $image = $request->file('file');
        $nama_file = 'slide'.$request->idx. '.' . $image->getClientOriginalExtension();

        $tujuan_upload = 'webprof/images/dapen';
        $image->move($tujuan_upload, $nama_file);

        $data['file'] = $nama_file;

        $user = Konten::query()->find($data['idx']);
        // dd($user);
        $user->update($data);

        alert()->success(
            'Berhasil',
            'Foto berhasil di tambahkan'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        return redirect()->route('admin.profilgambar');
    }
}
