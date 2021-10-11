@if (date("Y-m-d : H:s:i") >= $inv->end_date)
@extends('users.admin.layout.app')
@section('title', 'Withdraw request processing')
@section('style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h4 class="text-center p-3 bg-dark text-white font-weight-bold">Withdraw request</h4>

                    <div class="card-header">
                    </div>
                    <div id="accordion">
                        <div class="collapse show" id="details" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <h3 class="col ">Withdraw type</h3>
                                    <h3 class="col font-weight-bold">{{ ucwords($withdraw->type) }}</h3>
                                </div>
                                <hr>
                                {{--  @if ($withdraw->type=="coin")  --}}


                                <div class="row">
                                    <h3 class="col ">Wrap Quantity</h3>
                                    <h3 class="col font-weight-bold">{{ $inv->quantity+$inv->revenue }}</h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <h3 class="col ">Wrap Amount</h3>
                                    <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($inv->coin->price*($inv->quantity+$inv->revenue), 2, '.', ',') }}</h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <h3 class="col ">Account number</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->account_number }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account name</h3>
                                    <h3 class="col font-weight-bold">{{$withdraw->user->account_name }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Bank name</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->bank->name }}</h3>
                                </div>
                                <hr>
                                {{--  <form action="{{ route('withdrawer-request.store') }}" method="post">  --}}
                                    {{--  @csrf  --}}
                                    {{--  <input type="hidden" name="invid" value="{{ $inv->id }}">  --}}
                                    
                                    <a href="#paymentmethod" class="btn btn-lg btn-block mt-3 font-weight-bold btn-success" data-toggle="collapse" type="">Procceed to withdraw</a>
                                {{--  </form>  --}}
                            </div>
                        </div>
                        <div class="collapse" data-parent="#accordion" id="paymentmethod">

                                <div class="card-body">
                                    <h2 class="text-center font-weight-bold">Payment method</h2>
                                    <hr>
                                    <div class="card-footer">
                                        <a href="#paystack" data-toggle="collapse" class="btn btn-primary stretched-link m-2">Paystack</a>
                                        <a href="#transfer" data-toggle="collapse" class="ml-auto btn btn-primary stretched-link m-2 ">Transfer</a>
                                    </div>
                                </div>
                        </div>

                        <div class="collapse" data-parent="#accordion" id="transfer">

                            <div class="card-body">
                                <h2 class="text-center font-weight-bold">Account detail</h2>
                               <hr>
                               <div class="row">
                                <h3 class="col ">Wrap Amount</h3>
                                <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($inv->coin->price*($inv->quantity+$inv->revenue), 2, '.', ',') }}</h3>
                            </div>
                            <hr>
                                <div class="row">
                                    <h3 class="col ">Account number</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->account_number }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account name</h3>
                                    <h3 class="col font-weight-bold">{{$withdraw->user->account_name }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Bank name</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->bank->name }}</h3>
                                </div>
                                <hr>
                                <div class="card-footer text-center">
                                    <a href="{{ route('payment-transfer', [$withdraw->id, 'pending']) }}" class="btn btn-warning btn-rounded">Pending</a>
                                    <a href="{{ route('payment-transfer', [$withdraw->id, 'failed']) }}" class="btn btn-danger btn-rounded">Failed</a>
                                    <hr>
                                    <a href="{{ route('payment-transfer', [$withdraw->id, 'processing']) }}" class="btn btn-info btn-rounded">Processing</a>
                                    <a href="{{ route('payment-transfer', [$withdraw->id, 'success']) }}" class="btn btn-success btn-rounded">Success</a>    
                                </div>
                               
                            </div>
                    </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>


    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // $(".select2").select2();

            // alert('hello');
            $("#withdraw").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    "targets": [2, 3]
                }]
            });


        })
    </script>
@endsection
@else
{{-- No permitted --}}
<script>
    window.location = "{{ route('admindashboard') }}";
</script>
@endif
