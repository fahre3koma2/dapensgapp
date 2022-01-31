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
              <li class="done"><a href="#"><span class="number">2</span> Data Lampiran</a></li>
              <li class="active"><a href="#"><span class="number">3</span> Submit</a></li>
            </ul>
         </div>

        <div class="step-tab-panel">
        <br/>
        <div class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-lg-12 m-b-3">
              <h3 class="text-black"> Data Identitas </h3>
            </div>
            <!-- /.col -->
          </div>

          <div class="row ">
            <!-- /.col -->
            <div class="col-lg-6">
              <div class="table-responsive">
                <table class="table">
                  <tbody><tr>
                    <th style="width:50%">No Peserta / Pensiun:</th>
                    <td>{{ $user->nopeserta }}</td>
                  </tr>
                  <tr>
                    <th>Nama :</th>
                    <td>{{ $user->name }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir :</th>
                    <td>{{ date('d-m-Y', strtotime($user->tgl_lahir)) }}</td>
                  </tr>
                  <tr>
                    <th>Alamat :</th>
                    <td>{{ $user->alamat }}</td>
                  </tr>
                  <tr>
                    <th>Kota :</th>
                    <td>{{ $user->kota }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan :</th>
                    <td>{{ $user->kelurahan }}</td>
                  </tr>
                   <tr>
                    <th>Kode Pos :</th>
                    <td>{{ $user->kodepos }}</td>
                  </tr>
                </tbody></table>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                  <tr>
                    <th>RT :</th>
                    <td>{{ $user->rt }}</td>
                  </tr>
                  <tr>
                    <th>RW :</th>
                    <td>{{ $user->rw }}</td>
                  </tr>
                  <tr>
                    <th style="width:50%">NPWP:</th>
                    <td>{{ $user->npwp }}</td>
                  </tr>
                   <tr>
                    <th style="width:50%">No HP:</th>
                    <td>{{ $user->nohp }}</td>
                  </tr>
                  <tr>
                    <th>Status Perkawinan :</th>
                    <td>{{ $user->kawin }}</td>
                  </tr>
                  <tr>
                    <th>Jenis Pensiun:</th>
                    <td>{{ $user->jenis }}</td>
                  </tr>
                </tbody></table>
              </div>
            </div>
            <!-- /.col -->
        </div>

           <div class="row">
            <div class="col-lg-12 m-b-3">
              <h3 class="text-black"> Data Lampiran </h3>
            </div>
            <!-- /.col -->
          </div>
            <!-- Table row -->
        <div class="row ">
            <div class="col-lg-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>File</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                     <td>1. </td>
                    <td>Kartu Tanda Penduduk (KTP)</td>
                    <td>
                        @if($user->lampiran->file_ktp)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td>Kartu Keluarga (KK)</td>
                    <td>
                        @if($user->lampiran->file_kk)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td>Kartu NPWP</td>
                    <td>
                        @if($user->lampiran->file_npwp)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>File Lain-lain 1</td>
                    <td>
                        @if($user->lampiran->file_lain1)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td>File Lain-lain 2</td>
                    <td>
                        @if($user->lampiran->file_lain2)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td>File Lain-lain 3</td>
                    <td>
                        @if($user->lampiran->file_lain3)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-lg-12">
              <a href="{!! url('pensi/pengkinian/') !!}" data-direction="next" style="margin-left: 5px;" class="btn btn-warning"><i class="fa fa-list-alt"></i> Tunda</a>
              <a href="{!! url('pensi/pengkinian/form2', ['id' => encrypt($user->id )]) !!}" style="margin-right: 5px;" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>

              <button type="button" class="btn btn-primary pull-right finish" style="margin-right: 5px;" data-id="{{ $user->id }}" data-file="finish_{{ $user->id }}"> <i class="fa fa-credit-card"></i> Kirim </button>
                {{ Form::open(['url' => route('pensi.pengkinian.kirim', [Crypt::encrypt($user->id)]), 'method' => 'post', 'id' => 'finish_'.$user->id ]) }}
                {{ csrf_field() }}
                {{ Form::close() }}
            </div>
          </div>
        </div>
        </form>

      </div>
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
    {{--  $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });  --}}

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

        $("body").on("click", ".finish", function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Kirim Pengkinian Data!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.value) {
                    Swal.close();
                    $("#finish_"+id).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Dibatalkan', 'Data batal Di Input', 'error');
                }
            });
        });

    </script>


@endsection

