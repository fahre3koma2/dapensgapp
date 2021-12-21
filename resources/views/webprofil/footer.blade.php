<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
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
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content clearfix">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <h3 class="title">Login</h3>
                <p class="description">Login here Using Email & Password</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
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
