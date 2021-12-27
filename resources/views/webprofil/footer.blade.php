<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        {{--  <div id="map"></div>  --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3958.611533802179!2d112.649644!3d-7.1708242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80047633bdffd%3A0x25bd39dccd3b5da7!2sJl.%20R.A.%20Kartini%20No.23%2C%20Injen%20Timur%2C%20Gapurosukolilo%2C%20Kec.%20Gresik%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061122!5e0!3m2!1sen!2sid!4v1640351656740!5m2!1sen!2sid" width="600" height="610" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>It Next Theme</h2>
            </div>
            <p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> Visi Misi</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Sejarah Pendirian</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Struktur Organisasi</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> Pendiri</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Kontak Kami</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Pelayanan</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Customer Service</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Product Knowledge</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i>Aplication</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>Jalan RA. Kartini No. 23<br>
              Gresik, Jawa Timur<br>
              <span style="font-size:18px;"><a href="tel:+62313984492">+6231 3984492</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>DAPENSG © Copyrights 2021</p>
      </div>
    </div>
  </div>
</footer>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content clearfix">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <h3 class="title">Login</h3>
                @foreach( $errors->all() as $message )
                <div class="alert alert-danger display-hide">
                    <span>{{ $message }}</span>
                </div>
                @endforeach
                <p class="description">Login dengan Email & Password</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Enter email" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                    </div>
                {{-- <a href="" class="forgot-pass">Forgot Password?</a> --}}
                <button class="btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
