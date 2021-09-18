@extends('users.investor.layout.app')
@section('title', 'Coin detail and order')

@section('content')
    <div class="container p-4 my-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center font-weight-bold">Coin details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('front-asset/images/coins.jpg') }}" class="card-img" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted">Quantity</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark">3434</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted">Price</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark"><span class="mdi mdi-currency-ngn "></span> 3434</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted">Daily percentage</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark"><span class="mdi mdi-percent "></span> 3434</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted">End price</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark"><span class="mdi mdi-currency-ngn "></span> 3434</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('pay') }}" method="post"  accept-charset="UTF-8" class="form-horizontal" role="form">
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="phone" value="{{ Auth::user()->phone }}">
                    {{-- required --}}
                  @csrf
                    <input type="hidden" name="orderID" value="{{ "KOADIT_".Auth::user()->phone"_".date() }}">
                    <input type="hidden" name="amount" value="{{ 20000 * 100 }}"> {{-- required in kobo --}}
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency" value="NGN">
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['phone' => Auth::user()->phone ,'coinid'=> 23]) }}" >
                    {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                    {{-- {{ csrf_field() }} works only when using laravel 5.1, 5.2 --}}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                    <button type="submit" class="btn btn-block btn-outline-light btn-rounded text-uppercase font-weight-bold p-2" style="border: solid 2px #601D43; color:#601D43; border-radius:20px">Pay with card</button>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection


