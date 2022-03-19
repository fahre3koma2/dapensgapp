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
              <h1 class="page-title">Artikel List</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Artikel List</li>
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
<div class="section padding_layout_1 blog_list">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
        <div class="full">
            @php $no = 1; @endphp
            @foreach ($konten as $item)
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ url('dapen/artikel/'.$item->gambar) }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">{{ $item->judul }}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> {{ $item->kategori }}</li>
                  {{--  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>  --}}
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ $item->created_at->format('d, M Y') }}</li>
                </ul>
              </div>
              <p> @php $keterangan = strip_tags($item->keterangan); @endphp {{ Str::limit($keterangan, 260) }}</p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn btn-sm sqaure_bt" href="{{ route('artikel.show', ['artikel' => encrypt($item->id)]) }}">Baca selengkapnya<i class="fa fa-angle-right"></i></a></div>

              </div>
            </div>
          </div>
            @php $no++; @endphp
            @endforeach

          @if ($konten->lastPage() > 1)
          <div class="center">
            <ul class="pagination style_1">
              <li class="{{ ($konten->currentPage() == 1) ? ' disabled' : '' }}">
                  <a href="{{ $konten->url(1) }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              </li>
                @for ($i = 1; $i <= $konten->lastPage(); $i++)
                    <li class="{{ ($konten->currentPage() == $i) ? ' active' : '' }}">
                        <a href="{{ $konten->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
              <li class="{{ ($konten->currentPage() == $konten->lastPage()) ? ' disabled' : '' }}">
                  <a href="{{ $konten->url($konten->currentPage()+1) }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
          @endif

        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Cari</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          {{--  <div class="side_bar_blog">
            <h4>Artikel Terbaru</h4>
            <div class="recent_post">
              <ul>
                @foreach ($konten as $item)
                <li>
                  <p class="post_head"><a href="#">{{ $item->judul }}</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $item->created_at->format('d, M Y') }}</p>
                </li>
                 @endforeach
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>Kategori Artikel</h4>
            <div class="categary">
              <ul>
                @foreach ($kategori as $kat)
                    <li><a href="#"><i class="fa fa-caret-right"></i> {{$kat->nama}} ({{$kat->count}})</a></li>
                @endforeach
              </ul>
            </div>
          </div>  --}}
          {{--  <div class="side_bar_blog">
            <h4>CATEGORIES</h4>
            <div class="categary">
              <ul>
                @foreach ($bulan as $bul)
                    <li><a href="#"><i class="fa fa-caret-right"></i> {{$bul->new_date}} ({{$bul->data}})</a></li>
                @endforeach
              </ul>
            </div>
          </div>  --}}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
@endsection
@section('injs')

@endsection
