<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Galeri;
use App\Models\Admin\Kategori;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;
use File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konten = Galeri::query()->get();

        $menu = 'galeri';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'konten' => $konten,
        ];

        return view('admin.dapen.galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menu = 'galeri';
        $edit = false;
        $kategori = Kategori::where('kode', '!=', 'HM')->get()->sortBy('id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'kategori' => $kategori,
        ];

        return view('admin.dapen.galeri.create', $data);
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
        $string = Str::random(12);
        $nama_file = $request->judul . '_' . $string . '.' . $image->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload
        $filePath = public_path('dapen/galeri/thumb');

        $img = Image::make($image->path());
        $img->resize(150, 150, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $nama_file);

        $tujuan_upload = 'dapen/galeri';
        $image->move($tujuan_upload, $nama_file);

        $data['file'] = $nama_file;

        $artikel = Galeri::create($data);

        alert()->success(
            'Berhasil',
            'Foto Galeri berhasil di tambahkan'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        return redirect()->route('admin.galeri.index');
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
        $berkasnya = Galeri::where('id', decrypt($id))->first();

        File::delete('dapen/galeri/thumb/' . $berkasnya->gambar);
        File::delete('dapen/galeri/' . $berkasnya->gambar);

        Galeri::where('id', decrypt($id))->delete();

        alert()->success(
            'Berhasil',
            'Foto Galeri berhasil di hapus'
        );

        return redirect()->route('admin.galeri.index');
    }
}
