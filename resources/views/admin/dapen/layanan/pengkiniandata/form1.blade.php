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
        <h5 class="text-green m-b-3">Biodata</h5>
         @if ($edit)
        {!! Form::model($user, ['route' => ['pensi.pengkinian.update', encrypt($user->id)], 'method'=>'patch']) !!}
        @else
        {{ Form::open(['url' => route('pensi.pengkinian.store'), 'method' => 'post', 'id' => 'mohon']) }}
        @endif
        @csrf
            <div class="row m-t-2">
            <div class="col-md-6">
                <div class="form-group">
                <label>No Peserta / Pensiun:</label>
                <input class="form-control" type="text" name="nopeserta" value="{{ $user->nopeserta }}" disabled>
                <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->nopeserta }}">
                <input class="form-control" type="hidden" name="user_id" value="{{ $user->user_id }}">
                <input class="form-control" type="hidden" name="nik" value="{{ $user->nik }}">
                <input class="form-control" type="hidden" name="jenis" value="{{ $user->jenis }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Nama :</label>
                <input class="form-control" type="text" name="name" value="{{ $user->name }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Tempat Lahir :</label>
                <input class="form-control" type="text" name="tempat_lahir" value="{{ $user->tempat_lahir }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input class="form-control" type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}" required>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Alamat :</label>
                    <textarea rows="2" class="form-control" name="alamat" required>{{ $user->alamat }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kelurahan:</label>
                    <input class="form-control" type="text" name="kelurahan" value="{{ $user->kelurahan }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label>RT:</label>
                    <input class="form-control" type="text" name="rt" value="{{ $user->rt }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label>RW:</label>
                    <input class="form-control" type="text" name="rw" value="{{ $user->rw }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kota :</label>
                    <input class="form-control" type="text" name="kota" value="{{ $user->kota }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kode Pos :</label>
                    <input class="form-control" type="text" name="kodepos" value="{{ $user->kodepos }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>No Handphone :</label>
                    <input class="form-control" type="text" name="nohp" value="{{ $user->nohp }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>NPWP :</label>
                    <input class="form-control" type="text" name="npwp" value="{{ $user->npwp }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status Perkawinan :</label>
                        <div class="c-inputs-stacked">
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="kawin" value="Menikah" {{ $user->kawin == 'Menikah' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Menikah</span> </label>
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="kawin" value="Duda" {{ $user->kawin == 'Duda' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Duda</span> </label>
                            <label class="inline custom-control custom-radio block">
                            <input type="radio" name="kawin" value="Janda" {{ $user->kawin == 'Janda' ? 'checked' : '' }} required>
                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Janda</span> </label>
                        </div>
                    </div>
                </div>
            </div>
            <br/>

        </div>

        <div class="step-footer pull-right">
            {{--  <button data-direction="prev" class="btn btn-light">Previous</button>  --}}
            @if($edit)
                <button type="submit" data-direction="next" class="btn btn-primary"> <i class="fa fa-arrow-right"> </i> Lanjutkan</button>
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

