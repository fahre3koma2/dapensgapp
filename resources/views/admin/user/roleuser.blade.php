<div class="row mb-2">
    <div class="col-md-4">
        {{ $role->name }}
    </div>
    <div class="col-md-6">
        <button type="button" onclick="removeRole('{{ encrypt($user->id) }}', '{{ encrypt($role->id) }}', this)"  style="padding: 8px" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
    </div>
</div>