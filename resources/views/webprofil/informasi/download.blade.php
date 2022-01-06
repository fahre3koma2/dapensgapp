@extends('webprofil.main')

@section('content')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Download Form</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Informasi</a></li>
                <li class="active">Download Form</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
              <tr>
                <th>Judul</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
            @foreach($form as $value)
              <tr>
                <td class="col-sm-8 col-md-6">
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">{{$value->judul}}</a></h4>
                      <span>Manfaat Pensiun Normal diberikan kepada Peserta yang berhenti bekerja sebagai Pekerja dan telah mencapai Usia Pensiun Normal (56 tahun).</span>
                    </div>
                </td>
                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-download "></i> Download</button></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <table class="table">
            <tbody>
              <tr class="cart-form">
                <td class="actions">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
@endsection
@section('injs')
    <script src="{{ url('webprof/js/hizoom.js')}}"></script>
    <script>
            $('.hi1').hiZoom({
                width: 300,
                position: 'right'
            });
            $('.hi2').hiZoom({
                width: 400,
                position: 'right'
            });
    </script>
@endsection
