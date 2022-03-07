<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
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
                {{--  <p class="description">Login dengan Email & Password</p>  --}}
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="No Pensiun" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                    </div>
                <div class="form-group">
                    <a href="https://api.whatsapp.com/send?phone=08113040444&text=Halo Admin, Saya lupa password" target="_blank" class="forgot-pass align-left">Lupa Password ?</a>
                </div>
                <button class="btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


