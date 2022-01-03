@extends('webprofil.main')

@section('content')
<!-- section -->
<div id="slider" class="section main_slider">
  <div class="container-fuild">
    <div class="row">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            @php $no=1; @endphp
            @foreach ($konten as $item)
            <li data-index="rs-{{$no}}" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ url('webprof/images/dapen/'.$item->file) }}"  data-rotate="0"  data-saveperformance="off"  data-title="DAPEN SG" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ url('webprof/images/dapen/'.$item->file) }}"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                              id="slide-270-layer-1012"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                              data-transform_out="s:300;s:300;"
                              data-start="750"
                              data-basealign="slide"
                              data-responsive_offset="on"
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-912"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;"
                              data-mask_out="x:inherit;y:inherit;"
                              data-start="2000"
                              data-responsive_offset="on"
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-112"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1000"
                              data-splitin="chars"
                              data-splitout="none"
                              data-responsive_offset="on"
                              data-elementdelay="0.05"
                              style="z-index: 6; white-space: nowrap;">{{ $item->keterangan }} </div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-412"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1500"
                              data-splitin="none"
                              data-splitout="none"
                              data-responsive_offset="on"
                              style="z-index: 7; white-space: nowrap;">{{ $item->keterangan2 }}</div>
            </li>
            @php $no++; @endphp
            @endforeach
          </ul>
          <div class="tp-static-layers"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h4>Pelayanan Dana Pensiun Semen Gresik</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="{{ url('webprof/images/dapen/cs.jpg') }}" alt="#" /> </div>
          <div class="blog_feature_head">
            <center><h3><b>Customer Service</b></h3></center>
            <hr class="new5">
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
          <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="it_blog_detail.html">READ MORE <i class="fa fa-angle-right"></i></a></div>
              </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="{{ url('webprof/images/dapen/pk.jpg') }}" alt="#" /> </div>
          <div class="blog_feature_head">
            <center><h3><b>Product Knowledge</b></h3></center>
            <hr class="new5">
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
          <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="it_blog_detail.html">READ MORE <i class="fa fa-angle-right"></i></a></div>
              </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="{{ url('webprof/images/it_service/post-03.jpg') }}" alt="#" /> </div>
          <div class="blog_feature_head">
            <center><h3><b>Dapen SG</b></h3></center>
            <hr class="new5">
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
          <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="it_blog_detail.html">READ MORE <i class="fa fa-angle-right"></i></a></div>
              </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <br/>
    <!-- section -->
    <div class="row" style="margin-top: 35px">
    <div class="col-md-12">
        <div class="full">
        <div class="main_heading text_align_left">
            <h2>Budaya Kerja</h2>
        </div>
        </div>
    </div>
      <div class="col-md-7">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> A </b> (Amanah)<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kemampuan untuk menujukan sikap satunya kata dengan perbuatan, tulus, bertanggung jawab, dapat dipercaya, jujur dan konsisten berpegang teguh pada nilai moral dan etika. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> K </b> (Kompeten)<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kemampuan untuk selalu belajar dan mengembangkan pengetahuan, ketrampilan dan sikap kerja serta kapabilitas untuk menjadi ahli di bidangnya dan memberikan kinerja yang terbaik. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> H </b> (Harmonis)<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kemampuan untuk saling peduli, membantu dan menghargai perbedaan yang ada untuk menciptakan lingkungan kerja yang aman,nyaman, selaras dan produktif. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> L </b>(Loyal)<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kami berdedikasi dan mengutamakan kepentingan Bangsa dan Negara. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <b> A </b> (Adaptif)<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kami terus berinovasi dan antusias dalam menggerakkan ataupun menghadapi perubahan. </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> K </b>(Kolaboratif) <i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Kami membangun kerja sama yang sinergis. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="full" style="margin-top: 35px;">
           <img src="{{ url('webprof/images/dapen/akhlakpoto.jpg') }}" alt="#" />
        </div>
      </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="row" style="margin-top: 35px">
      <div class="row">
        <div class="col-md-12">
            <div class="full">
            <div class="main_heading text_align_left">
                <h2>Sosial Media Pensiunan</h2>
                <p>Demi menjalin silahturahmi dengan sesama Pensiunan Semen Gresik dan berbagi informasi terbaru. Silahkan Bapak dan Ibu dapat bergabung pada akun Sosial Media yang telah kami sediakan.</p>
            </div>
            </div>
        </div>
      </div>
        <div class="row">
        <div class="col-md-6">
            <div class="row">
            <div class="col-md-6  ">
                <div class="full">
                <div class="service_blog_inner">
                    <div class="icon text_align_left"><img src="{{ url('webprof/images/it_service/si1.png') }}" alt="#" /></div>
                    <h4 class="service-heading">facebook</h4>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                <div class="service_blog_inner">
                    <div class="icon text_align_left"><img src="{{ url('webprof/images/it_service/si2.png') }}" alt="#" /></div>
                    <h4 class="service-heading">Google</h4>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                <div class="service_blog_inner">
                    <div class="icon text_align_left"><img src="{{ url('webprof/images/it_service/si3.png') }}" alt="#" /></div>
                    <h4 class="service-heading">Whatsapp</h4>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                <div class="service_blog_inner">
                    <div class="icon text_align_left"><img src="{{ url('webprof/images/it_service/si4.png') }}" alt="#" /></div>
                    <h4 class="service-heading">Instagram</h4>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ url('webprof/images/dapen/sosmed.jpg') }}" alt="#" />
        </div>
        </div>
    </div>
<!-- end section -->
<!-- section -->
    <div class="row" style="margin-top: 35px">
        <div class="row">
        <div class="col-md-12">
            <div class="full">
            <div class="main_heading text_align_left">
                <h2>Galeri Dana Pensiun Semen Gresik</h2>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="product_list">
            <div class="product_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/1.jpg')}}" alt=""> </div>
                <div class="center">
                    <h4><a href="#">Galeri 1</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="product_list">
            <div class="product_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/2.jpg')}}" alt=""> </div>
                <div class="center">
                    <h4><a href="#">Galeri 2</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="product_list">
            <div class="product_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/3.jpg')}}" alt=""> </div>
                <div class="center">
                    <h4><a href="#">Galeri 3</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="product_list">
            <div class="product_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/4.jpg')}}" alt=""> </div>
                <div class="center">
                    <h4><a href="#">Galeri 4</a></h4>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
<!-- end section -->

@endsection
@section('injs')
<script src="{{ url('webprof/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ url('webprof/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
@endsection

