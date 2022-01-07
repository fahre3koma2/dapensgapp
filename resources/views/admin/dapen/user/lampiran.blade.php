@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Data Lampiran</h1>
      <ol class="breadcrumb">
        <li><a href="#">User</a></li>
        <li><i class="fa fa-angle-right"></i>Data Lampiran</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 m-b-3">
                    <h4 class="text-black">Data Lampiran</h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-info text-white">
                        <tr>
                            <th scope="col" width="80%">Lampiran</th>
                            <th scope="col" width="20%">Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Fotocopy KTP
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button> |
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Fotocopy NPWP
                                <ol style="list-style:square">
                                    <li>Ukuran maksimum 300KB</li>
                                    <li>file harus (pdf)</li>
                                </ol>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button> |
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
         </div>
    </div>
</div>
@endsection
@section('injs')
    <script>
    	function setButtonUbah()
	{
		//alert('a');
		$("#reqDivButtonCV").show();
		$("#reqDivLampiranCV").hide();

		$("#reqDivButtonKTP").show();
		$("#reqDivLampiranKTP").hide();
	}
    </script>
@endsection

