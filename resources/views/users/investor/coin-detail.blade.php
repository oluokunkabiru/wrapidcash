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
                    <div id="card" class="collapse show" data-parent="#accordion">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-bold">Coin details</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}"
                                            class="card-img" alt="">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">  <b>Quantity</b> </span>
                                                </div>
                                                <input type="number" value="1" step="1" id="qty" class="form-control">
                                              </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Name</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark">{{ $coin->name }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Price</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                    {{ number_format($coin->price, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Transaction charge</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                    <span id="dcharge">{{ number_format($coin->price * appSettings()->investment_charges, 2, '.', ',') }}</span>

                                                </h6>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Amount to pay</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                    <span id="damount">{{ number_format($coin->price + $coin->price * appSettings()->investment_charges, 2, '.', ',') }}</span>

                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $metadata = [
                                'coinid' => $coin->id,
                                'qty' => 1,
                                'custom_fields' => [
                                    [
                                        'display_name' => 'Investor name',
                                        'variable_name' => 'name',
                                        'value' => Auth::user()->name,
                                    ],
                                    [
                                        'display_name' => 'Phone Number',
                                        'variable_name' => 'phone',
                                        'value' => Auth::user()->phone,
                                    ],
                                    [
                                        'display_name' => 'Coin Quantity',
                                        'variable_name' => 'Quantity',
                                        'value' => 1,
                                    ],
                                    [
                                        'display_name' => 'Coin Name',
                                        'variable_name' => 'coin' ,
                                        'value' => $coin->name,
                                    ],
                                    [
                                        'display_name' => 'Investment status',
                                        'variable_name' => 'status',
                                        'value' => 'Active',
                                    ],
                                ],
                            ];

                            $customer = [
                                'customer' => [
                                    'email' => Auth::user()->email,
                                    'phone' => Auth::user()->phone,
                                    'first_name' => Auth::user()->name,
                                    'last_name' => '',
                                ],
                            ];
                            // print_r($customer)
                        @endphp
                        <form action="{{ route('pay') }}" method="post" accept-charset="UTF-8" class="form-horizontal"
                            role="form">
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="first_name" value="{{ ucwords(Auth::user()->name) }}">
                            <input type="hidden" name="customer" value="{{ json_encode($customer) }}">
                            <input type="hidden" name="phone" value="{{ Auth::user()->phone }}">
                            {{-- required --}}
                            @csrf
                            <input type="hidden" name="reference" value="{{ 'KOADIT_' . Auth::user()->phone . '_' . time() }}">
                            <input type="hidden" id="pamount" name="amount" value="{{ ($coin->price + $coin->price * appSettings()->investment_charges) * 100 }}">
                            {{-- required in kobo --}}
                            <input type="hidden" id="pquantity" name="quantity" value="1">
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" id="metadata" name="metadata" value="{{ json_encode($metadata) }}">
                            {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            {{-- <input type="hidden" name="" value="{{ Paystack::genTranxRef() }}"> required --}}
                            {{-- {{ csrf_field() }} works only when using laravel 5.1, 5.2 --}}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                            <button type="submit"
                                class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2">Pay
                                with card </button>
                        </form>
                        <a href="#transfer" data-toggle="collapse"
                            class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2">Pay
                            with transfer</a>

                    </div>
                    <div id="transfer" class="collapse" data-parent="#accordion">
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
                                        @php
                                            $i=0
                                        @endphp
                                        @forelse ($banks as $bank)
                                        {{ $i++ }}
                                        <tr>
                                                <td>{{ $bank['bank'] }}</td>
                                                <td>{{ $bank['account_number'] }}</td>
                                                <td>{{ $bank['account_name'] }}</td>
                                            </tr>
                                        @empty
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
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                    {{ number_format($coin->price, 2, '.', ',') }}</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Transaction charge</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                   <span id="ccharge">{{ number_format($coin->price * appSettings()->investment_charges, 2, '.', ',') }}</span> </h6>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="text-muted">Amount to pay</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-dark"><span class="mdi mdi-currency-ngn "></span>
                                                   <span id="camount">{{ number_format($coin->price + $coin->price * appSettings()->investment_charges, 2, '.', ',') }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('investment.store') }}" enctype="multipart/form-data"
                                    method="post" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <div class="jumbotron">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Sender name (if difference):</label>
                                            <input type="text" name="name" value="{{ ucwords(Auth::user()->name) }}"
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        @csrf
                                        <input type="hidden" name="coinid" value="{{ $coin->id }}">
                                        <input type="hidden" id="cquantity" name="quantity" value="1">

                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Evidence of payment:</label>
                                            <input type="file"
                                                class="form-control-file border @error('evidence') is-invalid @enderror"
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

                        <button type="submit"
                            class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2">Upload
                            evidence of payment </button>
                        </form>

                        <a href="#card" data-toggle="collapse"
                            class="btn btn-block btn-outline-light btn-rounded btn-primary text-uppercase font-weight-bold p-2 my-2">Pay
                            with card</a>

                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $(document).on('change', '#qty', function() {
                var qty = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type: 'POST',
                    url: '{{ route('quantity-pricing') }}',
                    data: 'id={{ $coin->id }}'+"&qty="+qty,
                    success: function(data) {
                        var transaction = JSON.parse(data);
                        // console.log(resp.quantity)
                        // console.log(resp)
                        $("#dcharge, #ccharge").text(transaction.charge)
                        $("#damount, #camount").text(transaction.amount)
                        $("#metadata").val(transaction.metadata)
                        $("#pquantity, #cquantity").val(transaction.quantity)
                        // $("").val(transaction.quantity)
                        console.log(transaction.metadata)

                        // if (resp.account_name !=null) {
                        //     // alert("no null");
                        //     $("#submit").removeAttr("disabled");
                        //     $("#accountname").removeAttr("disabled");
                        //     $("#accountname").val(resp.account_name)
                        //     }else{
                        //         // alert(resp.message);
                        //         $("#invalidaccountnumber").text(resp.message)
                        //         $("#accountnumber").attr("disabled", 'true')
                        //         $("#submit").attr("disabled", 'true')
                        //     }
                            // alert(resp.message);
                        // console.log(resp.message)
                        // $("#zone").html(data)
                    }
                })
            })
        })
    </script>
@endsection

