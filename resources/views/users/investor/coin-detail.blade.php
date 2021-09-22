@extends('users.investor.layout.app')
@section('title', 'Coin detail and order')

@section('content')
    <div class="container p-4 my-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="accordion">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success! </strong> {{ session('success') }}
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success! </strong> {{ session('delete') }}
                    </div>
                @endif


                @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong style="font-size:14px;">Oops!
                            {{ 'Kindly rectify below errors' }}</strong><br />
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif
                    <div  id="card" class="collapse show" data-parent="#accordion">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-bold">Coin details</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}" class="card-img" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Quantity</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark">{{ $coin->quantity }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Price</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Daily Profit</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn"></span> {{ number_format($coin->price*0.0333, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">End price</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price*2, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>

                                         <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Transaction charge</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price*0.03, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>

                                         <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Amount to pay</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price+($coin->price*0.03), 2, '.', ',') }}</h6>
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
                            <input type="hidden" name="orderID" value="{{ "KOADIT_".Auth::user()->phone."_".time() }}">
                            <input type="hidden" name="amount" value="{{ ($coin->price+($coin->price*0.03)) * 100 }}"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['phone' => Auth::user()->phone ,'coinid'=> $coin->id]) }}" >
                            {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            {{-- {{ csrf_field() }} works only when using laravel 5.1, 5.2 --}}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                            <button type="submit" class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2" >Pay with card </button>
                        </form>
                        <a href="#transfer" data-toggle="collapse"  class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2" >Pay with transfer</a>

                    </div>
                    <div  id="transfer" class="collapse" data-parent="#accordion">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-bold">Coin details</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="text-center">Pay by transfer</h2>
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Bank name</th>
                                            <th>Account Number</th>
                                            <th>Account name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($banks as $bank)
                                        <tr>
                                            <td>{{ $bank->bank }}</td>
                                            <td>{{ $bank->account_number }}</td>
                                            <td>{{ $bank->account_name }}</td>
                                        </tr>
                                        @empty
                                        <tr>

                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                                <div class="row my-3">

                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Price</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Transaction charge</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price*0.03, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>

                                         <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Amount to pay</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span> {{ number_format($coin->price+($coin->price*0.03), 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('investment.store') }}" enctype="multipart/form-data" method="post"  accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <div class="jumbotron">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Sender name (if difference):</label>
                                            <input type="text"  name="name" value="{{ ucwords(Auth::user()->name) }}"
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @csrf
                                        <input type="hidden" name="coinid" value="{{ $coin->id }}">

                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Evidence of payment:</label>
                                            <input type="file" class="form-control-file border @error('evidence') is-invalid @enderror"
                                                id="evidence" name="evidence">
                                            @error('evidence')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                            </div>
                        </div>

                            <button type="submit" class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2" >Upload evidence of payment </button>
                        </form>

                        <a href="#card" data-toggle="collapse"  class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2" >Pay with card</a>

                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection


