<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Periode;
use App\Models\Admin\Panduan;

class AdminSetingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function panduan()
    {
        //
        $menu = 'Panduan';
        $edit = false;
        $judul = 'Data Panduan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = Panduan::query()->orderBy('created_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.seting.panduan.index', $data);
    }


    public function panduanedit($id)
    {
        //
        $menu = 'panduan';
        $edit = false;

        $mohon = Panduan::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon
        ];

        return view('admin.seting.panduan.create', $data);
    }

    public function updatepanduan(Request $request)
    {
        $data = $request->except('_token');

        $this->validate(
            $request,
            [
                'file' => 'required|mimes:pdf|max:3000'
            ],
            [
                'file.required' => 'Tidak ada file yang di upload',
                'file.mimes' => 'File harus gambar format png/jpg',
                'file.max' => 'File tidak boleh lebih dari 2 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file

        $image = $request->file('file');
        $nama_file = $request->status . $request->idx . '.' . $image->getClientOriginalExtension();

        $tujuan_upload = 'webprof/filedapen';
        $image->move($tujuan_upload, $nama_file);

        $data['file'] = $nama_file;
        $user = Panduan::query()->find($data['idx']);
        // dd($user);
        $user->update($data);

        alert()->success(
            'Berhasil',
            'Foto berhasil di tambahkan'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        return redirect()->route('admin.seting-panduan');
    }

    public function periode()
    {
        //
        $menu = 'periode';
        $edit = false;
        $judul = 'Periode Pengkinian Data';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = Periode::query()->orderBy('created_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.seting.periode.index', $data);
    }

    public function periodecreate()
    {
        //
        $menu = 'periode';
        $edit = false;
        $judul = 'Tambah Periode Pengkinian Data';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $tahun = date('Y');
        $mohon = Periode::where('tahun', $tahun)->first();

        if ($mohon) {
            alert()->warning('Sudah melakukan seting pada periode ini', 'Gagal');
            return redirect()->back()->withInput();
        }

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.seting.periode.create', $data);
    }

    public function periodeedit($id)
    {
        //
        $menu = 'periode';
        $edit = true;
        $judul = 'Tambah Periode Pengkinian Data';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $tahun = date('Y');
        $mohon = Periode::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.seting.periode.create', $data);
    }


    public function periodepost(Request $request)
    {
        //
        $data = $request->except('_token');

        try {

            $tanggal = date('Y');
            $data['tahun'] = $tanggal;
            $data['tahun1'] = $tanggal.'1';
            $data['tahun2'] = $tanggal.'2';

            $mohon = Periode::create($data);

            return redirect()->route('admin.seting-periode', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
    }

    public function periodeupdate(Request $request, $id)
    {
        //
        $data = $request->except('_token');

        try {

            $tanggal = date('Y');
            $data['tahun'] = $tanggal;
            $data['tahun1'] = $tanggal . '1';
            $data['tahun2'] = $tanggal . '2';

            $mohon = Periode::query()->find(decrypt($id));
            $mohon->update($data);

            return redirect()->route('admin.seting-periode', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }

    }
}
