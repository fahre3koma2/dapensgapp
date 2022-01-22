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
                        <tr>
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
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>
            <div class="step-footer">
                <a href="{!! url('pensi/pengkinian/') !!}" data-direction="next" style="margin-right: 5px;" class="btn btn-warning pull-left"><i class="fa fa-list-alt"></i> Tunda</a>
                <a href="{!! url('pensi/pengkinian/formedit1', ['id' => encrypt($mohon->id )]) !!}" style="margin-right: 5px;" class="btn btn-info pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>

                <a href="{!! url('pensi/pengkinian/form3', ['id' => encrypt($mohon->id )]) !!}" type="submit" data-direction="next" class="btn btn-primary"> <i class="fa fa-arrow-right"> </i> Lanjutkan</a>
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

