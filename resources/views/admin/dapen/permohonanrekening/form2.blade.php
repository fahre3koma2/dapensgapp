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
              <li class="active"><a href="#"><span class="number">2</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">3</span> Submit</a></li>
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

                        {{--  <tr>
                            <td> <p class="font-weight-bold"> Foto berwarna ukuran 3 x 4 </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_foto)
                                    <a href="{{ url('dapen/lampiran/dudajanda/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_foto) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_foto_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonandudajanda.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_foto_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_foto') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonandudajanda.upload'), 'method' => 'post', 'id' => 'file_foto', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_foto">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_foto">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_foto" id="file_foto">
                                            @if ($errors->has('file_foto')) <span class="text-danger">{{ $errors->first('file_foto') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>  --}}
                        <tr>
                            <td> <p class="font-weight-bold"> Kartu Tanda Penduduk (KTP) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_ktp)
                                    <a href="{{ url('dapen/lampiran/rekening/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_ktp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_ktp_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonanrekening.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_ktp_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_ktp') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonanrekening.upload'), 'method' => 'post', 'id' => 'file_ktp', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_ktp">Silahkan Input File</label>
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
                            <td> <p class="font-weight-bold"> Kartu Keluarga (KK) </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                           <td>
                                @if ($mohon->lampiran->file_kk)
                                    <a href="{{ url('dapen/lampiran/rekening/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_kk) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_kk_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonanrekening.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_kk_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_kk') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonanrekening.upload'), 'method' => 'post', 'id' => 'file_kk', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_kk">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_kk">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_kk" id="file_kk">
                                            @if ($errors->has('file_kk')) <span class="text-danger">{{ $errors->first('file_kk') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>
                        {{--  <tr>
                            <td> <p class="font-weight-bold"> Kartu NPWP </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (jpg/Jpeg/Png)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_npwp)
                                    <a href="{{ url('dapen/lampiran/rekening/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_npwp) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_npwp_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonanrekening.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_npwp_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_npwp') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonanrekening.upload'), 'method' => 'post', 'id' => 'file_npwp', 'files' => true]) !!}
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
                        <tr>
                            <td> <p class="font-weight-bold"> Buku Tabungan </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_tabungan)
                                    <a href="{{ url('dapen/lampiran/rekening/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_tabungan) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_tabungan_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonanrekening.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_tabungan_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_tabungan') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonanrekening.upload'), 'method' => 'post', 'id' => 'file_tabungan', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_tabungan">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_tabungan">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_tabungan" id="file_tabungan">
                                            @if ($errors->has('file_tabungan')) <span class="text-danger">{{ $errors->first('file_tabungan') }}</span> @endif
                                        </div>
                                        <div class="col-sm-4">
                                             <button type="submit" data-direction="next" class="btn btn-sm btn-info">Upload</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>
                        {{--  <tr>
                            <td> <p class="font-weight-bold"> Scan Surat Permohonan yang sudah di tanda tangan </p>
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                @if ($mohon->lampiran->file_scan_karyawan)
                                    <a href="{{ url('dapen/lampiran/'.$mohon->nopeserta.'/'.$mohon->lampiran->file_scan_karyawan) }}" title="download-view" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Lihat</a> |
                                    <button type="button" class="btn btn-sm btn-danger" onclick="return hapusFile('file_scan_karyawan_-'+'{{ $mohon->nopeserta }}')"><i class="fa fa-trash"></i> Hapus</button>
                                        <form action="{{ route('pensi.permohonan.deletefile', ['id' => $mohon->nopeserta]) }}" method="post" id="file-file_scan_karyawan_-{{ $mohon->nopeserta }}">
                                            @csrf
                                            {{ Form::hidden('type', 'file_scan_karyawan') }}
                                            {{ Form::hidden('idx', encrypt($mohon->id) ) }}
                                        </form>
                                @else
                                {!! Form::open(['url' => route('pensi.permohonan.upload'), 'method' => 'post', 'id' => 'file_scan_karyawan', 'files' => true]) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <label for="file_scan_karyawan">Silahkan Input File</label>
                                            <input class="form-control" type="hidden" name="type" value="file_scan_karyawan">
                                            <input class="form-control" type="hidden" name="valueid" value="{{ $mohon->nopeserta }}">
                                            <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                            <input type="file" name="file_scan_karyawan" id="file_scan_karyawan">
                                            @if ($errors->has('file_scan_karyawan')) <span class="text-danger">{{ $errors->first('file_scan_karyawan') }}</span> @endif
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
                <a href="{!! url('pensi/permohonan/rekening/form3', ['id' => encrypt($mohon->id )]) !!}" type="submit" data-direction="next" class="btn btn-primary">Next</a>
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

