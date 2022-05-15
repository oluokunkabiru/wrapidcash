@extends('layouts.app')
@section('title', 'Login')

@section('style')

<style>
    input[type=text],input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    /* border: none; */
    /* background: #a34343; */
  }

  /* input[type=text]:focus,input[type=email]:focus, input[type=password]:focus {
    background-color: rgb(83, 73, 73);
    outline: none;
  } */

  /* Set a style for the submit button */
  /* .btn {
    background-color: rgb(123, 177, 241);;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  } */

  .btn:hover {
    opacity: 1;
  }
  </style>
@endsection
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="offset-lg-3"></div>
            <div class="col-lg-6">
                <div class="dudu" >
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Disabled! </strong> {{ session('error') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Login</h1>

                      <label for="email"><b>Email</b></label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <label for="psw"><b>Password</b></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                   <span class="float-right"> Or Click<a href="{{ route('register') }}" style="color: blue;">&nbsp; here</a> to join us</span>

                                    </div>
                                </div>
                    </form>
                  </div>
            </div>
            <div class="offset-3-lg"></div>
        </div>
    </div>
</section>
@endsection
