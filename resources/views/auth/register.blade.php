@extends('auth.layout')

@section('content')

<style>
    .login-form{
        min-width: 600px;
    }
</style>

<div class="row">
    <div class="input-field col s12 center">
        <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
        <p class="center login-form-text">Register Template</p>
    </div>
</div>

    {{-- <h3>Membership Request</h3> --}}
    {!! Form::open(['action' => 'RegisterController@store', 'class' => 'login-form']) !!}
        <div class="row margin">
            <div class="input-field col s12 m6">
                <i class="material-icons prefix">account_circle</i>
                {{ Form::text('first_name', '', ['class' => 'validate', 'required']) }}
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s12 m6">
                {{ Form::text('last_name', '', ['class' => 'validate', 'required']) }}
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                {{ Form::email('email', '', ['class' => 'validate', 'required']) }}
                <label for="email">Email</label>
                <span class="helper-text" data-error="Invalid email format!" data-success=""></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                {{ Form::password('password', ['class' => 'validate', 'required']) }}
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row right-align">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    {!! Form::close() !!}
@endsection

@section('page-js-files')
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
@stop

@section('page-js-script')
    <script>
        M.AutoInit();
    </script>
@stop