@extends('layouts.app')
@section('title', isset($ref) ? $ref->user->name . ' invite you to register' : 'Register')


@section('content')
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="offset-lg-3"></div>
                <div class="col-lg-6">
                    <div class="dudu">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1>{{ isset($ref) ? ucwords($ref->user->name) . ' invite you to register' : 'Register' }}
                            </h1>

                            <label for="firstname"><b>Full name</b></label>
                            <input type="hidden" name="ref" value="{{ isset($ref) ? ucwords($ref->id) : '' }}">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <input type="text" placeholder="Enter First Name" name="fname" required> --}}

                            {{-- <label for="lastname"><b>Last Name</b></label>
                      <input type="text" placeholder="Enter Last Name" name="lname" required> --}}

                            <label for="email"><b>Email</b></label>
                            {{-- <input type="email" placeholder="Enter Email" name="email" required> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="phonenumber"><b>Phone Number</b></label>
                            {{-- <input type="number" placeholder="Enter Phone Number" name="pname" required> --}}
                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="psw"><b>Password</b></label>
                            {{-- <input type="password" placeholder="Enter Password" name="psw" required> --}}
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="password-confirm"><b>Confirm Password</b></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">


                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="accept" name="accept">by click this
                                    box you have agreed with our <a href="#tModal" data-toggle="modal">terms and
                                        conditions</a>
                                </label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" id="register" disabled class="btn btn-block btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p>
                            Or Click <a href="{{ route('login') }}" style="color: blue;"> here</a> to Login

                        </p>
                    </div>
                </div>
                <div class="offset-3-lg"></div>
            </div>
        </div>
    </section>


@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#accept").on('change', function() {
                // var accept = $(this).v;
                // alert(accept);
                if ($(this).prop('checked')) {
                    $("#register").removeAttr("disabled")
                } else {
                    $("#register").attr("disabled", 'true')
                }
            })
        })
    </script>

@endsection
