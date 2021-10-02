@extends('users.investor.layout.app')
@section('title', 'Coins')
@section('content')
<div class="container my-2 p-2">
    <div class="card">
        <div class="card-header p-4">Available coins</div>
    <div class="card-body p-2">
        <div class="card-columns">

            @forelse ($coins as $coin)



            <a href="{{ route('order-coin', $coin->id) }}" class="text-dark">
            <div class="card shadow-box">
                <div class="card-body text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="{{$coin->getMedia('coin-avatar')->first()->getFullUrl() }}" class="card-img" alt="">
                            </div>
                            <div class="col">
                                <h6>{{ $coin->name }}</h6>
                                <h4> <span class=" mdi mdi-currency-ngn "></span> {{ number_format($coin->price, 2, '.', ',') }} </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </a>
            @empty
            <h3>No coins available at moment</h3>

            @endforelse

        </div>
    </div>
</div>
@endsection


