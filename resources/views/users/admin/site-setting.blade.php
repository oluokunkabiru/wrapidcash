@extends('users.admin.layout.app')
@section('title', 'Site configuration setting')
@section('style')

@endsection


@section('content')
    <div class="container">

        <div class="card">
            <h4 class="text-center p-3 bg-dark text-white font-weight-bold">Site configuration</h4>

            <div class="card-header">

            </div>
            <form action="{{ route('site-configuration.update', appSettings()->id) }}" enctype="multipart/form-data" method="post">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Site name</b></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ ucwords(appSettings()->name), old('name') }}" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Contact phone</b></label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ ucwords(appSettings()->phone), old('phone') }}" required
                                autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Site Email</b></label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ ucwords(appSettings()->email), old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h3 class="text-center font-weight-bold my-2 col-12">Investment setting</h3>
                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Referral bonus (%)</b></label>
                            <input id="refbonus" type="number" class="form-control @error('refbonus') is-invalid @enderror"
                                name="refbonus" value="{{ ucwords(appSettings()->referral_percentage * 100), old('refbonus') }}"
                                required autocomplete="refbonus" autofocus>

                            @error('refbonus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Investment daily bonus (%)</b></label>
                            <input id="dbonus" type="number" class="form-control @error('dbonus') is-invalid @enderror"
                                name="dbonus" value="{{ ucwords(appSettings()->investment_percentage * 100), old('dbonus') }}"
                                required autocomplete="dbonus" autofocus>

                            @error('dbonus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Investing charge (%)</b></label>
                            <input id="icharge" type="number" class="form-control @error('icharge') is-invalid @enderror"
                                name="icharge" value="{{ ucwords(appSettings()->investment_charges * 100), old('icharge') }}"
                                required autocomplete="icharge" autofocus>

                            @error('icharge')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Withdrawal charges (%)</b></label>
                            <input id="wcharge" type="number" class="form-control @error('wcharge') is-invalid @enderror"
                                name="wcharge" value="{{ ucwords(appSettings()->withdraw_charges * 100), old('wcharge') }}"
                                required autocomplete="wcharge" autofocus>

                            @error('wcharge')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Investment duration (days)</b></label>
                            <input id="duration" type="number" class="form-control @error('duration') is-invalid @enderror"
                                name="duration" value="{{ ucwords(appSettings()->investment_duration), old('duration') }}"
                                required autocomplete="duration" autofocus>

                            @error('duration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="firstname"><b>Referral min withdraw (<span class="mdi mdi-currency-ngn"></span>
                                    )</b></label>
                            <input id="rwmax" type="number" class="form-control @error('rwmax') is-invalid @enderror"
                                name="rwmax" value="{{ ucwords(appSettings()->referral_max_withdraw), old('rwmax') }}"
                                required autocomplete="rwmax" autofocus>

                            @error('rwmax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <h3 class="text-center font-weight-bold my-2 col-12">About</h3>
                        <div class="col-md-6">
                            <label for=""><b>Current logo</b></label><br>
                            <img src="{{ asset('front/images/admin.jpg') }}" style="width: 100px" class="card-img" alt="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""><b>Logo</b></label>
                            <input type="file" class="form-control-file border @error('logo') is-invalid @enderror" name="logo">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="comment font-weight-bold"> <b>Contact address:</b> </label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="5"
                                id="comment">{{ ucwords(appSettings()->address), old('address') }}</textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="comment font-weight-bold"> <b>About us:</b> </label>
                            <textarea class="form-control @error('about') is-invalid @enderror" name="about" rows="5"
                                id="comment">{{ ucwords(appSettings()->about), old('about') }}</textarea>
                            @error('about')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="comment font-weight-bold"> <b>Our Vision:</b> </label>
                            <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" rows="5"
                                id="comment">{{ ucwords(appSettings()->vision), old('vision') }}</textarea>
                            @error('vision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="comment font-weight-bold"> <b>Our mission:</b> </label>
                            <textarea class="form-control @error('mission') is-invalid @enderror" name="mission" rows="5"
                                id="comment">{{ ucwords(appSettings()->mission), old('mission') }}</textarea>
                            @error('mission')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="container col-12"> --}}




                        {{-- </div> --}}
                    </div>
                    <div class="card-footer p-4 my-2">
                        <button class="btn btn-rounded btn-success float-righ font-weight-bold mr-2">Update site</button>
                    </div>
            </form>
        </div>


    </div>
@endsection

@section('script')

@endsection
