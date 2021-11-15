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
              <h1 class="page-title">Galeri</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Berita</a></li>
                <li class="active">Galeri</li>
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
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
              <a href="{{ url('webprof/images/it_service/post-01.jpg') }}" class="glightbox">
                <img class="img-responsive" src="{{ url('webprof/images/it_service/post-01.jpg') }}" alt="image" />
              </a>
          </div>
          <div class="service_cont">
            <h3 class="service_head">Data recovery</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
              <a href="{{ url('webprof/images/it_service/post-02.jpg') }}" class="glightbox">
                <img class="img-responsive" src="{{ url('webprof/images/it_service/post-02.jpg') }}" alt="image" /> </div>
              </a>
          <div class="service_cont">
            <h3 class="service_head">Computer repair</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
            <a href="{{ url('webprof/images/it_service/post-03.jpg') }}" class="glightbox">
                <img class="img-responsive" src="{{ url('webprof/images/it_service/post-03.jpg') }}" alt="image" /> </div>
            </a>
          <div class="service_cont">
            <h3 class="service_head">Network solutions</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
            <a href="{{ url('webprof/images/it_service/post-04.jpg') }}" class="glightbox">
                <img class="img-responsive" src="{{ url('webprof/images/it_service/post-04.jpg') }}" alt="image" /> </div>
            </a>
          <div class="service_cont">
            <h3 class="service_head">Data recovery</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
            <a href="{{ url('webprof/images/it_service/post-05.jpg') }}" class="glightbox">
                <img class="img-responsive" src="{{ url('webprof/images/it_service/post-05.jpg') }}" alt="image" /> </div>
            </a>
          <div class="service_cont">
            <h3 class="service_head">Computer repair</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-06.jpg') }}" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Network solutions</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-07.jpg') }}" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Data recovery</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-08.jpg') }}" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Computer repair</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-01.jpg') }}" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Network solutions</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('injs')
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"></script>
    {{--  <script src="demo/js/valde.min.js"></script>  --}}
    <script src="{{ url('webprof/dist/js/glightbox.js') }}"></script>
    {{--  <script src="demo/js/site.js"></script>  --}}
    <script>
        var lightbox = GLightbox();
        lightbox.on('open', (target) => {
            console.log('lightbox opened');
        });
        var lightboxDescription = GLightbox({
            selector: '.glightbox2'
        });
        var lightboxVideo = GLightbox({
            selector: '.glightbox3'
        });
        lightboxVideo.on('slide_changed', ({ prev, current }) => {
            console.log('Prev slide', prev);
            console.log('Current slide', current);

            const { slideIndex, slideNode, slideConfig, player } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on('ready', (event) => {
                        // Do something when video is ready
                    });
                }

                player.on('play', (event) => {
                    console.log('Started play');
                });

                player.on('volumechange', (event) => {
                    console.log('Volume change');
                });

                player.on('ended', (event) => {
                    console.log('Video ended');
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: '.glightbox4'
        });
    </script>
@endsection
