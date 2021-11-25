@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> Home</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dist/img/img1.jpg') }}" alt="User profile picture">
              <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
              <p class="text-center">{{ auth()->user()->email }}</p>
              <p class="text-center"> <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-file-photo-o"></i> Upload Foto</button> </p>
            </div>
          </div>
          <div class="card m-b-3">
            <div class="card-body">
              <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                <p class="text-muted"> B.S. in Computer Science from the University of Tennessee at Knoxville </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                <p class="text-muted">Malibu, California</p>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> Email address </strong>
                <p class="text-muted">alexanderpierce@gmail.com</p>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
                <p>(123) 456-7890 </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                <div class="embed-container maps">
                  <iframe class="full-wid" src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed" style="pointer-events: none;"></iframe>
                </div>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> Social Profile</strong>
                <div class="text-left"> <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a> <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a> <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a> </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Pengguna</a> </li>
                {{--  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Pengguna</a> </li>  --}}
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="settings" role="tabpanel">
                  <div class="card-body">
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                          <input placeholder="Florence Douglas" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                          <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                          <input value="password" class="form-control form-control-line" type="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                          <input placeholder="123 456 7890" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Message</label>
                        <div class="col-md-12">
                          <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-line">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row -->
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

