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
              {{--  <li class="done"><a href="#"><span class="number">2</span> Data Anak</a></li>  --}}
              <li class="done"><a href="#"><span class="number">2</span> Data Lampiran</a></li>
              <li class="active"><a href="#"><span class="number">3</span> Ringkasan</a></li>
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
                  <tbody>
                  <tr>
                    <th style="width:50%">No Peserta / Pensiun :</th>
                    <td>{{ $mohon->nopeserta }}</td>
                  </tr>
                 <tr>
                    <th style="width:50%">No HP :</th>
                    <td>{{ $mohon->nohp }}</td>
                  </tr>
                </tbody></table>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                   <tr>
                    <th>Nama :</th>
                    <td>{{ $mohon->name }}</td>
                  </tr>
                  <tr>
                    <th>Alamat :</th>
                    <td>{{ $mohon->alamat }}</td>
                  </tr>
                </tbody></table>
              </div>
            </div>
            <!-- /.col -->
        </div>
        <br/>
        {{--  <div class="row">
            <div class="col-lg-12 m-b-3">
              <h3 class="text-black"> Data Anak </h3>
            </div>
            <!-- /.col -->
          </div>  --}}

            {{--  <div class="row ">
            <!-- /.col -->
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th style="width:50%">Nama Anak 1 :</th>
                        <td>{{ $mohon->anak1 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th>Alamat 1 :</th>
                        <td>{{ $mohon->alamat1 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th style="width:50%">Nama Anak 2 :</th>
                        <td>{{ $mohon->anak2 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th>Alamat 2 :</th>
                        <td>{{ $mohon->alamat2 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th style="width:50%">Nama Anak 3 :</th>
                        <td>{{ $mohon->anak3 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                    <tr>
                        <th>Alamat 3 :</th>
                        <td>{{ $mohon->alamat3 }}</td>
                    </tr>
                    </tbody></table>
                </div>
                </div>
                <!-- /.col -->
            </div>  --}}
            <br/>
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
                    <td>Surat Kematian orang tua</td>
                    <td>
                        @if($mohon->lampiran->file_surat_kematian)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td>Surat Nikah Orang Tua</td>
                    <td>
                        @if($mohon->lampiran->file_surat_nikahortu)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td>Buku Rekening Anak</td>
                    <td>
                        @if($mohon->lampiran->file_scan_anak)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                     <td>3. </td>
                    <td>Kartu Tanda Penduduk (KTP)</td>
                    <td>
                        @if($mohon->lampiran->file_ktp)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>Kartu Keluarga (KK)</td>
                    <td>
                        @if($mohon->lampiran->file_kk)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td> Surat Kuasa</td>
                    <td>
                        @if($mohon->lampiran->file_surat_kuasa)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td>Surat Keterangan Masih Sekolah</td>
                    <td>
                        @if($mohon->lampiran->file_surat_sekolah)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td>Surat Keterangan tidak Mempunyai Penghasilan</td>
                    <td>
                        @if($mohon->lampiran->file_surat_penghasilan)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>8. </td>
                    <td>Surat Keterangan Belum Pernah Nikah</td>
                    <td>
                        @if($mohon->lampiran->file_belum_nikah)
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
              <a href="{!! url('pensi/permohonananak') !!}" data-direction="next" style="margin-left: 5px;" class="btn btn-warning"><i class="fa fa-list-alt"></i> Tunda</a>

              <a href="{!! url('pensi/permohonan/anak/form2', ['id' => encrypt($mohon->id )]) !!}" style="margin-right: 5px;" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
              <button type="button" class="btn btn-primary pull-right finish" style="margin-right: 5px;" data-id="{{ $mohon->id }}" data-file="finish_{{ $mohon->id }}"> <i class="fa fa-credit-card"></i> Submit </button>
                {{ Form::open(['url' => route('pensi.permohonananak.kirim', [Crypt::encrypt($mohon->id)]), 'method' => 'post', 'id' => 'finish_'.$mohon->id ]) }}
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
                text: "Input!",
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

