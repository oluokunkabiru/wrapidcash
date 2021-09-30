@extends('users.admin.layout.app')
@section('title', 'Manage coins and there prices')
@section('style')

@endsection


@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
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
                                <strong style="font-size:20px;">Oops!
                                    {{ 'Kindly rectify below errors' }}</strong><br />
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br />
                                @endforeach
                            </div>
                        @endif
                        <p class="card-title">Manage wrap coins and there prices</p>
                        <div class="table-responsive">
                            <a href="#addcoin" data-toggle="modal" class="btn btn-primary btn-rounded font-weight-bold"> Add
                                wrap coin</a>
                            <table id="transaction" class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total investors</th>
                                        <th>Icon</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $sn = 0;
                                @endphp
                                <tbody>
                                    @forelse ($coins as $coin)


                                        <tr>
                                            <td>{{ ++$sn }}</td>
                                            <td>{{ $coin->quantity }}</td>
                                            <td><i class=" mdi mdi-currency-ngn "></i>{{ $coin->price }}</td>
                                            <td> <span
                                                    class="badge badge-pill badge-success">{{ $coin->totalInvestor($coin->id) }}</span>
                                            </td>
                                            <td><img src="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}"
                                                    class="card-img rounded-circle" style="width: 50px" alt=""></td>
                                            <td>{{ $coin->created_at }}</td>
                                            <td>
                                                @if ($coin->status == 'active')
                                                    <span
                                                        class="badge badge-pill badge-success">{{ ucwords($coin->status) }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-danger">{{ ucwords($coin->status) }}</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="#editcoin" editurl="{{ route('wrap-coin.update', $coin->id) }}" data-toggle="modal" qty="{{ $coin->quantity }}" price="{{ $coin->price }}" img="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}">
                                                            <span class="badge badge-pill badge-success" data-toggle="tooltip" title="Edit wrap coin" ><i
                                                                    class="mdi mdi-tooltip-edit"></i></span>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        @if ($coin->status =="active")
                                                        <a href="#disabledcoin" status ="{{ ucwords($coin->status) }}" disableturl="{{ route('disabled-wrap-coin', $coin->id) }}" data-toggle="modal" qty="{{ $coin->quantity }}" price="{{ $coin->price }}" img="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}">
                                                            <span class="badge badge-pill badge-info"><i
                                                                    class="mdi mdi-shuffle-disabled " data-toggle="tooltip" title="Disable wrap coin"></i></span>
                                                        </a>
                                                        @else
                                                        <a href="#enabledcoin" status ="{{ ucwords($coin->status) }}" disableturl="{{ route('enabled-wrap-coin', $coin->id) }}" data-toggle="modal" qty="{{ $coin->quantity }}" price="{{ $coin->price }}" img="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}">
                                                            <span class="badge badge-pill badge-warning"><i
                                                                    class="mdi mdi-block-helper" data-toggle="tooltip" title="Enable wrap coin"></i></span>
                                                        </a>
                                                        @endif

                                                    </div>

                                                    <div class="col">
                                                        <a href="#viewcoin" status ="{{ ucwords($coin->status) }}" disableturl="{{ route('enabled-wrap-coin', $coin->id) }}" data-toggle="modal" qty="{{ $coin->quantity }}" price="{{ $coin->price }}" img="{{ $coin->getMedia('coin-avatar')->first()->getFullUrl() }}">
                                                            <span class="badge badge-pill badge-primary"><i
                                                                    class=" mdi mdi-eye  " data-toggle="tooltip" title="View Wrap details"></i></span>
                                                        </a>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                    @empty
                                        <h3 class="text-center font-weight-bold text-danger">No coins available at moment
                                        </h3>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-2"></div> --}}
        </div>

        <div class="modal" id="addcoin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase font-weight-bold">Add new wrap coin</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form action="{{ route('wrap-coin.store') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="avatarpreview"></div>
                            @csrf
                            <div class="form-group">
                                <label for="">Wrap Avatar:</label>
                                <input type="file" class="form-control-file border @error('avatar') is-invalid @enderror"
                                    id="avatar" name="avatar">
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Wrap Quantity:</label>
                                <input type="number" step="1" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="">Wrap Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class=" mdi mdi-currency-ngn "></i></span>
                                </div>
                                {{-- <label for="">Wrap Price</label> --}}
                                <input type="number" step="0.01" name="price"
                                    class="form-control @error('price') is-invalid @enderror">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn-primary">Add wrap coin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- edit --}}
        <div class="modal" id="editcoin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase font-weight-bold">update wrap coin</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <form id="updateform" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <img src="" style="width: 100px" class="card-img" id="uavatarpreview" alt="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Wrap Avatar:</label>
                                <input type="file" class="form-control-file border @error('avatar') is-invalid @enderror"
                                    id="uavatar" name="avatar">
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Wrap Quantity:</label>
                                <input type="number" step="1" id="qty" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="">Wrap Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class=" mdi mdi-currency-ngn "></i></span>
                                </div>
                                {{-- <label for="">Wrap Price</label> --}}
                                <input type="number" step="0.01" id="price" name="price"
                                    class="form-control @error('price') is-invalid @enderror">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn-primary">Update wrap coin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End edit --}}

           {{-- edit --}}
           <div class="modal" id="disabledcoin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase font-weight-bold">disabled wrap coin</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <img src=""class="card-img" id="davatarpreview" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="text-muted">Quantity</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark" id="dqty"></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Price</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark"><i class=" mdi mdi-currency-ngn"></i> <span id="dprice"></span></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Status</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-success" id="dstatus"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="" id="durl" class="btn btn-block btn-warning" >Disabled wrap coin</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End edit --}}

         {{-- edit --}}
         <div class="modal" id="enabledcoin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase font-weight-bold">Enabled wrap coin</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <img src=""class="card-img" id="eavatarpreview" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="text-muted">Quantity</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark" id="eqty"></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Price</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark"><i class=" mdi mdi-currency-ngn"></i> <span id="eprice"></span></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Status</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-danger" id="estatus"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="" id="eurl" class="btn btn-block btn-warning" >Enabled wrap coin</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End edit --}}

        {{-- edit --}}
        <div class="modal" id="viewcoin">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase font-weight-bold">wrap coin details</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <img src=""class="card-img" id="vavatarpreview" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="text-muted">Quantity</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark" id="vqty"></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Price</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-dark"><i class=" mdi mdi-currency-ngn"></i> <span id="vprice"></span></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col">
                                            <h3 class="text-muted">Status</h3>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-info" id="vstatus"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        {{-- End edit --}}
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // $(".select2").select2();
            $('[data-toggle="tooltip"]').tooltip()
            // alert('hello');
            $("#transaction").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });

            // update coin
            $('#editcoin').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var qty = $(e.relatedTarget).attr('qty');
                var price = $(e.relatedTarget).attr('price');
                var editurl = $(e.relatedTarget).attr('editurl');

                //   alert(facultyname)
                $("#price").val(price);
                $("#qty").val(qty);
                $("#uavatarpreview").attr("src", img);
                $("#updateform").attr("action", editurl);

            })


            $('#disabledcoin').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var qty = $(e.relatedTarget).attr('qty');
                var status = $(e.relatedTarget).attr('status');
                var price = $(e.relatedTarget).attr('price');
                var editurl = $(e.relatedTarget).attr('disableturl');

                //   alert(facultyname)
                $("#dprice").text(price);
                $("#dqty").text(qty);
                $("#dstatus").text(status);
                $("#davatarpreview").attr("src", img);
                $("#durl").attr("href", editurl);

            })

            $('#enabledcoin').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var qty = $(e.relatedTarget).attr('qty');
                var status = $(e.relatedTarget).attr('status');
                var price = $(e.relatedTarget).attr('price');
                var editurl = $(e.relatedTarget).attr('disableturl');

                //   alert(facultyname)
                $("#eprice").text(price);
                $("#eqty").text(qty);
                $("#estatus").text(status);
                $("#eavatarpreview").attr("src", img);
                $("#eurl").attr("href", editurl);

            })

            $('#viewcoin').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var qty = $(e.relatedTarget).attr('qty');
                var status = $(e.relatedTarget).attr('status');
                var price = $(e.relatedTarget).attr('price');

                //   alert(facultyname)
                $("#vprice").text(price);
                $("#vqty").text(qty);
                $("#vstatus").text(status);
                $("#vavatarpreview").attr("src", img);

            })



            function previewpassport(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatarpreview + img').remove();
                        $('#avatarpreview').after('<img src="' + e.target.result +
                            '" class="card-imge rounded" width="100px"/>');
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#avatar").change(function() {
                previewpassport(this);
            });



            function previewpassport(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#uavatarpreview').attr('src',e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#uavatar").change(function() {
                previewpassport(this);
            });

        })
    </script>
@endsection
