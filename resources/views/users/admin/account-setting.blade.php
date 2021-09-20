@extends('users.investor.layout.app')
@section('title', 'Account setting')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <h4 class="text-center p-3 bg-dark text-white font-weight-bold">Account setting</h4>

                <div class="card-header">
                    <a href="#addbankdetails" data-toggle="modal" class="btn btn-primary float-left">Add new bank detail</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                          <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Account Number</th>
                                <th>Bank</th>
                                <th>Add Date</th>
                                <th>Status</th>
                            </tr>
                          </thead>
                          @php
                              $sn =0;
                          @endphp
                          <tbody>
                              @for ($i = 0; $i < 2; $i++)

                              <tr>
                                  <td>{{ ++$sn }}</td>
                                  <td>Plan {{ $i }}</td>
                                  <td>{{ 10*$i }}</td>
                                  <td>{{ $i+1 }}/04/2021</td>
                                  <td>
                                      @if ($i %2 ==0)
                                      <span class="badge badge-pill badge-success">Approved</span>
                                      @else
                                      <span class="badge badge-pill badge-danger">Pending</span>
                                      @endif
                                  </td>
                              </tr>

                              @endfor
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
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

@endsection

