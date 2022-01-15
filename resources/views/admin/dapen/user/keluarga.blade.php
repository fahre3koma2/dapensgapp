<div class="card-body">
    <h4 class="text-black">Data Keluarga</h4>
     <div class="row">
            <div class="col-lg-12">
            @if ($user->biodata->keluarga == null)
                <div class="alert alert-secondary" role="alert"> Data Keluarga tidak tersedia ! </div>
            @else
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

                    @foreach ($user->biodata->keluarga as $item)
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
                        <td>{{$item->tgl_lahir}}</td>
                    </tr>
                    @php $no++; @endphp
                    @endforeach
                </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
