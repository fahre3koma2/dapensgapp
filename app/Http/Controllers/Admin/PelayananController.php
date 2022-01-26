<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BiodataUpdate;
use App\Models\Admin\SKeterangan;
use App\Models\Admin\SkPenetapan;


class PelayananController extends Controller
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
        $menu = 'pensi';
        $edit = false;
        $judul = 'SK Penetapan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SkPenetapan::where('status', null)->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.dapen.pelayanan.skadmin.detail', $data);
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

    public function skpenetapan()
    {
        //
        $menu = 'pensi';
        $edit = false;
        $judul = 'SK Penetapan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SkPenetapan::query()->orderBy('created_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.dapen.pelayanan.skadmin.index', $data);
    }

    public function skpenetapanshow($id)
    {
        //
        $menu = 'pensi';
        $edit = false;
        $judul = 'SK Penetapan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SkPenetapan::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.dapen.pelayanan.skadmin.detail', $data);
    }

    public function skpenetapanstore(Request $request)
    {
        //
        $data = $request->except('_token');

        $menu = 'skpenetapan';
        $edit = false;

        $record = SkPenetapan::latest()->first();

        if ($record) {
            $expNum = explode('-', $record->noskpenetapan);
            $nextNumber = 'SKP-' . date('m') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
        } else {
            $nextNumber = 'SKP-' . date('m') . date('y') . '-001';
        }

        $data['noskpenetapan'] = $nextNumber;
        $mohon = SkPenetapan::create($data);

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        alert()->success('Berhasil', 'Permohonan berhasil di tambahkan');

        return redirect()->route('pensi.skpenetapan');
    }

    public function skupdate(Request $request)
    {
        //
        $data = $request->except('_token');
        //dd($request->file);
        $this->validate(
            $request,
            [
                'permintaan_sk' => 'required|mimes:pdf|max:1000'
            ],
            [
                'permintaan_sk.required' => 'Tidak ada file yang di upload',
                'permintaan_sk.mimes' => 'File harus gambar format pdf',
                'permintaan_sk.max' => 'File tidak boleh lebih dari 1 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file
        $permintaan_sk = $request->file('permintaan_sk');
        $kategori = $request->judul;
        if ($kategori == 'SK Penetapan') { $kat = 'skpenetapan'; } else { $kat = 'sketerangan'; }
        $string = date('Y-m-d');
        $nama_file = $kat . '_' . $request->nopeserta . '_' . $string . '.' . $permintaan_sk->getClientOriginalExtension();

        $tujuan_upload = 'dapen/skpermintaan/'. $kat .'/';
        $permintaan_sk->move($tujuan_upload, $nama_file);

        $filenya['file'] = $nama_file;
        $filenya['status'] = '1';

        if($kategori == 'SK Penetapan'){
            $minta = SkPenetapan::query()->find($request->id);
        }else{
            $minta = SKeterangan::query()->find($request->id);
        }

        $minta->update($filenya);

        alert()->success(
            'Berhasil',
            'Permintaan Berhasil Di Verifikasi'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        if ($kategori == 'SK Penetapan') {
            return redirect()->route('admin.skpenetapan');
        } else {
            return redirect()->route('admin.sketerangan');
        }
    }

    public function sketerangan()
    {
        //
        $menu = 'pensi';
        $edit = false;
        $judul = 'Surat Keterangan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SKeterangan::query()->orderBy('created_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.dapen.pelayanan.skadmin.index', $data);
    }

    public function sketeranganshow($id)
    {
        //
        $menu = 'pensi';
        $edit = false;
        $judul = 'Surat Keterangan';

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SKeterangan::query()->find(decrypt($id));

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'judul' => $judul
        ];


        return view('admin.dapen.pelayanan.skadmin.detail', $data);
    }

    public function sketerangancreate($id)
    {
        //
        $user = User::query()->with(['biodata'])->find(decrypt($id));
        $cek = SKeterangan::where('nopeserta', $user->nopeserta)->where('status', null)->count();

        if ($cek > 0) {
            alert()->warning('Masih Ada Permohonan yang belum selesai', 'Gagal');
            return redirect()->back()->withInput();
        }

        $menu = 'pensi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
        ];


        return view('admin.dapen.layanan.sketerangan.create', $data);
    }

    public function sketeranganstore(Request $request)
    {
        //
        $data = $request->except('_token');

        $menu = 'pensi';
        $edit = false;

        $record = SKeterangan::latest()->first();

        if ($record) {
            $expNum = explode('-', $record->nosketerangan);
            $nextNumber = 'SK-' . date('m') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
        } else {
            $nextNumber = 'SK-' . date('m') . date('y') . '-001';
        }

        $data['nosketerangan'] = $nextNumber;
        $mohon = SKeterangan::create($data);

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        alert()->success('Berhasil', 'Permohonan berhasil di tambahkan');

        return redirect()->route('pensi.sketerangan');
    }
}
