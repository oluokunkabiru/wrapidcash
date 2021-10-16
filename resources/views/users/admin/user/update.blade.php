@extends('users.admin.layout.app')
@section('title', 'Profile update')
@section('content')
    <div class="container my-2 p-2">
        <div class="card">
            <div class="card-header p-4">
               <h3 class="font-weight-bold text-center">Profile settings</h3>
            </div>
            <div class="card-body p-2">
                <div class="dudu">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('users.update', Auth::user()->id) }}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="avatarset" value="{{ Auth::user()->getMedia('avatar')->first() ? "set" :"notset" }}">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Personale information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="firstname"><b>Full name</b></label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ ucwords(Auth::user()->name), old('name')  }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="email"><b>Email</b></label>
                                        {{-- <input type="email" placeholder="Enter Email" name="email" required> --}}
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ Auth::user()->email, old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="phonenumber"><b>Phone Number</b></label>
                                        {{-- <input type="number" placeholder="Enter Phone Number" name="pname" required> --}}
                                        <input id="phone" type="tel"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ Auth::user()->phone, old('phone') }}" required autocomplete="phone">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phonenumber"><b>Profie image</b></label>

                                        <input type="file" accept="image/*"  name="avatar" class="form-control-file border  @error('avatar') is-invalid @enderror">
                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <h4>Change password</h4>
                                    <small class="text-danger">Leave empty, if not change</small>
                                </div>
                                <div class="card-body">

                                    <div class="form-group ">
                                        <label for="psw"><b>Old password</b></label>
                                        {{-- <input type="password" placeholder="Enter Password" name="psw" required> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword">

                                        @error('oldpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="psw"><b>New password</b></label>
                                        {{-- <input type="password" placeholder="Enter Password" name="psw" required> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group ">
                                        <label for="password-confirm"><b>Confirm Password</b></label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation">

                                    </div>
                                </div>
                                <button type="submit"  class="btn font-weight-bold p-3 btn-primary text-uppercase">
                                    {{ __('update profile') }}
                                </button>
                            </div>


                        </div>




                    </form>

                </div>
            </div>
        </div>
    @endsection


    @section('script')
        <script>
            $(document).ready(function() {
                $(".select2").select2();



            })



            })
        </script>
    @endsection
