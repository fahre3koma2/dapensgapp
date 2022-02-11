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
              <li><a href="#"><span class="number">2</span> Data Lampiran</a></li>
              <li><a href="#"><span class="number">3</span> Submit</a></li>
            </ul>
         </div>

        <div class="step-tab-panel">
        <br/>
        <h5 class="text-yellow m-b-3">Biodata</h5>
        @if ($mohon)
        {!! Form::model($mohon, ['route' => ['pensi.permohonananak.update', encrypt($mohon->id)], 'method'=>'patch']) !!}
        @else
        {{ Form::open(['url' => route('pensi.permohonananak.store'), 'method' => 'post', 'id' => 'mohon']) }}
        @endif
        @csrf
            <div class="row m-t-2">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>No Peserta / Pensiun :</label>
                    <input class="form-control" type="text" name="nopeserta" value="{{ $edit ? $mohon->nopeserta : $user->biodata->nopeserta }}" disabled>
                    <input class="form-control" type="hidden" name="nopeserta" value="{{ $edit ? $mohon->nopeserta : $user->biodata->nopeserta }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>NIK :</label>
                    <input class="form-control" type="text" name="nik" value="{{ $edit ? $mohon->nik : $user->biodata->nik }}" disabled>
                     <input class="form-control" type="hidden" name="nik" value="{{ $edit ? $mohon->nik : $user->biodata->nik }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Nama :</label>
                    <input class="form-control" type="text" name="name" value="{{ $edit ? $mohon->name : $user->biodata->name }}" disabled>
                     <input class="form-control" type="hidden" name="name" value="{{ $edit ? $mohon->name : $user->biodata->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Alamat :</label>
                    <textarea rows="2" class="form-control" name="alamat" disabled>{{ $edit ? $mohon->alamat : $user->biodata->alamat }}</textarea>
                    <input class="form-control" type="hidden" name="alamat" value="{{ $edit ? $mohon->alamat : $user->biodata->alamat }}">
                    </div>
                </div>
            </div>
            <br/>
            <h5 class="text-yellow m-b-3">Data Anak</h5>
            <h6> Masing-masing selaku anak kandung, yang  bertanda  tangan  dibawah  ini : </h6>
                <div class="row m-t-2">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Nama Anak 1 :</label>
                        <input class="form-control" type="text" name="anak1" value="{!! $edit ? $mohon->anak1 : '' !!}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Alamat Anak 1 :</label>
                        <textarea rows="2" class="form-control" name="alamat1" required> {!! $edit ? $mohon->alamat1 : '' !!} </textarea>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                        <label>Nama Anak 2 :</label>
                        <input class="form-control" type="text" name="anak2" value="{!! $edit ? $mohon->anak2 : '' !!}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Alamat Anak 2 :</label>
                        <textarea rows="2" class="form-control" name="alamat2" required> {!! $edit ? $mohon->alamat2 : '' !!} </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Nama Anak 3 :</label>
                        <input class="form-control" type="text" name="anak3" value="{!! $edit ? $mohon->anak3 : '' !!}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Alamat Anak 3 :</label>
                        <textarea rows="2" class="form-control" name="alamat3" required> {!! $edit ? $mohon->alamat3 : '' !!} </textarea>
                        </div>
                    </div>
                </div>
            <br/>
            <h5 class="text-yellow m-b-3">Rekening</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label>No Rekening :</label>
                    <input class="form-control" type="text" name="norekening" value="{!! $edit ? $mohon->norekening : '' !!}" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>Bank :</label>
                    <select class="custom-select form-control" name="bank" required>
                        <option value="Mandiri" {{ $edit ? $mohon->bank == 'Mandiri' ? 'selected' : '' : '' }}>Mandiri</option>
                        <option value="BNI" {{ $edit ? $mohon->bank == 'BNI' ? 'selected' : '' : ''}}>BNI</option>
                        <option value="BRI" {{ $edit ? $mohon->bank == 'BRI' ? 'selected' : '' : ''}}>BRI</option>
                        <option value="BTPN" {{ $edit ? $mohon->bank == 'BTPN' ? 'selected' : '' : ''}}>BTPN</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>Cabang :</label>
                    <input class="form-control" type="text" name="cabang" value="{!! $edit ? $mohon->cabang : '' !!}" required>
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
                <button type="submit" data-direction="next" class="btn btn-primary">Next</button>
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

