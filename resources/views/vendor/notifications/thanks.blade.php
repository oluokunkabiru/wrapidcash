@extends('layouts.app')
@section('title', 'THANKS')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="font-weight-bold text-center my-1">Thanks for contact us</h1>

                    <p>
                        Thanks for contact us, your message have received
                    </p>
                    <p>
                        Our customer care will get back to you shortly
                    </p>
                  </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
{{--  @else
@php
    return redirect()->back();
@endphp
@endif  --}}
