    <div class="card-body">
        <form action="{{ $edit ? route('pensi.pengkinian.update', ['pengkinian' => encrypt($user->id)]) : route('pensi.pensiun.store') }}" method="POST" class="form-horizontal form-material">
        @if ($edit)
            {{ method_field('PUT') }}
        @endif
        @csrf
        <div class="row">
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">No Pensiun Dapen SG</label>
            <input class="form-control" type="text" value="{{ $user->nopeserta.'-'.$user->jenis }}" disabled>
            <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->nopeserta }}">
            <span class="fa fa-user-circle-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Nama Lengkap</label>
            <input class="form-control" type="text" name="name" value="{{ $user->name }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-12">
        <div class="form-group has-feedback">
            <label class="control-label">Alamat</label>
            <textarea class="form-control" id="placeTextarea" name="alamat" rows="2" {{ $edit ? '' : 'disabled' }}>{{ $user->alamat }}</textarea>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Kota</label>
            <input class="form-control" type="text" name="kota" value="{{ $user->kota }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-address-book-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Kode Pos</label>
            <input class="form-control" type="text" name="kodepos" value="{{ $user->kodepos }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Jenis Pensiun</label>
                <select class="form-control" name="jenis" {{ $edit ? '' : 'disabled' }}>
                @foreach ($jenis as $item)
                    <option value="{{$item->jenis}}" {!! $item->jenis == $user->jenis ? 'selected' : '' !!}>{{$item->nama}}</option>
                @endforeach
                </select>
            <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Jenis Kelamin</label>
            <select class="form-control" name="sex" {{ $edit ? '' : 'disabled' }}>
                <option value="L" {{ $user->sex == 'L' ? 'selected' : '' }}> Laki-Laki </option>
                <option value="P" {{ $user->sex == 'P' ? 'selected' : '' }}> Perempuan </option>
            </select>
            <span class="fa fa-id-badge form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Tempat Lahir</label>
            <input class="form-control" type="text" name="tempat_lahir" value="{{ $user->tempat_lahir }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-tablet form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Tanggal Lahir</label>
            <input class="form-control" type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}" {{ $edit ? '' : 'disabled' }}>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">NIK</label>
            <input class="form-control" type="text" name="nik" value="{{ $user->nik }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa fa-address-card-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">NPWP</label>
            <input class="form-control" type="text" name="npwp" value="{{ $user->npwp }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-credit-card form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">No Ponsel</label>
            <input class="form-control" type="text" name="nohp" value="{{ $user->nohp }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-phone-square form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">E-mail</label>
            <input class="form-control" type="email" name="email_user" value="{{ $user->email_user }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-12">
            {{--  @if ($edit)
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                <a href="{{ route('pensi.pensiun.show', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-secondary waves-effect m-l-5">Cancel</a>
            @else
                <a href="{{ route('pensi.pensiun.edit', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Biodata</a>
            @endif  --}}
        </div>
    </div>
</form>
</div>
