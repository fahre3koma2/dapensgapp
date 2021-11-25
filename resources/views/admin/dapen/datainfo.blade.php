@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> FAQ</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
      <div class="col-lg-4 m-b-3">
            <!-- Card -->
            <div class="card"> <img class="card-img-top img-responsive" src="{{ url('dist/img/img12.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-4 m-b-3">
            <!-- Card -->
            <div class="card"> <img class="card-img-top img-responsive" src="{{ url('dist/img/img13.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-4 m-b-3">
            <!-- Card -->
            <div class="card"> <img class="card-img-top img-responsive" src="{{ url('dist/img/img13.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title make up the bulk of the cards content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> </div>
            </div>
            <!-- Card -->
          </div>
      </div>
      <div class="row">
      <div class="col-lg-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-black" style="background: url('{{ url('dist/img/user-bg.jpg') }}');">
                <h3 class="widget-user-username">Angela Dominic</h3>
                <h5 class="widget-user-desc">Web Designer &amp; Developer</h5>
              </div>
              <div class="widget-user-image"> <img class="img-circle" src="{{ url('dist/img/img5.jpg') }}" alt="User Avatar"> </div>
              <div class="box-footer">
                <div class="text-center">
                <p> A small river named Duden flows by their place and with the necessary.</p>
                <a href="#" class="btn btn-facebook btn-rounded margin-bottom">Follow</a></div>
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">1,500</h5>
                      <span class="description-text">SALES</span> </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">10,350</h5>
                      <span class="description-text">FOLLOWERS</span> </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span> </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        <div class="col-lg-4">
          <div>
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-yellow">
                <div class="widget-user-image"> <img class="img-circle" src="{{ url('dist/img/img5.jpg') }}" alt="User Avatar"> </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Nick Lampard</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Projects <span class="pull-right badge bg-blue">15</span></a></li>
                  <li><a href="#">Tasks <span class="pull-right badge bg-aqua">25</span></a></li>
                  <li><a href="#">Completed Projects <span class="pull-right badge bg-green">30</span></a></li>
                  <li><a href="#">Followers <span class="pull-right badge bg-red">150</span></a></li>
                  <li><a href="#">Completed Projects <span class="pull-right badge bg-green">30</span></a></li>
                  <li><a href="#">Tasks <span class="pull-right badge bg-aqua">25</span></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

        </div>

          <div class="col-lg-4 col-xlg-3">
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h6 class="widget-user-desc">Founder &amp; CEO</h6>
            </div>
            <div class="widget-user-image"> <img class="img-circle" src="{{ url('dist/img/img3.jpg') }}" alt="User Avatar"> </div>
            <div class="box-footer">
              <div class="text-center">
                <p> A small river named Duden flows by their place and with the necessary.</p>
                <a href="#" class="btn btn-facebook btn-rounded margin-bottom">Follow</a></div>
              <div class="row margin-bottom">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span> </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span> </div>
                </div>
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('injs')
    <!-- Chart Peity JavaScript -->
    <script src="{{ url('dist/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/jquery.peity.init.js') }}"></script>

    <!-- Chartist JavaScript -->
    <script src="{{ url('dist/plugins/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ url('dist/plugins/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/chartist-init.js') }}"></script>
@endsection

