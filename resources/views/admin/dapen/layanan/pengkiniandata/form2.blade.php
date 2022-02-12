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
              <li class="active"><a href="#"><span class="number">2</span> Data Keluarga</a></li>
              <li><a href="#"><span class="number">3</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">4</span> Ringkasan</a></li>
            </ul>
              <div class="step-tab-panel">
                <div class="col-lg-12 m-b-3">
                    <br/>
                    <h5 class="text-green m-b-3">Data Keluarga</h5>
                    <div class="table-responsive">
                        {!! Form::model($mohon, ['route' => ['pensi.keluarga.update', encrypt($mohon->id)], 'method'=>'patch']) !!}
                         @csrf
                        <table class="table">
                            <thead class="thead-dark" align="center">
                                <tr>
                                <th scope="col">Nama Anggota Keluarga</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Hubungan Keluarga</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($mohon->keluarga as $item)
                                <tr>
                                    <th scope="row">{{$item->nama}}</th>
                                    <td>
                                        @if($item->sex == 'L')
                                            <span class="label label-primary">Laki-laki</span>
                                        @else
                                            <span class="label label-info">Perempuan</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->hubungan == 'S')
                                            <span class="label label-danger">Suami</span>
                                        @elseif($item->hubungan == 'I')
                                            <span class="label label-warning">Istri</span>
                                        @else
                                            <span class="label label-success">Anak</span>
                                        @endif
                                    </td>
                                    <td>{{$item->tgl_lahir}}</td>
                                    <td>
                                        <div class="c-inputs-stacked">
                                            <label class="inline custom-control custom-radio block">
                                            <input type="radio" name="jenis_{{$no}}" value="nikah_{{$item->id}}" {{ $item->st_nikah == 1 ? 'checked' : '' }}>
                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Menikah</span> </label>
                                            <label class="inline custom-control custom-radio block">
                                            @if($item->hubungan == 'A')
                                            <input type="radio" name="jenis_{{$no}}" value="kerja_{{$item->id}}" {{ $item->st_kerja == 1 ? 'checked' : '' }}>
                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Bekerja</span> </label>
                                            @else
                                            <input type="radio" name="jenis_{{$no}}" value="cerai_{{$item->id}}" {{ $item->st_cerai == 1 ? 'checked' : '' }}>
                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Cerai</span> </label>
                                            @endif
                                            <label class="inline custom-control custom-radio block">
                                            <input type="radio" name="jenis_{{$no}}" value="wafat_{{$item->id}}" {{ $item->st_wafat == 1 ? 'checked' : '' }}>
                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Meninggal</span> </label>

                                        </div>
                                    </td>
                                    {{--  <td>
                                        <button type="button" class="btn btn-sm btn-danger delete" data-id="{{ $item->id }}" data-file="{{$item->id}}"><i class="fa fa-trash"></i> Hapus</button>
                                        {{ Form::open(['url'=>route('pensi.keluarga.destroy', [Crypt::encrypt($item->id)]), 'method'=>'delete', 'id' => $item->id, 'style' => 'display: none;']) }}
                                        {{ csrf_field() }}
                                        {{ Form::close() }}
                                    </td>  --}}
                                </tr>
                                @php $no++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                            <button type="submit" data-direction="next" class="btn btn-success pull-right"> <i class="fa fa-refresh"> </i> Simpan</button>
                        </form>
                    </div>
                    <br/>
                    <ul>
                        <li class="text-danger">Jika ada perubahan status silahkan di pilih kemudian klik tombol simpan</li>
                        <li class="text-danger">Jika tidak ada perubahan status silahkan klik tombol Lanjutkan untuk melanjutkan Pengkinian Data</li>
                    </ul>
                </div>
                <br/><br/><br/><br/>
                {{--  <div class="row m-t-3">
                    <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Tambah Data Keluarga</h5>
                        </div>
                        <div class="card-body">

                        {{ Form::open(['url' => route('pensi.keluarga.store'), 'method' => 'post', 'id' => 'mohon']) }}
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">No Pensiun Dapen SG</label>
                                <input class="form-control" type="text" value="{{ $mohon->nopeserta }}" disabled>
                                <input class="form-control" type="hidden" name="nopeserta" value="{{ $mohon->nopeserta }}">
                                <input class="form-control" type="hidden" name="idx" value="{{ encrypt($mohon->id) }}">
                                <input class="form-control" type="hidden" name="page" value="pengkinian">
                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama</label>
                                <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama">
                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control" name="sex">
                                    <option value="L"> Laki-Laki </option>
                                    <option value="P"> Perempuan </option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Tanggal Lahir</label>
                                <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tgl_lahir">
                             </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Hubungan Keluarga</label>
                                <select class="form-control" name="hubungan">
                                    <option value="S"> Suami </option>
                                    <option value="I"> Istri </option>
                                    <option value="A"> Anak </option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status Wafat</label>
                                <select class="form-control" name="st_wafat">
                                    <option value="0"> Hidup </option>
                                    <option value="1"> Wafat </option>
                                </select>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status Bercerai</label>
                                <select class="form-control" name="st_cerai">
                                    <option value="0"> Tidak </option>
                                    <option value="1"> Ya </option>
                                </select>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status Bekerja</label>
                                <select class="form-control" name="st_kerja">
                                    <option value="0"> Tidak </option>
                                    <option value="1"> Ya </option>
                                </select>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status Menikah</label>
                                <select class="form-control" name="st_nikah">
                                    <option value="0"> Tidak </option>
                                    <option value="1"> Ya </option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-success pull-right">Tambah</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>  --}}
              </div>
            <div class="step-footer">
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

        $("body").on("click", ".delete", function (e) {
                e.preventDefault();
                var id = $(this).data('id');

                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Anda akan menghapus data ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No"
                }).then((result) => {
                    if (result.value) {
                        Swal.close();
                        $("#"+id).submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire('Dibatalkan', 'Data batal dihapus', 'error');
                    }
                });
            });

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

