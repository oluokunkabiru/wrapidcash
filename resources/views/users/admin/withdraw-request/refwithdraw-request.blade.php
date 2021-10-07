@if ($withdraw->amount >= appSettings()->referral_max_withdraw )
@extends('users.admin.layout.app')
@section('title', 'Referral withdraw request processing')
@section('style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h4 class="text-center p-3 bg-dark text-white font-weight-bold">Referral Withdraw request</h4>

                    <div class="card-header">
                    </div>

                            <div class="card-body">


                                <div class="row">
                                    <h3 class="col ">Referral Amount</h3>
                                    <h3 class="col font-weight-bold"><span class=" mdi mdi-currency-ngn "></span>{{ number_format($withdraw->amount , 2, '.', ',') }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account number</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->account_number }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Account name</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->account_name }}</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <h3 class="col ">Bank name</h3>
                                    <h3 class="col font-weight-bold">{{ $withdraw->user->bank->name }}</h3>
                                </div>
                                <hr>
                                <form action="{{ route('referral-withdraw-request') }}" method="post">
                                    @csrf
                                    <input type="text" value="{{ $withdraw->user->bank->code }}" name="bank_code">
                                    <input type="text" value="nuban" name="type">
                                    <input type="text" value="{{ $withdraw->user->account_number }}" name="account_number">
                                    <input type="text" value="{{ $withdraw->user->account_name }}" name="name">
                                    <input type="text" value="NGN" name="currency">
                                    <input type="hidden" name="investorid" value="{{ $withdraw->id }}">

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
