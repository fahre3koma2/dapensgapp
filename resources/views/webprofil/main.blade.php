<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
@include('webprofil.headp')
</head>
    @if ($menu == 'laporan')
        <body id="default_theme" class="it_serv_shopping_cart it_checkout checkout_page">
    @elseif($menu == 'downloadform')
        <body id="default_theme" class="it_serv_shopping_cart shopping-cart">
    @else
        <body id="default_theme" class="it_service">
    @endif
<!-- loader -->
{{--  <div class="bg_load"> <img class="loader_animation" src="{{ url('webprof/images/loaders/video.png') }}" alt="#" /> </div>  --}}
<!-- end loader -->
  <a href="https://api.whatsapp.com/send?phone=0987654321&text=Hello%21%20." class="floating" target="_blank">
    <i class="fa fa-whatsapp float-button"></i>
</a>
<!-- header -->
@php
if(auth()->user()){
   $stat = auth()->user()->name;
}else{
    $stat = null; }
@endphp

@include('webprofil.menu')
<!-- end header -->
<!-- section -->
@yield('content')
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
@include('webprofil.footer')
<!-- end footer -->
<!-- js section -->
@include('webprofil.js')
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
