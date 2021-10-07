@extends('users.admin.layout.app')
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
                @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success ! </strong> {{ session('success') }}
                </div>
                @endif
                <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-ta" data-toggle="tab" href="#overview" role="tab"
                                aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sales-ta" data-toggle="tab" href="#sales" role="tab"
                                aria-controls="sales" aria-selected="false">Pending investment</a>
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
                                               >Profile details


                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ Auth::user()->getMedia('avatar')->first()?Auth::user()->getMedia('avatar')->first()->getFullUrl():asset('images/avatar/img_avatar3.png') }}" class="card-img"
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



                                        </div>
                                        <div class="toast" data-autohide="true">
                                            <div class="toast-body">
                                                Copied <span id="toast" class="font-weight-bold mx-1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 grid-margin stretch-card jumbotron">
                                    <div class="d-flex flex-wrap justify-content-xl-between">
                                        <div
                                            class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-account-multiple  icon-lg mr-3 text-primary"></i>
                                            <div class="card-body d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total Users</small>
                                                <h2 class="mb-0 d-inline-block">
                                                    {{ count($users) }}
                                                </h2>

                                            </div>
                                        </div>

                                        <div
                                            class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-currency-ngn  icon-lg mr-3 text-success"></i>
                                            <div class="card-body d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Total payout</small>
                                                <h2 class="mb-0 d-inline-block">
                                                    {{ count($with) }}
                                                </h2>

                                            </div>
                                        </div>

                                        <div
                                            class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-chart-line icon-lg mr-3 text-info"></i>
                                            <div class="card-body d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Active investment</small>
                                                <h2 class="mb-0 d-inline-block">
                                                    {{ count($ainvs) }}
                                                </h2>

                                            </div>
                                        </div>

                                        <div
                                            class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-cash-100  icon-lg mr-3 text-danger"></i>
                                            <div class="card-body d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Withdraw request</small>
                                                <h2 class="mb-0 d-inline-block">
                                                    {{ count($withr) }}
                                                </h2>

                                            </div>
                                        </div>

                                        <div
                                        class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class=" mdi mdi-comment-alert   icon-lg mr-3 text-warning"></i>
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Pending investment</small>
                                            <h2 class="mb-0 d-inline-block">
                                                {{ count($pinvs) }}
                                            </h2>

                                        </div>
                                    </div>

                                    <div
                                        class="card d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="  mdi mdi-coin   icon-lg mr-3 text-muted"></i>
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Total coin plan</small>
                                            <h2 class="mb-0 d-inline-block">
                                                {{ count($coins) }}
                                            </h2>

                                        </div>
                                    </div>






                                    </div>

                                </div>



                            </div>
                        </div>





                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                            @forelse ($pinvs as $inv)


                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Payment date</small>
                                            <h5 class="mb-0 d-inline-block">

                                                {!! date('d, M Y', strtotime($inv->created_at)) !!}
                                            </h5>

                                        </div>
                                    </div>
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-cart icon-lg mr-3 text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Coin</small>
                                            <h5 class="my-0 d-inline-block">
                                              Plan :  <b>{!! $inv->coin->name !!}</b>

                                            </h5>
                                            <hr>
                                            <h5 class="my-0">
                                               Quantity : <b>{{ $inv->quantity }}</b>
                                            </h5>
                                            <hr>
                                            <h5>Amount : </h5> <b><span class="mdi mdi-currency-ngn" >{{ number_format($inv->invest_amount, 2, '.', ',') }}</span></b>


                                        </div>
                                    </div>

                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-receipt mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Payment Evidence</small>
                                            <a href="{{ $inv->getMedia('evidence')->first()->getFullUrl() }}" target="_blank"><img src="{{ $inv->getMedia('evidence')->first()->getFullUrl() }}" style="width: 100px" alt=""></a>

                                        </div>
                                    </div>

                                    <a href="{{ route('investment-progress.edit', $inv->id) }}">
                                        <div
                                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <i class=" mdi mdi-repeat  mr-3 icon-lg text-warning"></i>
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Action</small>
                                                <h5 class="mr-2 mb-0 investmentprogress">Proceed to confirm </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @empty
                                    <h3 class="text-center text-danger">No Pending order</h3>

                            @endforelse
                        {{-- </div> --}}
                    </div>




                    <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchases-tab">
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
                                                            <h4 class="text-danger">No active transaction</h4>
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
