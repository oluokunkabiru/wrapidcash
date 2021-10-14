@if (date("Y-m-d : H:s:i") >= $inv->end_date)
@extends('users.investor.layout.app')
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

                            <div class="card-body">
                                <div class="row">
                                    <h3 class="col ">Wrap coin plan</h3>
                                    <h3 class="col font-weight-bold">{{ ucwords($inv->coin->name) }}</h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <h3 class="col ">Wrap Quantity</h3>
                                    <h3 class="col font-weight-bold">{{ $inv->quantity+$inv->revenue }}</h3>
                                </div>
                                <hr>
                                    @php
                                    $totalInv =$inv->coin->price*($inv->quantity+$inv->revenue);
                                    $charges = $totalInv*appSettings()->withdraw_charges;
                                    $withdrawable = $totalInv-$charges;
                                    @endphp
                                <div class="row">
                                    <h3 class="col ">Wrap Amount</h3>
                                    <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($totalInv, 2, '.', ',') }}</h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <h3 class="col ">Withdraw Charges of <b>{{ appSettings()->withdraw_charges * 100 }}%</b></h3>
                                    <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($charges, 2, '.', ',') }}</h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <h3 class="col ">Withdrawable Amount </h3>
                                    <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($withdrawable, 2, '.', ',') }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account number</h3>
                                    <h3 class="col font-weight-bold">{{ Auth::user()->account_number }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account name</h3>
                                    <h3 class="col font-weight-bold">{{ Auth::user()->account_name }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Bank name</h3>
                                    <h3 class="col font-weight-bold">{{ Auth::user()->bank->name }}</h3>
                                </div>
                                <hr>
                                <form action="{{ route('withdrawer-request.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="invid" value="{{ $inv->id }}">

                                    <button class="btn btn-lg btn-block mt-3 font-weight-bold btn-success" type="submit">Procceed to withdraw</button>
                                </form>
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
    window.location = "{{ route('usersdashboard') }}";
</script>
@endif
