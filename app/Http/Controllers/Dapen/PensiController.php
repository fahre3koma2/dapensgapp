<?php

namespace App\Http\Controllers\Dapen;

use App\Http\Controllers\Controller;
use App\Models\Admin\JenisPensiun as AdminJenisPensiun;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\JenisPensiun;
use App\Models\Admin\Lampiran;

use Alert;
use Exception;
use Crypt;
use Validator;
use Image;
use PDF;


class PensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = 'kontakkami';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.home', $data);
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
        $menu = 'profil';
        $edit = false;

        $user = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));
        $jenis = AdminJenisPensiun::query()->get()->sortBy('id');

        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'jenis' => $jenis,
        ];

        return view('admin.dapen.user.profil', $data);
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
        $menu = 'profil';
        $edit = true;

        $user = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));
        $jenis = AdminJenisPensiun::query()->get()->sortBy('id');
        //dd($jenis);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'jenis' => $jenis,
        ];

        return view('admin.dapen.user.profil', $data);
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
        // Validator::make($data, [
        //     'email' => ['required', Rule::unique('users')->ignore(decrypt($id))],
        // ]);

        try {

            $user = User::query()->find(decrypt($id));
            $biodata = Biodata::where('user_id', $user->id)->first();

            //dd($biodata);
            $data['baru'] = 1;
            $user->update($data);
            $biodata->update($data);

            alert()->success('Berhasil', 'User Berhasil di Update');

            return redirect()->back();
        } catch (Exception $ex) {

            alert()->error('Gagal', 'User gagal di Update');

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

    public function profil()
    {
        //
        $menu = 'profil';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.user.profil', $data);
    }

    public function uploadfoto()
    {
        //
        $menu = 'profil';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.user.uploadfoto', $data);
    }

    public function faq()
    {
        //
        $menu = 'faq';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.faq', $data);
    }

    public function datainfo()
    {
        //
        $menu = 'datainfo';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.datainfo', $data);
    }

    public function register()
    {
        //
        $menu = 'register';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.register.form1', $data);
    }

    public function geoloc()
    {
        //
        $menu = 'register';
        $edit = false;

        $data = [
            'menu' => $menu,
            'edit' => $edit
        ];

        return view('admin.dapen.geoloc', $data);
    }

    public function updatefoto(Request $request)
    {
        $data = $request->except('_token');

        $this->validate(
            $request,
            [
                'foto' => 'required|mimes:mimes:jpeg,jpg,png|max:2000'
            ],
            [
                'foto.required' => 'Tidak ada file yang di upload',
                'foto.mimes' => 'File harus gambar format png/jpg',
                'foto.max' => 'File tidak boleh lebih dari 2 MB',
            ]
        );

        // menyimpan data file yang diupload ke variabel $file

        $image = $request->file('foto');
        $nopeserta = $request->nopeserta;
        $userid = $request->userid;
        $nama_file = $nopeserta . '.' . $image->getClientOriginalExtension();

        // isi dengan nama folder tempat kemana file diupload
        $filePath = public_path('dapen/foto/thumb');

        $img = Image::make($image->path());
        $img->resize(150, 150, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $nama_file);

        $tujuan_upload = 'dapen/foto';
        $image->move($tujuan_upload, $nama_file);

        $data['file'] = $nama_file;

        $user = Biodata::query()->find($data['idx']);
        // dd($user);
        $user->update($data);

        alert()->success(
            'Berhasil',
            'Foto berhasil di tambahkan'
        );

        //return redirect()->back()->with('message', 'Operation Successful !');
        return redirect()->route('pensi.pensiun.edit', ['pensiun' => encrypt($userid)]);
    }

    public function lampiran($id)
    {
        //
        $menu = 'lampiran';
        $edit = true;

        $user = User::query()->with(['biodata', 'RolesUser'])->find(decrypt($id));
        $jenis = AdminJenisPensiun::query()->get()->sortBy('id');
        $lampiran = Lampiran::where('nopeserta', $user->biodata->nopeserta)->first();
        //dd($user);
        $data = [
            'menu' => $menu,
            'edit' => $edit,
            'user' => $user,
            'jenis' => $jenis,
            'lampiran' => $lampiran,
        ];

        return view('admin.dapen.user.lampiran', $data);
    }

}
