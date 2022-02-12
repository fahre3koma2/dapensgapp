@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Permohonan Manfaat Pensiun Janda/Duda</h1>
      <ol class="breadcrumb">
        <li><a href="#">Permohonan</a></li>
        <li><i class="fa fa-angle-right"></i>Permohonan Manfaat Pensiun Janda/Duda</li>
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
              <li><a href="#"><span class="number">2</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">3</span> Ringkasan</a></li>
            </ul>
         </div>

        <div class="step-tab-panel">
        <br/>
        <h5 class="text-green m-b-3">Biodata</h5>
        <span style="color:red"> <strong>* ) Wajib di isi</strong></span>
        @if ($edit)
        {!! Form::model($mohon, ['route' => ['pensi.permohonandudajanda.update', encrypt($mohon->id)], 'method'=>'patch']) !!}
        @else
        {{ Form::open(['url' => route('pensi.permohonandudajanda.store'), 'method' => 'post', 'id' => 'mohon']) }}
        @endif
        @csrf
            <div class="row m-t-2">
                <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>No Peserta / Pensiun:</label>
                        <input class="form-control" type="text" name="nopeserta" value="{{ $edit ? $mohon->nopeserta : $user->biodata->nopeserta }}" disabled>
                        <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->biodata->nopeserta }}">
                        <input class="form-control" type="hidden" name="jenis" value="{{ $user->biodata->jenis }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Jenis Pensiun:</label>
                        <input class="form-control" type="text" name="nopeserta" value="{{ $edit ? $mohon->jenis : $user->biodata->jenis }}" disabled>
                        </div>
                    </div>
                </div>
                </div>
            </div>
             <div class="row m-t-2">
            <div class="col-md-6">
                <div class="form-group">
                <label>Nama :</label>
                @if($user->biodata->jenis== 'J')
                    @foreach($user->keluarga->where('hubungan', 'I') as $kel)
                    <input class="form-control" type="text" name="name" value="{!! $edit ? $mohon->name : $kel->nama !!}" readonly="readonly">
                    @endforeach
                @elseif($user->biodata->jenis == 'D')
                    @foreach($user->keluarga->where('hubungan', 'S') as $kel)
                    <input class="form-control" type="text" name="name" value="{!! $edit ? $mohon->name : $kel->nama !!}" readonly="readonly">
                    @endforeach
                @else
                    <input class="form-control" type="text" name="name" value="{!! $edit ? $mohon->name : $user->biodata->nama !!}" readonly="readonly">
                @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Janda/Duda dari :</label>
                <input class="form-control" type="text" name="name_pensiun" value="{!! $edit ? $mohon->name_pensiun : $user->biodata->name !!}" readonly="readonly">
                </div>
            </div>
            <div class="col-md-12">
                <span id="helpBlock2" class="help-block-warning" style="color:green"> Nama Istri / Suami yang berhak atas manfaat pensiun adalah yang terdaftar sesuai SK Penetapan dari PT. Semen Indonesia</span>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                &nbsp;
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                <label>No Handphone / HP : <span style="color:red"> <strong>*</strong></span></label>
                <input class="form-control" type="text" name="nohp" value="{!! $edit ? $mohon->nohp : $user->biodata->nohp !!}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label>Alamat Rumah: <span style="color:red"> <strong>*</strong></span></label>
                <textarea rows="2" class="form-control" name="alamat" required> {!! $edit ? $mohon->alamat : $user->biodata->alamat !!} </textarea>
                </div>
            </div>
            </div>
            <br/>
            <h5 class="text-green m-b-3">Rekening</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>No Rekening :</label>
                    <input class="form-control" type="text" name="norekening" value="{!! $user->rekening->norekening !!}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Atas Nama :</label>
                    <input class="form-control" type="text" name="atasnama" value="{!! $user->rekening->atasnama !!}" required>
                    <input class="form-control" type="hidden" name="nama_penerima" value="{!! $user->rekening->atasnama !!}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Bank :</label>
                    <select class="custom-select form-control" name="bank" required>
                        <option value="Mandiri" {{ $user->rekening->bank == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                        <option value="BNI" {{ $user->rekening->bank == 'BNI' ? 'selected' : ''}}>BNI</option>
                        <option value="BRI" {{ $user->rekening->bank == 'BRI' ? 'selected' : ''}}>BRI</option>
                        <option value="BTPN" {{ $user->rekening->bank == 'BTPN' ? 'selected' : ''}}>BTPN</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Cabang :</label>
                    <input class="form-control" type="text" name="cabang" value="{!! $user->rekening->cabang !!}" required>
                    <input class="form-control" type="hidden" name="alamat_rek" value="{!! $user->rekening->cabang !!}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="step-footer pull-right">
            {{--  <button data-direction="prev" class="btn btn-light">Previous</button>  --}}
            @if($edit)
                <button type="submit" data-direction="next" class="btn btn-primary">Simpan</button>
            @else
                {{--  <a href="{!! url('pensi/permohonan/karyawan/formedit1', ['id' => encrypt($user->id )]) !!}" data-direction="next" class="btn btn-warning">Edit</a> |  --}}
                <button type="submit" data-direction="next" class="btn btn-primary"><i class="fa fa-arrow-right"> </i> Lanjutkan</a>
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

