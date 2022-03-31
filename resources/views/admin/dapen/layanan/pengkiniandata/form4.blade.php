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
              <li class="done"><a href="#"><span class="number">3</span> Data Lampiran</a></li>
              <li class="active"><a href="#"><span class="number">4</span> Ringkasan</a></li>
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
                    <td>{{ $nama->nama ? $nama->nama : $nama->name }}</td>
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
              <h3 class="text-black"> Data Keluarga </h3>
            </div>
            <!-- /.col -->
        </div>

        <div class="col-lg-12 m-b-3">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nama Anggota Keluarga</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Hubungan Keluarga</th>
                        <th scope="col">Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp

                        @foreach ($user->keluarga as $item)
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
                            <td>{{ Carbon\Carbon::parse($item->tgl_lahir)->isoFormat('D MMMM Y')}}</td>
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
            </div>
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
                    <td>2. </td>
                    <td>Surat Keterangan Meninggal</td>
                    <td>
                        @if($user->lampiran->file_surat_kematian)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td>Surat Nikah</td>
                    <td>
                        @if($user->lampiran->file_surat_nikah)
                            <i class="fa fa-check"></i>
                        @else
                            <i class="fa fa-times"></i>
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>Surat Cerai</td>
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
                    <td>Surat Keterangan Bekerja</td>
                    <td>
                        @if($user->lampiran->file_lain2)
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
          <br/>
          <div class="checkbox">
              <label>
                  <input type="checkbox" value="" onchange="activateButton(this)">
                Dengan ini saya menyatakan pelaporan pengkinian data ini di buat dengan sebenar-benarnya dan saya bertanggung jawab atas segala konsekuensi perubahan data. *
              </label>
          </div>
          <br/>
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-lg-12">
              {{--  <a href="{!! url('pensi/pengkinian/') !!}" data-direction="next" style="margin-left: 5px;" class="btn btn-warning"><i class="fa fa-list-alt"></i> Tunda</a>
              <a href="{!! url('pensi/pengkinian/form2', ['id' => encrypt($user->id )]) !!}" style="margin-right: 5px;" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>  --}}

              <button disabled name="submit" id="submit" type="button" class="btn btn-primary pull-right finish" style="margin-right: 5px;" data-id="{{ $user->id }}" data-file="finish_{{ $user->id }}"> <i class="fa fa-credit-card"></i> Kirim </button>
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

        function disableSubmit() {
        document.getElementById("submit").disabled = true;
        }

        function activateButton(element) {

            if(element.checked) {
                document.getElementById("submit").disabled = false;
            }
            else  {
                document.getElementById("submit").disabled = true;
            }

        }
    </script>


@endsection

