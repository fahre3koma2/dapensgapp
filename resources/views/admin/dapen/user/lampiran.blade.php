@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Data Lampiran</h1>
      <ol class="breadcrumb">
        <li><a href="#">User</a></li>
        <li><i class="fa fa-angle-right"></i>Data Lampiran</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 m-b-3">
                    <h4 class="text-black">Data Lampiran</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-info text-white">
                        <tr>
                            <th scope="col" width="65%">Lampiran</th>
                            <th scope="col" width="25%">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <p class="font-weight-bold"> SK. Pemberhentian  dari  Perusahaan </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_skperusahaan', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_skperusahaan">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_skperusahaan">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_skperusahaan" id="file_skperusahaan">
                                            @if ($errors->has('file_skperusahaan')) <span class="text-danger">{{ $errors->first('file_skperusahaan') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_skperusahaan) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_skperusahaan_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_skperusahaan_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_skperusahaan') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Foto berwarna ukuran 3 x 4 </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_foto', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_foto">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_foto">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_foto" id="file_foto">
                                            @if ($errors->has('file_foto')) <span class="text-danger">{{ $errors->first('file_foto') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_foto) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_foto_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_foto_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_foto') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Kartu Tanda Penduduk (KTP) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_ktp', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_ktp">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_ktp">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_ktp" id="file_ktp">
                                            @if ($errors->has('file_ktp')) <span class="text-danger">{{ $errors->first('file_ktp') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_ktp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                        <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_ktp_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                            <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_ktp_-{{ $user->biodata->nopeserta }}">
                                                @csrf
                                                {{ Form::hidden('type', 'file_ktp') }}

                                            </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Kartu Keluarga (KK) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                           <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_kk', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_kk">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_kk">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_kk" id="file_kk">
                                            @if ($errors->has('file_kk')) <span class="text-danger">{{ $errors->first('file_kk') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_kk) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_kk_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_kk_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_kk') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Kartu NPWP </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_npwp', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_npwp">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_npwp">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_npwp" id="file_npwp">
                                            @if ($errors->has('file_npwp')) <span class="text-danger">{{ $errors->first('file_npwp') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_npwp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_npwp_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_npwp_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_npwp') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Buku Tabungan </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_tabungan', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_tabungan">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_tabungan">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_tabungan" id="file_tabungan">
                                            @if ($errors->has('file_tabungan')) <span class="text-danger">{{ $errors->first('file_tabungan') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_tabungan) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_tabungan_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_tabungan_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_tabungan') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="font-weight-bold"> Scan Surat Permohonan yang sudah di tanda tangan </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($lampiran == null)
                                    {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_scan_karyawan', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_scan_karyawan">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_scan_karyawan">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $user->biodata->nopeserta }}">

                                            <input type="file" name="file_scan_karyawan" id="file_scan_karyawan">
                                            @if ($errors->has('file_scan_karyawan')) <span class="text-danger">{{ $errors->first('file_scan_karyawan') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <a href="{{ url('dapen/lampiran/'.$user->biodata->nopeserta.'/'.$lampiran->file_scan_karyawan) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_scan_karyawan_-'+'{{ $user->biodata->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $user->biodata->nopeserta]) }}" method="post" id="file-file_scan_karyawan_-{{ $user->biodata->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_scan_karyawan') }}

                                        </form>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
         </div>
    </div>
</div>
@endsection
@section('injs')
    <script>
    	function setButtonUbah()
	{
		//alert('a');
		$("#reqDivButtonCV").show();
		$("#reqDivLampiranCV").hide();

		$("#reqDivButtonKTP").show();
		$("#reqDivLampiranKTP").hide();
	}
    </script>
@endsection

