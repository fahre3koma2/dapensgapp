<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Biodata;
use App\Models\BiodataUpdate;
use App\Models\Admin\SKeterangan;
use App\Models\Admin\SkPenetapan;

use Carbon\Carbon;
use PDF;
use Carbon\CarbonPeriod;

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

        $biodata = BiodataUpdate::where('nopeserta', decrypt($id))->orderBy('updated_at', 'desc')->get();

        if ($biodata->count() > 1) {
            $user1 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', 1], ['verifikasi', 1], ['baru', 2]])->orderBy('created_at', 'desc')->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', null], ['verifikasi', null], ['baru', 1]])->first();
        } else {

            $user1 = Biodata::where([['nopeserta', $biodata[0]->nopeserta]])->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['baru', 1]])->first();
        }



        $pdf = PDF::loadview('admin.dapen.layanan.cetakpengkiniandata', ['user1' => $user1, 'user2' => $user2]);
        return $pdf->download('laporan-pegawai-pdf.pdf');
    }

    public function skpenetapan()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $user = User::query()->find(auth()->user()->id);
        $mohon = SkPenetapan::where('nopeserta', $user->nopeserta)->get();

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
        $user = User::query()->find(auth()->user()->id);
        $mohon = SKeterangan::where('nopeserta', $user->nopeserta)->get();

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

    public function buktislip(Request $request)
    {
        //
        $menu = 'pensi';
        $edit = false;
        $bulanini = date('m-Y', strtotime('now'));
        $tgl = !is_null($request->bulan) ? $request->bulan : $bulanini;
        $tgl = explode('-', $tgl);
        $month = $tgl[0];
        $year = $tgl[1];

        $from = date('Y-m', strtotime('-2 month'));
        $to = date('Y-m', strtotime('now'));
        $period = CarbonPeriod::create($from, '1 month', $to);

        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        //dd($bulan);
        //$bulan = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
        //dd($user->biodata->nopeserta);
        $data = [
            'menu'   => $menu,
            'edit'   => $edit,
            'user' => $user,
            'month'  => $month,
            'year'   => $year,
            'period' => $period
        ];


        return view('admin.dapen.layanan.buktislip.index', $data);
    }

    public function buktipajak(Request $request)
    {
        //
        $menu = 'pensi';
        $edit = false;
        $tahunini = date('Y', strtotime('now'));
        $tahun = !is_null($request->tahun) ? $request->tahun : $tahunini;
        $user = User::query()->with(['biodata'])->find(auth()->user()->id);

        //$mohon = SKeterangan::query()->get();
        //$bulan = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

        $data = [
            'menu' => $menu,
            'user' => $user,
            'edit' => $edit,
            'tahun' =>  $tahun
        ];


        return view('admin.dapen.layanan.buktipajak.index', $data);
    }

    public function skkenaikan()
    {
        //
        $menu = 'pensi';
        $edit = false;

        //dd(Carbon::parse('2019-03-01')->translatedFormat('d F Y'));
        $mohon = SKeterangan::query()->get();
        $bulan = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'bulan' =>  $bulan
        ];


        return view('admin.dapen.layanan.buktipajak.index', $data);
    }

}
