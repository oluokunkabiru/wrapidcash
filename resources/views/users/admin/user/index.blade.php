@extends('users.admin.layout.app')
@section('title', 'Transaction Manage users')
@section('style')

@endsection


@section('content')
    <div class="container">
        <div class="row">
            {{--  <div class="col-md-2"></div>  --}}
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

                        <p class="card-title">Manage users</p>
                        <div class="table-responsive">
                            <table id="users" class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Active status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $sn = 0;
                                @endphp
                                <tbody>
                                    @forelse ($users as $user)


                                        <tr>
                                            <td>{{ ++$sn }}</td>
                                            <td>{{ ucwords($user->name) }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if ($user->status =="active")
                                                    <span class="badge badge-pill badge-success">{{ ucwords($user->status) }}</span>
                                                @else
                                                    <span class="badge badge-pill badge-danger">{{ ucwords($user->status) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="row">
{{--    --}}
                                                    <div class="col">
                                                        @if ($user->status =="active")
                                                    <a href="#disableduser" status="{{ ucwords($user->status) }}" durl="{{ route('disabled-user', $user->id) }}" data-toggle="modal" name="{{ $user->name }}" email="{{ $user->email }}" phone="{{ $user->phone }}" img="{{ asset('images/admin.jpg') }}">
                                                            <span class="badge badge-pill badge-info"><i
                                                                    class="mdi mdi-shuffle-disabled " data-toggle="tooltip" title="Disable wrap user"></i></span>
                                                        </a>
                                                        @else
                                                    <a href="#enableduser" status="{{ ucwords($user->status) }}" eurl="{{ route('enable-user', $user->id) }}" data-toggle="modal" name="{{ $user->name }}" email="{{ $user->email }}" phone="{{ $user->phone }}" img="{{ asset('images/admin.jpg') }}" >
                                                            <span class="badge badge-pill badge-warning"><i
                                                                    class="mdi mdi-block-helper" data-toggle="tooltip" title="Enable wrap user"></i></span>
                                                        </a>
                                                        @endif

                                                    </div>

                                                    <div class="col">
                                                        <a href="#viewuser" status="{{ ucwords($user->status) }}" data-toggle="modal" name="{{ $user->name }}" email="{{ $user->email }}" phone="{{ $user->phone }}" img="{{ asset('images/admin.jpg') }}">
                                                            <span class="badge badge-pill badge-primary"><i
                                                                    class=" mdi mdi-eye  " data-toggle="tooltip" title="View Wrap details"></i></span>
                                                        </a>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                        @empty
                                        <h2 class="text-danger text-center font-weight-bold">No active users</h2>
                                        @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="col-md-2"></div>  --}}
        </div>

       {{-- edit --}}
       <div class="modal" id="disableduser">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase font-weight-bold">disabled user</h5>
                    {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                    <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src=""class="card-img" id="davatarpreview" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-muted">Name</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark" id="dname"></h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">

                                    <div class="col">
                                        <h5 class="text-muted">Email</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark"> <span id="demail"></span></h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">

                                    <div class="col">
                                        <h5 class="text-muted">Phone</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-dark"> <span id="dphone"></span></h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">

                                    <div class="col">
                                        <h5 class="text-muted">Status</h5>
                                    </div>
                                    <div class="col">
                                        <h5 class="text-success" id="dstatus"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="" id="durl" class="btn btn-block btn-warning" >Disabled user</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End edit --}}

     {{-- edit --}}
     <div class="modal" id="enableduser">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase font-weight-bold">Enabled user</h5>
                    {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                    <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src=""class="card-img" id="eavatarpreview" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-muted">Name</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark" id="ename"></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Email</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark"> <span id="eemail"></span></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Phone</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark"> <span id="ephone"></span></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Status</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-success" id="estatus"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="" id="eurl" class="btn btn-block btn-warning" >Enabled user</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End edit --}}

    {{-- edit --}}
    <div class="modal" id="viewuser">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase font-weight-bold">user details</h5>
                    {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                    <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src=""class="card-img" id="vavatarpreview" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-muted">Name</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark" id="vname"></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Email</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark"> <span id="vemail"></span></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Phone</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-dark"> <span id="vphone"></span></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col">
                                    <h5 class="text-muted">Status</h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-success" id="vstatus"></h5>
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
            $('[data-toggle="tooltip"]').tooltip();
            // alert('hello');
            $("#users").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });


            $('#disableduser').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var name = $(e.relatedTarget).attr('name');
                var status = $(e.relatedTarget).attr('status');
                var email = $(e.relatedTarget).attr('email');
                var phone = $(e.relatedTarget).attr('phone');
                var editurl = $(e.relatedTarget).attr('durl');

                //   alert(facultyname)
                $("#demail").text(email);
                $("#dname").text(name);
                $("#dstatus").text(status);
                $("#dphone").text(phone);
                $("#davatarpreview").attr("src", img);
                $("#durl").attr("href", editurl);

            })

            $('#enableduser').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var name = $(e.relatedTarget).attr('name');
                var status = $(e.relatedTarget).attr('status');
                var email = $(e.relatedTarget).attr('email');
                var phone = $(e.relatedTarget).attr('phone');
                var editurl = $(e.relatedTarget).attr('eurl');

                //   alert(facultyname)
                $("#eemail").text(email);
                $("#ename").text(name);
                $("#estatus").text(status);
                $("#ephone").text(phone);
                $("#eavatarpreview").attr("src", img);
                $("#eurl").attr("href", editurl);

            })

            $('#viewuser').on('show.bs.modal', function(e) {
                var img = $(e.relatedTarget).attr('img');
                var name = $(e.relatedTarget).attr('name');
                var status = $(e.relatedTarget).attr('status');
                var email = $(e.relatedTarget).attr('email');
                var phone = $(e.relatedTarget).attr('phone');

                //   alert(facultyname)
                $("#vemail").text(email);
                $("#vname").text(name);
                $("#vstatus").text(status);
                $("#vphone").text(phone);
                $("#vavatarpreview").attr("src", img);
            })



        })
    </script>
@endsection
