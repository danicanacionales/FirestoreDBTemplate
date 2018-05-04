@extends('auth.layout')

@section('content')
<div class="row">
    <div class="input-field col s12 center">
        <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
        <p class="center login-form-text">Login Template</p>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <ul class="tabs tab-demo">
            <li class="tab col s3">
                <a class="active" href="#login">Login</a>
            </li>
            <li class="tab col s3">
                <a href="#tabsample">Tab Sample</a>
            </li>
        </ul>
    </div>
</div>

<div id="login" class="col s12">
    <form class="login-form" method="GET" action="{{ url('/login?email=&password=') }}">
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input class="validate" id="email" name="email" type="email"required>
                <label for="email" class="center-align">Email</label>
                <span class="helper-text" data-error="Invalid email format!" data-success=""></span>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input class="validate" name="password" id="password" type="password"required>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">          
            <div class="input-field col s12 m12 l12 login-text">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me">Remember me</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light col s12" type="submit" name="action">Login</button>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="{{ url('register') }}">Register Now!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
            </div>          
        </div>

    </form>
</div>

<div id="tabsample" class="col s12 login-form">
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input class="validate" id="email2" name="email2" type="email" required>
            <label for="email2">Email</label>
            <span class="helper-text" data-error="Invalid email format!" data-success=""></span>
        </div>
    </div>
    
    <div class="row right-align">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" type="submit" name="action">Tab Sample</button>
        </div>
    </div>
</div>
@endsection

@section('page-js-files')
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/plugins/prism/prism.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
@stop

@section('page-js-script')
    <script>
        $(document).ready(function(){
            $('.tabs').tabs();
        });
    </script>
@stop