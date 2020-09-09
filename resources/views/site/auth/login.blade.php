@extends('layout.auth')
@section('content')
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <h1>Winku</h1>
                        <p>
                            Winku is free to use for as long as you want with two active projects.
                        </p>
                        <div class="friend-logo">
                            <span><img src="./Winku Social Network Toolkit login_files/wink.png" alt=""></span>
                        </div>
                        <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="" class="folow-me">Follow Us on</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <h2 class="log-title">Login</h2>
                        <p>
                            Don’t use Winku Yet? <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="">Take the tour</a> or <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="">Join now</a>
                        </p>
                        <form action="{{route('login')}}" method="post">
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
                                <input value="{{old('email')}}" name="email" type="text" id="input" required="required">
                                <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input value="{{old('password')}}" name="password" type="password" required="required">
                                <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked"><i class="check-box"></i>Always Remember Me.
                                </label>
                            </div>
                            <a href="http://www.wpkixx.com/html/winku-dark/landing.html#" title="" class="forgot-pwd">Forgot Password?</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signin" type="submit"><span>Login</span></button>
                                <button class="mtr-btn signup" type="button"><span>Register</span></button>
                            </div>
                        </form>
                    </div>
                    @include('site.auth.register')
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection


