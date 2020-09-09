<div class="log-reg-area reg">
    <h2 class="log-title">Register</h2>
    <p>
        Don’t use Winku Yet? <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="">Take the tour</a> or <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="">Join now</a>
    </p>
    <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span>
                        {{$errors->first()}}
                    </span>
            </div>
        @endif
        <div class="form-group">
            <input value="{{old('name')}}" name="name" type="text" required="required">
            <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
        </div>
        <div class="form-group">
            <input value="{{old('password')}}" name="password" type="password" required="required">
            <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
        </div>
        <div class="form-group">
            <input name="password_confirmation" type="password" required="required">
            <label class="control-label" for="input">Password Confirmation </label><i class="mtrl-select"></i>
        </div>
        <div class="form-group">
            <input value="{{old('email')}}" name="email" type="text" required="required">
            <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
        </div>
        <div class="form-group">
            <input name="avatar" id="file-input" type="file" multiple class="d-none" />
            <label for="file-input" class="btn btn-primary">
                ارفق صورتك الشخصية
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked="checked"><i class="check-box"></i>Accept Terms &amp; Conditions ?
            </label>
        </div>
        <a href="{{route('login')}}" title="" class="already-have">Already have an account</a>
        <div class="submit-btns">
            <button class="mtr-btn signin" type="submit"><span>Register</span></button>
        </div>
    </form>
</div>
