<div class="modal fade signin-form" id="modal-signin" role="dialog">
    <div class="modal-dialog signin-form__dialog">
      <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
        <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
      </div>
      <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="{{asset('educef/assets/img/logo/Logo-form.png')}}" alt=""></a>
        <p class="signin-form__sub">Universal access to the world’s best education.</p>
      </div>
      <div class="modal-content signin-form__content">
        <div class="modal-body signin-form__body">
          <ul class="signin-form__tabs">
            <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in">Sign In</a></li>
            <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up">Sign Up</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="sign-in">
              <h3 class="signin-form__body__title">Log Into Your Account</h3>
              <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                <form class="signin-form__form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                <div class="signin-form__form__inputs">
                  <input class="input-item" type="text" placeholder="Email" name="email"  value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                  <input class="input-item" type="password" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
              </form>
              <div class="group-btn-socials">
                <p class="group-btn-socials__sub">or sign in with one of these services</p>
                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
              </div>
            </div>
            <div class="tab-pane fade" id="sign-up">
              <h3 class="signin-form__body__title">Log Into Your Account</h3>
              <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
              <form  class="signin-form__form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <div class="signin-form__form__inputs">
                  <input class="input-item" type="text" placeholder="Name" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  <input class="input-item" type="email" placeholder="Email" name="email" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  <input class="input-item" type="password" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  <input class="input-item" id="password-confirm" type="password"  name="password_confirmation" required >
                </div>
                <button class="btn-green list-link__btn">Sign Up</button>
              </form>
              <div class="group-btn-socials">
                <p class="group-btn-socials__sub">or sign up with one of these services</p>
                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
    </div>
  </div>