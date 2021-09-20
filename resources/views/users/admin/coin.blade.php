@extends('users.investor.layout.app')
@section('title', 'Coins')
@section('content')
<div class="container my-2 p-2">
    <div class="card">
        <div class="card-header p-4">Available coins</div>
    <div class="card-body p-2">
        <div class="card-columns">

            @for ($i = 0; $i < 10; $i++)


            <a href="{{ route('order-coin', $i) }}" class="text-dark">
            <div class="card shadow-box">
                <div class="card-body text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('front-asset/images/coins.jpg') }}" class="card-img" alt="">
                            </div>
                            <div class="col">
                                <h6>{{ $i }} Rash coin</h6>
                                <h4> <span class=" mdi mdi-currency-ngn "></span> 28835 </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </a>
            @endfor

        </div>
    </div>
</div>
@endsection


