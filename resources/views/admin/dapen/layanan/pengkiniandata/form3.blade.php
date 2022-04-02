@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Permohonan</h1>
      <ol class="breadcrumb">
        <li><a href="#">Permohonan</a></li>
        <li><i class="fa fa-angle-right"></i>Permohonan</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
      <div class="card">
      <div class="card-body">
        <h4 class="text-black m-b-3">Permohonan</h4>
        {{--  <div id="demo">  --}}
          <div class="step-app">
            <ul class="step-steps">
              <li class="done"><a href="#"><span class="number">1</span> Data Identitas</a></li>
              <li class="done"><a href="#"><span class="number">2</span> Data Keluarga</a></li>
              <li class="active"><a href="#"><span class="number">3</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">4</span> Ringkasan</a></li>
            </ul>
              <div class="step-tab-panel">
                <div class="col-lg-12 m-b-3">
                    <br/>
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
                            <td> <p class="font-weight-bold"> Kartu Keluarga (KK) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/jpeg/png/pdf)</li>
                                </ol>
                            </td>
                           <td>
                                @if ($mohon->lampiran->file_kk)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_kk) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_kk_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_kk_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_kk') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_kk', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_kk">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_kk">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_kk" id="file_kk">
                                            @if ($errors->has('file_kk')) <span class="text-danger">{{ $errors->first('file_kk') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Unggah</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>

                        {{--  <tr>
                            <td> <p class="font-weight-bold"> Surat Keterangan Meninggal </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/jpeg/png/pdf)</li>
                                </ol>
                            </td>
                           <td>
                                @if ($mohon->lampiran->file_surat_kematian)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_surat_kematian) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_surat_kematian_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_surat_kematian_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_surat_kematian') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_surat_kematian', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_surat_kematian">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_surat_kematian">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_surat_kematian" id="file_surat_kematian">
                                            @if ($errors->has('file_surat_kematian')) <span class="text-danger">{{ $errors->first('file_surat_kematian') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Unggah</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td> <p class="font-weight-bold"> Surat Nikah </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/jpeg/png/pdf)</li>
                                </ol>
                            </td>
                           <td>
                                @if ($mohon->lampiran->file_surat_nikah)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_surat_nikah) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_surat_nikah_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_surat_nikah_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_surat_nikah') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_surat_nikah', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_surat_nikah">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_surat_nikah">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_surat_nikah" id="file_surat_nikah">
                                            @if ($errors->has('file_surat_nikah')) <span class="text-danger">{{ $errors->first('file_surat_nikah') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Unggah</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>

                         <tr>
                            <td> <p class="font-weight-bold"> Surat Cerai </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_lain1)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_lain1) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_lain1_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_lain1_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_lain1') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_lain1', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_lain1">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_lain1">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_lain1" id="file_lain1">
                                            @if ($errors->has('file_lain1')) <span class="text-danger">{{ $errors->first('file_lain1') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td> <p class="font-weight-bold"> Surat Keterangan Bekerja </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_lain2)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_lain2) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_lain2_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_lain2_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_lain2') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_lain2', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_lain2">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_lain2">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_lain2" id="file_lain2">
                                            @if ($errors->has('file_lain2')) <span class="text-danger">{{ $errors->first('file_lain2') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>  --}}

                        {{--  <tr>
                            <td> <p class="font-weight-bold"> Kartu Tanda Penduduk (KTP) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_ktp)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_ktp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_ktp_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_ktp_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_ktp') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_ktp', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_ktp">Masukkan File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_ktp">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_ktp" id="file_ktp">
                                            @if ($errors->has('file_ktp')) <span class="text-danger">{{ $errors->first('file_ktp') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
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
                                @if ($mohon->lampiran->file_npwp)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_npwp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_npwp_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_npwp_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_npwp') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_npwp', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_npwp">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_npwp">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_npwp" id="file_npwp">
                                            @if ($errors->has('file_npwp')) <span class="text-danger">{{ $errors->first('file_npwp') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>  --}}
                        {{--

                        <tr>
                            <td> <p class="font-weight-bold"> File Lain-lain 3 </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_lain3)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_lain3) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_lain3_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.pengkinian.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_lain3_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_lain3') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.pengkinian.upload'), 'method' => 'post', 'id' => 'file_lain3', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_lain3">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_lain3">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_lain3" id="file_lain3">
                                            @if ($errors->has('file_lain3')) <span class="text-danger">{{ $errors->first('file_lain3') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>  --}}
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>
            <div class="step-footer">
                <a href="{!! url('pensi/pengkinian/form4', ['id' => encrypt($mohon->id )]) !!}" type="submit" data-direction="next" class="btn btn-primary"> <i class="fa fa-arrow-right"> </i> Submit</a>
        </div>
            </div>
          </div>
        {{--  </div>  --}}
      </div></div>
      <!-- Main row -->
    </div>
@endsection
@section('injs')
    <script src="{{ url('dist/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ url('dist/plugins/formwizard/jquery-steps.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

    <script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
    </script>

    <script src="{{ url('dist/plugins/table-expo/filesaver.min.js') }}"></script>
    <script src="{{ url('dist/plugins/table-expo/xls.core.min.js') }}"></script>
    <script src="{{ url('dist/plugins/table-expo/tableexport.js') }}"></script>
    <script>
        {{--  $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],});  --}}

        function hapusFile(id) {
            Swal.fire({
                title: "Apa anda yakin?",
                text: "Data yang dihapus tidak akan bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak, batal!",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                }
            }).then(function(result) {
                if (result.value) {
                    $('#file-'+id).submit();
                }
            });
        }
    </script>
@endsection

