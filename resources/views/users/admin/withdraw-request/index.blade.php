@extends('users.admin.layout.app')
@section('title', 'Withdraw request')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        {{--  <div class="col-md-2"></div>  --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <p class="card-title">Withdraw request</p>
                  <div class="table-responsive">
                    <table id="transaction" class="table">
                      <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Users</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Amount request</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      @php
                          $sn =0;
                      @endphp
                      <tbody>
                            @forelse ($withdraws as $with)


                          <tr>
                              <td>{{ ++$sn }}</td>
                              <td>{{ ucwords($with->user->name) }}</td>
                              <td> {{ ucwords($with->user->phone) }}</td>
                              <td>{{ ucwords($with->type) }}</td>
                              <td> <i class=" mdi mdi-currency-ngn "></i> {{ number_format($with->amount, 2, '.', ',') }}</td>
                              <td>{{ date('d, M Y:h:s:ia', strtotime($with->created_at)) }}</td>
                              <td>
                                  @if ($with->status =="success")
                                  <span class="badge badge-pill badge-success">Processed payment</span>
                                  @else
                                  <span class="badge badge-pill badge-danger">{{ ucwords($with->status) }}</span>
                                  @endif
                              </td>
                              <td>
                                @if ($with->status !="success")
                                <a href="{{ route('process-withdraw', [$with->id, str_replace(" ", "-", $with->user->name)]) }}" class="btn btn-rounded btn-warning text-white font-weight-bold">Continue processing</a>
                                @endif

                              </td>
                          </tr>

                          @empty
                          <h3 class="text-danger font-weight-bold text-center text-captalise">No current pending withdraw request</h3>
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
                    <input type="text"  class="form-control" id="accountnumber">
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
            $("#transaction").dataTable({
                "columnDefs": [{
                    "sortable": true,
                    // "targets": [2, 3]
                }]
            });



        })
    </script>
@endsection

