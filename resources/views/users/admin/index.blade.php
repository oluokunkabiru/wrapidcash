@extends('users.admin.layout.app')
@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Welcome, {{ ucwords(Auth::user()->name) }}</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success ! </strong> {{ session('success') }}
                    </div>
                @endif

                @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Deleted ! </strong> {{ session('delete') }}
                    </div>
                @endif

                @if (session('warning'))
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success ! </strong> {{ session('warning') }}
                    </div>
                @endif

                <div class="card-body dashboard-tabs p-0">
                    <ul class="nav nav-tabs px-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-ta" data-toggle="tab" href="#overview" role="tab"
                                aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="purchases-ta" data-toggle="tab" href="#purchase" role="tab"
                                aria-controls="purchases" aria-selected="false">News Letter</a>
                        </li>
                    </ul>
                    <div class="tab-content py-0 px-0">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                            <div class="row">
                                <div class="col-md-7 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase" id="pro">Profile details


                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ Auth::user()->getMedia('avatar')->first()
    ? Auth::user()->getMedia('avatar')->first()->getFullUrl()
    : asset('images/avatar/img_avatar3.png') }}"
                                                        class="card-img" alt="">
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

                        <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchases-tab">
                            <div class="d-flex flex-wrap justify-content-xl-between">
                                <div class="row">
                                    <div class="col-md-12 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-title">News Flash</p>
                                                <div class="table-responsive">
                                                    <a href="#addnewsletter" data-toggle="modal" class="btn btn-info"> Add
                                                        news flash</a>
                                                    <table id="transaction" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>News letter</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        @php
                                                            $sn = 0;
                                                        @endphp
                                                        <tbody>
                                                            @forelse ($news as $new)
                                                                <tr>
                                                                    <td>{{ ++$sn }}</td>
                                                                    <td>{{ $new->news }}</td>
                                                                    <td>{{ $new->created_at }}</td>
                                                                    <td>
                                                                        @if ($new->status == 'active')
                                                                            <span
                                                                                class="badge badge-pill badge-success">{{ ucwords($new->status) }}</span>
                                                                        @else
                                                                            <span
                                                                                class="badge badge-pill badge-danger">{{ ucwords($new->status) }}</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="row">
                                                                            {{--  --}}
                                                                            <div class="col">
                                                                                @if ($new->status == 'active')
                                                                                    <a href="#disabled"
                                                                                        status="{{ ucwords($new->status) }}"
                                                                                        durl="{{ route('news-flash-disabled', $new->id) }}"
                                                                                        data-toggle="modal"
                                                                                        name="{{ $new->news }}">
                                                                                        <span
                                                                                            class="badge badge-pill badge-info"><i
                                                                                                class="mdi mdi-shuffle-disabled "
                                                                                                data-toggle="tooltip"
                                                                                                title="Disable user"></i></span>
                                                                                    </a>
                                                                                @else
                                                                                    <a href="#enabled"
                                                                                        status="{{ ucwords($new->status) }}"
                                                                                        eurl="{{ route('news-flash-enabled', $new->id) }}"
                                                                                        data-toggle="modal"
                                                                                        name="{{ $new->news }}">
                                                                                        <span
                                                                                            class="badge badge-pill badge-warning"><i
                                                                                                class="mdi mdi-block-helper"
                                                                                                data-toggle="tooltip"
                                                                                                title="Enable user"></i></span>
                                                                                    </a>
                                                                                @endif

                                                                            </div>

                                                                            <div class="col">
                                                                                <a href="#edit"
                                                                                    status="{{ ucwords($new->status) }}"
                                                                                    data-toggle="modal"
                                                                                    news="{{ $new->news }}"
                                                                                    edit ="{{ route('news-flash.update', $new->id) }}"
                                                                                    >
                                                                                    <span
                                                                                        class="badge badge-pill badge-primary"><i
                                                                                            class="mdi mdi-tooltip-edit  "
                                                                                            data-toggle="tooltip"
                                                                                            title="Edit news flash"></i></span>
                                                                                </a>
                                                                            </div>

                                                                            <div class="col">
                                                                                <a href="#delete"
                                                                                    status="{{ ucwords($new->status) }}"
                                                                                    data-toggle="modal"
                                                                                    name="{{ $new->news }}"
                                                                                    delete ="{{ route('news-flash.destroy', $new->id) }}"

                                                                                    >

                                                                                    <span
                                                                                        class="badge badge-pill badge-danger"><i
                                                                                            class=" mdi mdi-delete-forever "
                                                                                            data-toggle="tooltip"
                                                                                            title="View user details"></i></span>
                                                                                </a>
                                                                            </div>

                                                                        </div>
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


    <div class="modal" id="addnewsletter">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Add news flash</h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('news-flash.store') }}" method="POST">

                    <!-- Modal body -->
                    <div class="modal-body">


                        {{ csrf_field() }}


                        <!-- Modal footer -->
                        <div class="form-group">
                            <label for="usr">News:</label>
                            <input id="username" type="text" class="form-control @error('news') is-invalid @enderror"
                                name="news" value="{{ old('news') }}" required autocomplete="news">
                            @if ($errors->has('news'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('news') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger float-left mx-2" data-dismiss="modal">Cancel</button>
                        <button id="addcategorybtn" type="submit" class="btn  btn-success text-uppercase">Add
                            flash</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="disabled">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Disabled news flash</h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                    <div class="modal-footer">
                        <button class="btn btn-success float-left mx-2" data-dismiss="modal">Cancel</button>
                        <a href="" id="disablednew" class="btn  btn-warning text-uppercase">Disabled
                            flash</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="enabled">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Enable news flash</h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger float-left mx-2" data-dismiss="modal">Cancel</button>
                        <a href="" id="enablednew" class="btn  btn-success text-uppercase">enabled
                            flash</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Delete news flash</h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                    <div class="modal-footer">
                        <form id="deletenewsform"  method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-success float-left mx-2" data-dismiss="modal">Cancel</button>
                        <button  class="btn  btn-danger text-uppercase">Delete
                            flash</button>
                        </form>

                    </div>

                </form>
            </div>
        </div>
    </div>


    <div class="modal" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Edit news flash</h4>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <form id="edit-news-form"  method="POST">

                    <!-- Modal body -->
                    <div class="modal-body">


                        {{ csrf_field() }}
                        @method('PUT')

                        <!-- Modal footer -->
                        <div class="form-group">
                            <label for="usr">News:</label>
                            <input id="news" type="text" class="form-control @error('news') is-invalid @enderror"
                                name="news" value="{{ old('news') }}" required autocomplete="news">
                            @if ($errors->has('news'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('news') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger float-left mx-2" data-dismiss="modal">Cancel</button>
                        <button id="addcategorybtn" type="submit" class="btn  btn-success text-uppercase">Edit
                            flash</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // $(".select2").select2();

            // alert('hello');
            $("#transaction").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });

            $('#edit').on('show.bs.modal', function(e) {

                var news = $(e.relatedTarget).attr('news');
                var editurl = $(e.relatedTarget).attr('edit');
                $("#news").val(news);
                $("#edit-news-form").attr("action", editurl);
            })

            $('#disabled').on('show.bs.modal', function(e) {
            var editurl = $(e.relatedTarget).attr('durl');
            $("#disablednew").attr("href", editurl);
            })
            $('#enabled').on('show.bs.modal', function(e) {
            var editurl = $(e.relatedTarget).attr('eurl');
            $("#enablednew").attr("href", editurl);
            })
            $('#delete').on('show.bs.modal', function(e) {
            var editurl = $(e.relatedTarget).attr('delete');
            $("#deletenewsform").attr("action", editurl);
            })



        })
    </script>
@endsection
