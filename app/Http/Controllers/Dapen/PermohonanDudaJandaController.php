<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Admin\PermohonanKaryawan;
use App\Models\Admin\PermohonanDudaJanda;
use App\Models\Admin\LampiranDudaJanda;
use App\Models\Admin\DataKeluarga;
use App\Models\Admin\RekeningPensiun;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;
use File;

class PermohonanDudaJandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'register';
        $edit = false;

        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        $mohon = PermohonanDudaJanda::where('nopeserta', $user->biodata->nopeserta)->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
        ];

        return view('admin.dapen.permohonandudajanda.index', $data);
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

    public function form1($id)
    {
        //
        $user = User::query()->with(['biodata', 'keluarga', 'keluarga'])->find(decrypt($id));
        $cek = PermohonanDudaJanda::where('nopeserta', $user->biodata->nopeserta)->where('status', null)->count();

        if($cek > 0)
        {
            alert()->warning('Masih Ada Permohonan yang belum selesai', 'Gagal');
            return redirect()->back()->withInput();

        } else {

            $menu = 'permohonan';
            $edit = false;
            $mohon = null;

            $data = [
                'menu' => $menu,
                'edit' => $edit,
                'user' => $user,
                'mohon' => $mohon,
            ];

            return view('admin.dapen.permohonandudajanda.form1', $data);
        }
    }

    public function form2($id)
    {
        //
        $menu = 'permohonan';
        $edit = false;

        $mohon = PermohonanDudaJanda::query()->with(['lampiran'])->find(decrypt($id));
        //dd($mohon);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        return view('admin.dapen.permohonandudajanda.form2', $data);
    }

    public function form3($id)
    {
        //
        $menu = 'permohonan';
        $edit = false;

        $mohon = PermohonanDudaJanda::query()->with(['lampiran'])->find(decrypt($id));
        //dd($mohon);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon
        ];

        return view('admin.dapen.permohonandudajanda.form3', $data);
    }

    public function form4($id)
    {
        //
        $menu = 'permohonan';
        $edit = false;

        $mohon = PermohonanDudaJanda::query()->with(['biodata', 'lampiran'])->find(decrypt($id));
        $user = User::where('id', $mohon->biodata->user_id)->first();
        $lampiran = LampiranDudaJanda::where('nopeserta', $user->biodata->nopeserta);
        //dd($mohon);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
            'lampiran' => $lampiran,
        ];

        return view('admin.dapen.permohonandudajanda.form4', $data);
    }

    public function formedit1($id)
    {
        //
        $menu = 'permohonan';
        $edit = true;

        $mohon = PermohonanDudaJanda::query()->find(decrypt($id));
        //dd($mohon);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        return view('admin.dapen.permohonandudajanda.form1', $data);
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
        $record = PermohonanDudaJanda::latest()->first();

        if ($record) {
            $expNum = explode('-', $record->idperm_karyawan);
            $nextNumber = 'MPDJ-' . date('m') . date('y') . '-' . sprintf("%03d", $expNum[2] + 1);
        } else {
            $nextNumber = 'MPDJ-' . date('m') . date('y') . '-001';
        }

        try {

            $data['idperm_karyawan'] = $nextNumber;
            $data['nopermohonan'] = $nextNumber;
            //$data['status'] = 1;
            $mohon = PermohonanDudaJanda::create($data);
            $check = LampiranDudaJanda::where('nopeserta', $nopeserta)->first();
            if ($check == null) {
                $lampiran = LampiranDudaJanda::create($data);
            }

            return redirect()->route('pensi.permohonandudajanda-form2', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
        } catch (Exception $ex) {
            return redirect()->back()->withInput();
        }
    }

    public function keluargastore(Request $request)
    {
        //
        $data = $request->except('_token');

        $menu = 'keluarga';
        $edit = false;

        $record = DataKeluarga::where('nopeserta', $request->nopeserta)->latest()->first();

            if ($record == null) {
                $data['urut'] = 1;
            }else{
                $data['urut'] = sprintf("%01d", $record['urut'] + 1);
            }

        $data['hubungan'] = 'A';
        //$data['tgl_lahir'] = $request->tgl_lahir->format('Y-m-d');
        $mohon = DataKeluarga::create($data);

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        alert()->success('Berhasil', 'Anggota Keluarga berhasil di tambahkan');

        return redirect()->route('pensi.permohonandudajanda-form2', $request->idx);
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
            $mohon = PermohonanDudaJanda::query()->find(decrypt($id));

            $mohon->update($data);

            Alert::success('Berhasil', 'Pengajuan berhasil disimpan');

            return redirect()->route('pensi.permohonandudajanda-form2', ['id' => encrypt($mohon->id)])->with('message', 'Operation Successful !');
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
                ['file_skperusahaan' => 'required|mimes:pdf,jpg,jpeg,png|max:5000'],
                [
                    'file_skperusahaan.required' => 'Tidak ada file yang di upload',
                    'file_skperusahaan.mimes' => 'File harus pdf',
                    'file_skperusahaan.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_foto") {
            $this->validate(
                $request,
                ['file_foto' => 'required|mimes:jpg,jpeg,png|max:1000'],
                [
                    'file_foto.required' => 'Tidak ada file yang di upload',
                    'file_foto.mimes' => 'File harus pdf',
                    'file_foto.max' => 'File tidak boleh lebih dari 10 mb',
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
                ['file_kk' => 'required|mimes:pdf,jpg,jpeg,png|max:5000'],
                [
                    'file_kk.required' => 'Tidak ada file yang di upload',
                    'file_kk.mimes' => 'File harus pdf',
                    'file_kk.max' => 'File tidak boleh lebih dari 5 mb',
                ]
            );
        } elseif ($request->type == "file_npwp") {
            $this->validate(
                $request,
                ['file_npwp' => 'required|mimes:jpg,jpeg,png|max:1000'],
                [
                    'file_npwp.required' => 'Tidak ada file yang di upload',
                    'file_npwp.mimes' => 'File harus pdf',
                    'file_npwp.max' => 'File tidak boleh lebih dari 10 mb',
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
        } else {
        }

        $data = $request->except('_token');
        $idx = $request->idx;
        $type = $data['type'];

        $file = $request->file($data['type']);
        $nama_file = $data['type'] . '_' . $data['valueid'] . '.' . $file->getClientOriginalExtension();

        $tujuan_upload = public_path() . '/dapen/lampiran/dudajanda/' . $data['valueid'];
        if (!file_exists($tujuan_upload)) {
            File::makeDirectory($tujuan_upload, 0777, true, true);
        }

        $file->move($tujuan_upload, $nama_file);

        $filenya[$type] = $nama_file;
        $lampiran = LampiranDudaJanda::where('nopeserta', $data['valueid'])->first();
        //dd($filenya);

        $lampiran->update($filenya);

        return redirect()->route('pensi.permohonandudajanda-form2', $idx);
    }

    public function deleteFile(Request $request)
    {

        $idx = $request->idx;
        $lampiran = LampiranDudaJanda::where('nopeserta', $request->id)->first();
        $tujuan_upload = public_path() . '/dapen/lampiran/';
        File::delete($tujuan_upload . $request->id . '/' . $lampiran[$request->type]);

        $filenya[$request->type] = null;
        $lampiran->update($filenya);

        return redirect()->route('pensi.permohonandudajanda-form2', $idx);
    }

    public function kirim($id)
    {
        $mohon = PermohonanDudaJanda::query()->with(['biodata', 'lampiran'])->find(decrypt($id));

        if (is_null($mohon->lampiran->file_skperusahaan) || is_null($mohon->lampiran->file_kk) || is_null($mohon->lampiran->file_surat_nikah)) {

            // Alert::warning('Gagal', 'File Lampiran Usulan harus lengkap');
            alert()->warning('File Lampiran Usulan harus lengkap', 'Gagal');

            return redirect()->route('pensi.permohonandudajanda-form3', Crypt::encrypt($mohon->id))->with('message', 'File Lampiran Usulan harus lengkap');

        } else {

            $data['status'] = 1;
            $mohon->update($data);

            $data = [
                'mohon' => $mohon,
            ];

            alert()->success('Permohonan akan di prosess maksimal 3 x 24 Jam setelah data di terima valida & lengkap', 'Berhasil')->persistent('Ya');

            return redirect()->route('pensi.permohonandudajanda.index', $data);
        }
    }
}
