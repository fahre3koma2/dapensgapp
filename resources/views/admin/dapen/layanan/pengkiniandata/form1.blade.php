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
              <li class="active"><a href="#"><span class="number">1</span> Data Identitas</a></li>
              <li><a href="#"><span class="number">2</span> Data Keluarga</a></li>
              <li><a href="#"><span class="number">3</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">4</span> Ringkasan</a></li>
            </ul>
         </div>

        <div class="step-tab-panel">
        <br/>
        <h5 class="text-green m-b-3">Biodata</h5>
        <span style="color:red"> <strong>* ) Wajib di isi</strong></span>
         @if ($edit)
        {!! Form::model($user, ['route' => ['pensi.pengkinian.update', encrypt($user->id)], 'method'=>'patch']) !!}
        @else
        {{ Form::open(['url' => route('pensi.pengkinian.store'), 'method' => 'post', 'id' => 'mohon']) }}
        @endif
        @csrf
            <div class="row m-t-2">
            <div class="col-md-6">
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                        <label>No Peserta / Pensiun: </label>
                        <input class="form-control" type="text" name="nopeserta" value="{{ $user->nopeserta }}" disabled>
                        <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->nopeserta }}">
                        <input class="form-control" type="hidden" name="user_id" value="{{ $user->user_id }}">
                        <input class="form-control" type="hidden" name="nik" value="{{ $user->nik }}">
                        <input class="form-control" type="hidden" name="jenis" value="{{ $user->jenis }}">
                        <input class="form-control" type="hidden" name="name" value="{{ $user->name }}">
                        <input class="form-control" type="hidden" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                        <input class="form-control" type="hidden" name="periode" value="{{ $periode }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Jenis Pensiun:</label>
                        <input class="form-control" type="text" name="nopeserta" value="{{ $user->jenis }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                {{--  <label>No Reff:</label>
                <input class="form-control" type="text" name="noreff">  --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Nama :</label>
                <input class="form-control" type="text" name="name" value="{{ $nama->nama ? $nama->nama : $nama->name }}" disabled="disabled">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input class="form-control" type="date" name="tgl_lahir" value="{{ $nama->tgl_lahir }}" disabled="disabled">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Alamat : <span style="color:red"> <strong>*</strong></span> </label>
                    <textarea rows="2" class="form-control" name="alamat" required>{{ $user->alamat }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kelurahan: <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="kelurahan" value="{{ $user->kelurahan }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label>RT: <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="rt" value="{{ $user->rt }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label>RW: <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="rw" value="{{ $user->rw }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kota : <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="kota" value="{{ $user->kota }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kode Pos : <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="kodepos" value="{{ $user->kodepos }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>No Handphone : <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="nohp" value="{{ $user->nohp }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>NPWP :</label>
                    <input class="form-control" type="text" name="npwp" value="{{ $user->npwp }}" readonly="readonly">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Email : <span style="color:red"> <strong>*</strong></span></label>
                    <input class="form-control" type="text" name="email_user" value="{{ $user->email_user }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Kelamin : <span style="color:red"> <strong>*</strong></span></label>
                        <div class="c-inputs-stacked">
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="sex" value="L" {{ $user->sex == 'L' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Laki - Laki</span> </label>
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="sex" value="P" {{ $user->sex == 'P' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Perempuan</span> </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status Perkawinan : <span style="color:red"> <strong>*</strong></span></label>
                        <div class="c-inputs-stacked">
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="jenis" value="N" {{ $user->jenis == 'N' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Menikah</span> </label>
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="jenis" value="D" {{ $user->jenis == 'U' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Duda</span> </label>
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="jenis" value="J" {{ $user->jenis == 'J' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Janda</span> </label>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <h5 class="text-green m-b-3">Rekening</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>No Rekening :</label>
                    <input class="form-control" type="text" name="norekening" value="{!! $user->rekening ? $user->rekening->norekening : '' !!}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Atas Nama :</label>
                    <input class="form-control" type="text" name="atasnama" value="{!! $user->rekening ? $user->rekening->atasnama : '' !!}" required>
                    <input class="form-control" type="hidden" name="nama_penerima" value="{!! $user->rekening ? $user->rekening->atasnama : '' !!}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Bank :</label>
                    <input class="form-control" type="text" name="bank" value="{!! $user->rekening ? $user->rekening->bank : '' !!}" required>
                    {{--  <select class="custom-select form-control" name="bank" required>
                        <option value="Mandiri" {{ $user->rekening ? $user->rekening->bank == 'Mandiri' ? 'selected' : '' : '' }}>Mandiri</option>
                        <option value="BNI" {{ $user->rekening ? $user->rekening->bank == 'BNI' ? 'selected' : '' : '' }}>BNI</option>
                        <option value="BRI" {{ $user->rekening ? $user->rekening->bank == 'BRI' ? 'selected' : '' : '' }}>BRI</option>
                        <option value="BTPN" {{ $user->rekening ? $user->rekening->bank == 'BTPN' ? 'selected' : '' : '' }}>BTPN</option>
                    </select>  --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Cabang :</label>
                    <input class="form-control" type="text" name="cabang" value="{!! $user->rekening ? $user->rekening->cabang : '' !!}" required>
                    <input class="form-control" type="hidden" name="alamat_rek" value="{!! $user->rekening ? $user->rekening->cabang : '' !!}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="step-footer pull-right">
            {{--  <button data-direction="prev" class="btn btn-light">Previous</button>  --}}
            @if($edit)
                <button type="submit" data-direction="next" class="btn btn-primary"> <i class="fa fa-arrow-right"> </i> Lanjutkan</button>
            @else
                {{--  <a href="{!! url('pensi/permohonan/karyawan/formedit1', ['id' => encrypt($user->id )]) !!}" data-direction="next" class="btn btn-warning">Edit</a> |  --}}
                <button type="submit" data-direction="next" class="btn btn-primary"> <i class="fa fa-arrow-right"> </i> Lanjutkan</button>
            @endif
        </div>
        </form>

      </div>
      <!-- Main row -->
    </div>
@endsection
@section('injs')
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
    {{--  <script>
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
    </script>  --}}
@endsection

