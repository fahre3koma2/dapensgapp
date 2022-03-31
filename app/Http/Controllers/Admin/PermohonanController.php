<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Biodata;
use App\Models\BiodataUpdate;
use App\Models\Admin\PermohonanKaryawan;
use App\Models\Admin\PermohonanAnak;
use App\Models\Admin\PermohonanDudaJanda;
use App\Models\Admin\PermohonanRekening;
use App\Models\Admin\Lampiran;
use App\Models\Admin\LampiranAnak;
use App\Models\Admin\LampiranRekening;
use App\Models\Admin\LampiranDudaJanda;
use App\Models\Admin\DataKeluarga;

use Alert;
use Exception;
use Crypt;
use Validator;
use Carbon\Carbon;
use Image;
use Str;
use File;

class PermohonanController extends Controller
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

    public function normal()
    {
        //
        $menu = 'register';
        $edit = false;
        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        $mohon = PermohonanKaryawan::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
        ];

        return view('admin.permohonan.normal', $data);
    }

     public function anak()
    {
        //
        $menu = 'register';
        $edit = false;
        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        $mohon = PermohonanAnak::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
        ];

        return view('admin.permohonan.anak', $data);
    }

     public function dudajanda()
    {
        //
        $menu = 'register';
        $edit = false;
        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        $mohon = PermohonanDudaJanda::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
        ];

        return view('admin.permohonan.dudajanda', $data);
    }

     public function rekening()
    {
        //
        $menu = 'permohonan';
        $edit = false;
        $user = User::query()->with(['biodata'])->find(auth()->user()->id);
        $mohon = PermohonanRekening::query()->get();

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
            'user' => $user,
        ];

        return view('admin.permohonan.rekening', $data);
    }

    public function verifikasi($id, $jenis)
    {
        //
        $menu = 'permohonan';
        $edit = false;

        if($jenis == 'normal'){
            $mohon = PermohonanKaryawan::query()->with(['lampiran'])->find(decrypt($id));
        } elseif ($jenis == 'anak') {
            $mohon = PermohonanAnak::query()->with(['lampiran'])->find(decrypt($id));
        } elseif ($jenis == 'dudajanda') {
            $mohon = PermohonanDudaJanda::query()->with(['lampiran'])->find(decrypt($id));
        } elseif($jenis == 'rekening') {
            $mohon = PermohonanRekening::query()->with(['lampiran'])->find(decrypt($id));
        }

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'mohon' => $mohon,
        ];

        if ($jenis == 'normal') {
            return view('admin.permohonan.vernormal', $data);
        } elseif ($jenis == 'anak') {
            return view('admin.permohonan.veranak', $data);
        } elseif ($jenis == 'dudajanda') {
            return view('admin.permohonan.verdudajanda', $data);
        } elseif ($jenis == 'rekening') {
            return view('admin.permohonan.verrekening', $data);
        }

    }

    public function kirim(Request $request, $id)
    {
        $type = $request->except('_token');


        if ($type['jenis'] == 'normal') {
            $mohon = PermohonanKaryawan::query()->with(['lampiran'])->find(decrypt($id));
        } elseif ($type['jenis'] == 'anak') {
            $mohon = PermohonanAnak::query()->with(['lampiran'])->find(decrypt($id));
        } elseif ($type['jenis'] == 'dudajanda') {
            $mohon = PermohonanDudaJanda::query()->with(['lampiran'])->find(decrypt($id));

            $bio1  = Biodata::where('nopeserta', $mohon->nopeserta)->first();
            $bio2  = BiodataUpdate::where([['nopeserta', $mohon->nopeserta], ['tampil', 1], ['verifikasi', 1]])->first();

            if ($bio1->jenis == 'N') {
                if ($bio1->sex == 'L') {
                    $bio['jenis'] = 'J';
                } else {
                    $bio['jenis'] = 'U';
                }
            } else {
                $bio['jenis'] = $bio1->jenis;
            }

        } elseif ($type['jenis'] == 'rekening') {
            $mohon = PermohonanRekening::query()->with(['lampiran'])->find(decrypt($id));
        }

        $data['status'] = 2;
      
        $mohon->update($data);
        $bio1->update($bio);
        
        if(!empty($bio2)){
            $bio2->update($bio);
        }
            
        $data = [
            'mohon' => $mohon,
        ];

        alert()->warning('Permohonan Berhasil di Verifikasi', 'Berhasil');

        if ($type['jenis'] == 'normal') {
            return redirect()->route('admin.permohonan-normal');
        } elseif ($type['jenis'] == 'anak') {
            return redirect()->route('admin.permohonan-anak');
        } elseif ($type['jenis'] == 'dudajanda') {
            return redirect()->route('admin.permohonan-dudajanda');
        } elseif ($type['jenis'] == 'rekening') {
            return redirect()->route('admin.permohonan-rekening');
        }
    }
}
