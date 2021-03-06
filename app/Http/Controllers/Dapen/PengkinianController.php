<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BiodataUpdate;
use App\Models\Biodata;
use App\Models\Admin\Lampiran;
use App\Models\Admin\Jadwal;
use App\Models\Admin\RekeningPensiun;
use App\Models\Admin\Periode;

use Alert;
use Exception;
use Crypt;
use Validator;
use Image;
use Str;
use File;
use Carbon\Carbon;
use PDF;
use Carbon\CarbonPeriod;

use function PHPUnit\Framework\isNull;

class PengkinianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idu = auth()->user()->id;

        $biodata = BiodataUpdate::where('user_id', $idu)->orderBy('updated_at', 'desc')->get();
        $periode = Periode::where('tahun', date('Y'))->first();

        $user = is_null($biodata) ?  $biodata[0]->user_id : null;

        $menu = 'pensi';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'biodata' => $biodata,
            'user' => $user,
            'idu' => $idu,
            'periode' => $periode,

        ];

        return view('admin.dapen.layanan.pengkiniandata.index', $data);
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

    public function form1($id , $periode)
    {
        //
        $cekuser = User::query()->with(['biodata', 'biodataupdate'])->find(decrypt($id));
        $cekperiode = BiodataUpdate::where('periode', $periode)->where('user_id', decrypt($id))->first();

        if ($cekperiode) {
            alert()->warning('Sudah melakukan pengkinian data periode ini', 'Gagal');
            return redirect()->back()->withInput();
        }

        if($cekuser->biodataupdate){
            $user = BiodataUpdate::with('rekening', 'keluarga')->where([['nopeserta', $cekuser->biodata->nopeserta], ['baru', null], ['tampil', null], ['verifikasi', null]])->orderBy('updated_at', 'desc')->first();
            if($user) {
                alert()->warning('Masih Ada Permohonan yang belum selesai', 'Gagal');
                return redirect()->back()->withInput();
            } else {
                $user = BiodataUpdate::with('rekening', 'keluarga')->where([['nopeserta', $cekuser->biodata->nopeserta], ['baru', 2], ['tampil', 1]])->orderBy('updated_at', 'desc')->first();
            }

        }else{
            $user = Biodata::with('rekening', 'keluarga')->where('nopeserta', $cekuser->biodata->nopeserta)->first();
        }
        //dd($cekuser->biodataupdate);
        if($user->jenis == 'U'){
            $nama =  $user->keluarga->where('hubungan', 'S')->first();
        } elseif ($user->jenis == 'J') {
            $nama =  $user->keluarga->where('hubungan', 'I')->first();
        } elseif ($user->jenis == 'A') {
            $nama =  $user->keluarga->where('hubungan', 'A')->where('st_kerja', 0)->where('st_nikah', 0)->first();
            if($nama == null){
               $nama = $user;
            }
        } else {
            $nama = $user;
        }

            $menu = 'permohonan';
            $edit = false;
            $mohon = null;

            $data = [
                'menu' => $menu,
                'edit' => $edit,
                'user' => $user,
                'mohon' => $mohon,
                'nama' => $nama,
                'periode' => $periode,
            ];

            return view('admin.dapen.layanan.pengkiniandata.form1', $data);
        // }
    }

    public function form2($id)
    {
        //
        $menu = 'permohonan';
        $edit = false;

        $mohon = BiodataUpdate::query()->with(['keluarga', 'lampiran'])->find(decrypt($id));
        //dd($mohon->keluarga);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        return view('admin.dapen.layanan.pengkiniandata.form2', $data);
    }


    public function form3($id)
    {
        //

        $menu = 'permohonan';
        $edit = false;

        $mohon = BiodataUpdate::with('lampiran')->where('data_kel', 1)->where('id', decrypt($id))->first();
        if($mohon == null){
            alert()->warning('Mohon untuk klik tombol simpan terlebih dahulu', 'Gagal');
            return redirect()->back()->withInput();
        }
        //dd($mohon);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        return view('admin.dapen.layanan.pengkiniandata.form3', $data);
    }

    public function form4($id)
    {
        //
        $menu = 'permohonan';
        $edit = false;


        $user = BiodataUpdate::query()->with(['lampiran', 'keluarga'])->find(decrypt($id));

        if ($user->jenis == 'U') {
            $nama =  $user->keluarga->where('hubungan', 'S')->first();
        } elseif ($user->jenis == 'J') {
            $nama =  $user->keluarga->where('hubungan', 'I')->first();
        } elseif ($user->jenis == 'A') {
            $nama =  $user->keluarga->where('hubungan', 'A')->where('st_kerja', 0)->where('st_nikah', 0)->first();
            if ($nama == null) {
                $nama = $user;
            }
        } else {
            $nama = $user;
        }
        //dd($user);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'nama' => $nama,
        ];
        return view('admin.dapen.layanan.pengkiniandata.form4', $data);
    }

    public function formedit1($id, $periode)
    {
        //
        $menu = 'permohonan';
        $edit = true;

        $user = BiodataUpdate::query()->with(['rekening','lampiran'])->find(decrypt($id));
        // $user = User::where('id', $mohon->user_id)->first();
        if ($user->jenis == 'U') {
            $nama =  $user->keluarga->where('hubungan', 'S')->first();
        } elseif ($user->jenis == 'J') {
            $nama =  $user->keluarga->where('hubungan', 'I')->first();
        } elseif ($user->jenis == 'A') {
            $nama =  $user->keluarga->where('hubungan', 'A')->where('st_kerja', 0)->where('st_nikah', 0)->first();
            if ($nama == null) {
                $nama = $user;
            }
        } else {
            $nama = $user;
        }


        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'nama' => $nama,
            'periode' => $periode,
        ];

        return view('admin.dapen.layanan.pengkiniandata.form1', $data);
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
        $nopeserta = $request->nopeserta;
        $record = BiodataUpdate::latest()->first();

        if ($record) {
            $expNum = explode('-', $record->nopd);
            $nextNumber = 'PD-' . date('m') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
        } else {
            $nextNumber = 'PD-' . date('m') . date('y') . '-001';
        }

        try {

            $data['nopd'] = $nextNumber;
            //$data['baru'] = 1;
            $mohon = BiodataUpdate::create($data);
            $rekening = RekeningPensiun::where('nopeserta', $data['nopeserta'])->first();
            $rekening->update($data);
            $check = Lampiran::where('nopeserta', $nopeserta)->first();
            if ($check == null) {
                $lampiran = Lampiran::create($data);
            }

            return redirect()->route('pensi.pengkiniandata-form2', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
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
        $data = $request->except('_token');

        try {
            $mohon = BiodataUpdate::query()->with(['lampiran'])->find(decrypt($id));

            $mohon->update($data);

            return redirect()->route('pensi.pengkiniandata-form2', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
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

    public function upload(Request $request)
    {
        if ($request->type == "file_skperusahaan") {
            $this->validate(
                $request,
                ['file_skperusahaan' => 'required|mimes:pdf|max:1000'],
                [
                    'file_skperusahaan.required' => 'Tidak ada file yang di upload',
                    'file_skperusahaan.mimes' => 'File harus pdf',
                    'file_skperusahaan.max' => 'File tidak boleh lebih dari 10 mb',
                ]
            );
        } elseif ($request->type == "file_surat_nikah") {
            $this->validate(
                $request,
                ['file_surat_nikah' => 'required|mimes:pdf,jpg,jpeg,png|max:5000'],
                [
                    'file_surat_nikah.required' => 'Tidak ada file yang di upload',
                    'file_surat_nikah.mimes' => 'File harus pdf',
                    'file_surat_nikah.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_ktp") {
            $this->validate(
                $request,
                ['file_ktp' => 'required|mimes:jpg,jpeg,png|max:1000'],
                [
                    'file_ktp.required' => 'Tidak ada file yang di upload',
                    'file_ktp.mimes' => 'File harus pdf',
                    'file_ktp.max' => 'File tidak boleh lebih dari 10 mb',
                ]
            );
        } elseif ($request->type == "file_kk") {
            $this->validate(
                $request,
                ['file_kk' => 'required|mimes:jpg,jpeg,png,pdf|max:5000'],
                [
                    'file_kk.required' => 'Tidak ada file yang di upload',
                    'file_kk.mimes' => 'File harus pdf',
                    'file_kk.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_surat_kematian") {
            $this->validate(
                $request,
                ['file_surat_kematian' => 'required|mimes:pdf,jpg,jpeg,png|max:5000'],
                [
                    'file_surat_kematian.required' => 'Tidak ada file yang di upload',
                    'file_surat_kematian.mimes' => 'File harus pdf',
                    'file_surat_kematian.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_tabungan") {
            $this->validate(
                $request,
                ['file_tabungan' => 'required|mimes:pdf|max:1000'],
                [
                    'file_tabungan.required' => 'Tidak ada file yang di upload',
                    'file_tabungan.mimes' => 'File harus pdf',
                    'file_tabungan.max' => 'File tidak boleh lebih dari 10 mb',
                ]
            );
        } elseif ($request->type == "file_scan_karyawan") {
            $this->validate(
                $request,
                ['file_scan_karyawan' => 'required|mimes:pdf|max:1000'],
                [
                    'file_scan_karyawan.required' => 'Tidak ada file yang di upload',
                    'file_scan_karyawan.mimes' => 'File harus pdf',
                    'file_scan_karyawan.max' => 'File tidak boleh lebih dari 10 mb',
                ]
            );
        } elseif ($request->type == "file_lain1") {
            $this->validate(
                $request,
                ['file_lain1' => 'required|mimes:pdf|max:1000'],
                [
                    'file_lain1.required' => 'Tidak ada file yang di upload',
                    'file_lain1.mimes' => 'File harus pdf',
                    'file_lain1.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_lain2") {
            $this->validate(
                $request,
                ['file_lain2' => 'required|mimes:pdf|max:1000'],
                [
                    'file_lain2.required' => 'Tidak ada file yang di upload',
                    'file_lain2.mimes' => 'File harus pdf',
                    'file_lain2.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_lain3") {
            $this->validate(
                $request,
                ['file_lain3' => 'required|mimes:pdf|max:1000'],
                [
                    'file_lain3.required' => 'Tidak ada file yang di upload',
                    'file_lain3.mimes' => 'File harus pdf',
                    'file_lain3.max' => 'File tidak boleh lebih dari 10 mb',
                ]
            );
        } else {
        }

        $data = $request->except('_token');
        $idx = $request->idx;
        $type = $data['type'];

        $file = $request->file($data['type']);
        $nama_file = $data['type'] . '_' . $data['valueid'] . '.' . $file->getClientOriginalExtension();

        $tujuan_upload = public_path() . '/dapen/lampiran/' . $data['valueid'];
        if (!file_exists($tujuan_upload)) {
            File::makeDirectory($tujuan_upload, 0777, true, true);
        }

        $file->move($tujuan_upload, $nama_file);

        $filenya[$type] = $nama_file;
        $lampiran = Lampiran::where('nopeserta', $data['valueid'])->first();
        //dd($filenya);

        $lampiran->update($filenya);

        return redirect()->route('pensi.pengkiniandata-form3', $idx);
    }

    public function deleteFile(Request $request)
    {

        $idx = $request->idx;
        $lampiran = Lampiran::where('nopeserta', $request->id)->first();
        $tujuan_upload = public_path() . '/dapen/lampiran/';
        File::delete($tujuan_upload . $request->id . '/' . $lampiran[$request->type]);

        $filenya[$request->type] = null;
        $lampiran->update($filenya);

        return redirect()->route('pensi.pengkiniandata-form3', $idx);
    }

    public function kirim($id)
    {
        $mohon = BiodataUpdate::query()->with(['lampiran'])->find(decrypt($id));

        //if (is_null($mohon->lampiran->file_kk) || is_null($mohon->lampiran->file_surat_nikah) || is_null($mohon->lampiran->file_surat_kematian) || is_null($mohon->lampiran->file_lain1) || is_null($mohon->lampiran->file_lain2)) {
        if (is_null($mohon->lampiran->file_kk)) {

            // Alert::warning('Gagal', 'File Lampiran Usulan harus lengkap');
            alert()->warning('File Lampiran Usulan harus lengkap', 'Gagal');
            return redirect()->route('pensi.pengkiniandata-form3', Crypt::encrypt($mohon->id))->with('message', 'File Lampiran Usulan harus lengkap');

        } else {
            $record = BiodataUpdate::latest()->first();
            $data['baru'] = 1;
            $mohon->update($data);

            $data = [
                'mohon' => $mohon,
            ];

            alert()->success('Permohonan akan di prosess maksimal 3 x 24 Jam setelah data di terima valid & lengkap', 'Berhasil')->persistent('Ya');
            return redirect()->route('pensi.pengkinian.index', $data)->with('success', 'Permohonan akan di prosess maksimal 3 x 24 Jam setelah data di terima valid & lengkap');
        }
    }

    public function cetakpengkiniandata($id)
    {
        $tahun = date('Y');
        $biodata = BiodataUpdate::where('nopeserta', decrypt($id))->orderBy('updated_at', 'desc')->get();

        if ($biodata->count() > 1) {
            $user1 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', 1], ['verifikasi', 1], ['baru', 2]])->orderBy('created_at', 'desc')->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['tampil', null], ['verifikasi', null], ['baru', 1]])->first();
        } else {

            $user1 = Biodata::where([['nopeserta', $biodata[0]->nopeserta]])->first();
            $user2 = BiodataUpdate::where([['nopeserta', $biodata[0]->nopeserta], ['baru', 2], ['verifikasi', 1], ['tampil', 1]])->first();
        }

        if ($user1->jenis == 'U') {
            $nama =  $user1->keluarga->where('hubungan', 'S')->first();
        } elseif ($user1->jenis == 'J') {
            $nama =  $user1->keluarga->where('hubungan', 'I')->first();
        } elseif ($user1->jenis == 'A') {
            $nama =  $user1->keluarga->where('hubungan', 'A')->where('st_kerja', 0)->where('st_nikah', 0)->first();
            if ($nama == null) {
                $nama = $user1;
            }
        } else {
            $nama = $user1;
        }

        $pdf = PDF::loadview('admin.dapen.layanan.cetakpengkiniandata', ['user1' => $user1, 'user2' => $user2, 'nama' => $nama]);
        return $pdf->download('laporan-pegawai-pdf.pdf');
    }
}
