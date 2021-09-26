@extends('users.investor.layout.app')
@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Welcome back,{{ ucwords(Auth::user()->name) }}</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-ta" data-toggle="tab" href="#overview" role="tab"
                                aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sales-ta" data-toggle="tab" href="#sales" role="tab"
                                aria-controls="sales" aria-selected="false">Active investment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="purchases-ta" data-toggle="tab" href="#purchase" role="tab"
                                aria-controls="purchases" aria-selected="false">Recent transactions</a>
                        </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                            <div class="row">
                                <div class="col-md-7 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase" id="pro"
                                                onload="countdown(this.id  ,'dgdfgdfgdfgdfg')">Profile details


                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('images/admin.jpg') }}" class="card-img"
                                                        alt="">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h5 class="mdi mdi-account "></h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5 class="text-dark font-weight-bold">
                                                                {{ ucwords(Auth::user()->name) }}</h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h5 class=" mdi mdi-email  "></h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5 class="text-dark font-weight-bold">
                                                                {{ Auth::user()->email }}</h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h5 class="mdi mdi-phone-outgoing  "></h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5 class="text-dark font-weight-bold">
                                                                {{ Auth::user()->phone }}</h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h5 class=" mdi mdi-gender-transgender  "></h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5 class="text-dark font-weight-bold">Gender</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('investor-referral', $investor->username) }}">{{ route('investor-referral', $investor->username) }}
                                            </a>
                                            <p class=" mdi mdi-content-copy " onclick="fileCopy(this.id)"
                                                id="{{ route('investor-referral', $investor->username) }}">
                                            </p>
                                        </div>
                                        <div class="toast" data-autohide="true">
                                            <div class="toast-body">
                                                Copied <span id="toast" class="font-weight-bold mx-1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title">Investment balance</p>
                                            <h1><span class=" mdi mdi-currency-ngn "></span>
                                                {{ number_format($investor->balance, 2, '.', ',') }}</h1>
                                            <hr>
                                            <p class="card-title">Referral balance</p>
                                            <h1><span class=" mdi mdi-currency-ngn "></span>
                                                {{ number_format($investor->referra_bonus, 2, '.', ',') }}</h1>
                                            <hr>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>





                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                            @forelse ($invs as $inv)


                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Investment start</small>
                                            <h5 class="mb-0 d-inline-block">
                                                {{ $inv->end_date ? date('d, M Y', strtotime($inv->invest_date)) : 'Not yet approved' }}
                                            </h5>

                                        </div>
                                    </div>
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Investment end</small>
                                            <h5 class="mb-0 d-inline-block">
                                                {{ $inv->end_date ? date('d, M Y', strtotime($inv->end_date)) : 'Not yet approved' }}
                                            </h5>

                                        </div>
                                    </div>

                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-ngn mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Revenue</small>
                                            <h5 class="mr-2 mb-0">
                                                {{ number_format($inv->revenue, 2, '.', ',') }}</h5>
                                        </div>
                                    </div>

                                    <a href="{{ route('investment.show', $inv->id) }}">


                                        <div
                                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-repeat  mr-3 icon-lg text-warning"></i>
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Investment progress</small>
                                                <h5 class="mr-2 mb-0 investmentprogress"> View investment detail </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @empty
                                    <h3 class="text-center text-danger">No active investment at moment</h3>

                            @endforelse
                        {{-- </div> --}}
                    </div>




                    <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchases-tab">
                        <h4 class="text-center font-weight-bold my-2">Available coin plan</h4>
                        <div class="d-flex flex-wrap justify-content-xl-between">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title">Recent Transaction</p>
                                            <div class="table-responsive">
                                                <table id="transaction" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Action</th>
                                                            <th>Price</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $sn = 0;
                                                    @endphp
                                                    <tbody>
                                                        @forelse ($transactions as $transaction)
                                                            <tr>
                                                                <td>{{ ++$sn }}</td>
                                                                <td>{{ $transaction->action }}</td>
                                                                <td><span class=" mdi mdi-currency-ngn "></span>
                                                                    {{ number_format($transaction->price, 2, '.', ',') }}
                                                                </td>
                                                                <td>{{ $transaction->created_at }}</td>
                                                                <td>
                                                                    @if ($transaction->status == 'approved')
                                                                        <span
                                                                            class="badge badge-pill badge-success">{{ ucwords($transaction->status) }}</span>
                                                                    @else
                                                                        <span
                                                                            class="badge badge-pill badge-danger">{{ ucwords($transaction->status) }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                        @empty

                                                        @endforelse

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

@section('script')
    <script>
        function fileCopy(text) {
            // alert(text);
            var txt = $("<input>").val(text).appendTo("body").select();
            document.execCommand("copy");
            $("#toast").text(text);
            $('.toast').toast('show');

        }


        $(document).ready(function() {
            // $(".select2").select2();

            // alert('hello');
            $("#transaction").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });



        })
    </script>
@endsection
