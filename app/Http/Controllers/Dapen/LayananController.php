<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Admin\SKeterangan;
use App\Models\Admin\SkPenetapan;

use Carbon\Carbon;
use PDF;

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

    public function layananinfo()
    {
        //
        $menu = 'layanan';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.layanan.layanan', $data);
    }

    public function pengkiniandata()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $users = User::query()->with(['biodata', 'RolesUser'])->where('name', '!=', 'Admin')->where('status', '=', 'Pensiunan')->orderBy('updated_at', 'desc')->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'users' => $users,
        ];


        return view('admin.dapen.layanan.pengkiniandata', $data);
    }

    public function cetakpengkiniandata($id)
    {
        $pensiun = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));

        $pdf = PDF::loadview('admin.dapen.layanan.cetakpengkiniandata', ['pensiun' => $pensiun]);
        return $pdf->download('laporan-pegawai-pdf.pdf');
    }

    public function skpenetapan()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SkPenetapan::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];


        return view('admin.dapen.layanan.skpenetapan.index', $data);
    }

    public function skpenetapancreate($id)
    {
        //
        $user = User::query()->with(['biodata'])->find(decrypt($id));
        $cek = SkPenetapan::where('nopeserta', $user->nopeserta)->where('status', null)->count();
        //dd($user->nopeserta);
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

        return view('admin.dapen.layanan.skpenetapan.create', $data);
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

        alert()->success('Berhasil','Permohonan berhasil di tambahkan');

        return redirect()->route('pensi.skpenetapan');
    }

    public function sketerangan()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SKeterangan::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];


        return view('admin.dapen.layanan.sketerangan.index', $data);
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
