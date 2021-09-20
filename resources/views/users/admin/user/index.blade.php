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
                                                @if ($sn % 2 == 0)
                                                    <span class="badge badge-pill badge-success">Approved</span>
                                                @else
                                                    <span class="badge badge-pill badge-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>Madke admin</td>
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

        <div class="modal" id="addbankdetails">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add new bank detail</h4>
                        {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

                        <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post"></form>
                        @csrf
                        <div class="form-group">
                            <label for="">Account Number:</label>
                            <input type="number" class="form-control" id="accountnumber">
                        </div>

                        <div class="form-group">
                            <label for="">Account Name:</label>
                            <input type="text" class="form-control" id="accountnumber">
                        </div>

                        <div class="form-group">
                            <label for="">Bank:</label>
                            <input type="text" class="form-control" id="accountnumber">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-block btn-primary">Add bank</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".select2").select2();
            // alert('hello');
            $("#users").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });



        })
    </script>
@endsection
