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
              <h1 class="page-title">Blog List</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog List</li>
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
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-06.jpg') }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Blogpost With Image</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                </ul>
              </div>
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn sqaure_bt" href="it_blog_detail.html">Read More<i class="fa fa-angle-right"></i></a></div>

              </div>
            </div>
          </div>
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-08.jpg') }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Blogpost With Image</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                </ul>
              </div>
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn sqaure_bt" href="it_blog_detail.html">Read More<i class="fa fa-angle-right"></i></a></div>

              </div>
            </div>
          </div>
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ url('webprof/images/it_service/home_01.png') }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Blogpost With Image</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                </ul>
              </div>
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn sqaure_bt" href="it_blog_detail.html">Read More<i class="fa fa-angle-right"></i></a></div>

              </div>
            </div>
          </div>
          <div class="center">
            <ul class="pagination style_1">
              <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="it_blog_grid.html">2</a></li>
              <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>ABOUT AUTHOR</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="side_bar_blog">
            <h4>RECENT POST</h4>
            <div class="recent_post">
              <ul>
                <li>
                  <p class="post_head"><a href="#">How To Look Up</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
                <li>
                  <p class="post_head"><a href="#">Compatible Inkjet Cartridge</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
                <li>
                  <p class="post_head"><a href="#">Treat That Oral Thrush Now</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
              </ul>
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

@endsection
