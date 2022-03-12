<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Artikel;
use App\Models\Admin\Kategori;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konten = Artikel::query()->get();

        $menu = 'artikel';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
        ];

        return view('admin.dapen.artikel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'artikel';
        $edit = false;
        $kategori = Kategori::query()->get()->sortBy('id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'kategori' => $kategori,
        ];

        return view('admin.dapen.artikel.create', $data);
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
        $data = $request->except('_token');
        //dd($data);
        $this->validate(
            $request,
            [
                'foto' => 'required|mimes:mimes:jpeg,jpg,png|max:5000'
            ],
            [
                'foto.required' => 'Tidak ada file yang di upload',
                'foto.mimes' => 'File harus gambar format png/jpg',
                'foto.max' => 'File tidak boleh lebih dari 2 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file
        $image = $request->file('foto');
        $kategori = $request->kategori;
        $string = Str::random(12);
        $nama_file = $kategori . '_' . $string . '.' . $image->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload
        $filePath = public_path('dapen/artikel/thumb');

        $img = Image::make($image->path());
        $img->resize(150, 150, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $nama_file);

        $tujuan_upload = 'dapen/artikel';
        $image->move($tujuan_upload, $nama_file);

        $data['gambar'] = $nama_file;

        $artikel = Artikel::create($data);

        alert()->success(
            'Berhasil',
            'Artikel berhasil di tambahkan'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        return redirect()->route('admin.artikel.index');
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
        $menu = 'artikel';
        $edit = true;
        $kategori = Kategori::query()->get()->sortBy('id');
        $konten = Artikel::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'kategori' => $kategori,
            'konten' => $konten,
        ];

        return view('admin.dapen.artikel.create', $data);

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
        $data = $request->except('_token');

        try {

            $artikel = Artikel::query()->find(decrypt($id));
            $artikel->update($data);

            return redirect()->route('admin.artikel')->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
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
