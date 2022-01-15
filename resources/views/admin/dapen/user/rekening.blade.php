    <div class="card-body">
        <form action="{{ $edit ? route('pensi.pensiun.update', ['pensiun' => encrypt($user->id)]) : route('pensi.pensiun.store') }}" method="POST" class="form-horizontal form-material">
        @if ($edit)
            {{ method_field('PUT') }}
        @endif
        @csrf
        <div class="row">
            @if($user->biodata->rekening == null)
            <div class="col-md-12">
                <div class="alert alert-secondary" role="alert"> Data Rekening tidak tersedia ! </div>
            </div>
            @else
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">No Rekening</label>
            <input class="form-control" type="text" value="{{ $user->biodata->rekening->norekening }}" disabled>
            <span class="fa fa-user-circle-o form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Bank</label>
            <input class="form-control" type="text" name="name" value="{{ $user->biodata->rekening->bank }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">Cabang</label>
            <input class="form-control" type="text" name="name" value="{{ $user->biodata->rekening->cabang }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </div>
        <div class="col-md-6">
        <div class="form-group has-feedback">
            <label class="control-label">An Bank</label>
            <input class="form-control" type="text" name="name" value="{{ $user->biodata->rekening->atasnama }}" {{ $edit ? '' : 'disabled' }}>
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </div>
            @endif
        {{--  <div class="col-md-12">
            @if ($edit)
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                <a href="{{ route('pensi.pensiun.show', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-secondary waves-effect m-l-5">Cancel</a>
            @else
                <a href="{{ route('pensi.pensiun.edit', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Biodata</a>
            @endif
        </div>  --}}
    </div>
</form>
</div>
