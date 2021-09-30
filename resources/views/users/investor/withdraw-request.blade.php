@extends('users.investor.layout.app')
@section('title', 'Account setting')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        {{--  <div class="col-md-2"></div>  --}}
        <div class="col-md-12">
            <div class="card">
                <h4 class="text-center p-3 bg-dark text-white font-weight-bold">Withdraw request</h4>

                <div class="card-header">
                    <a href="#addbankdetails" data-toggle="modal" class="btn btn-primary float-left">Add new bank detail</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="withdraw" class="table">
                          <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Coin quatity</th>
                                <th>Start amount</th>
                                <th>Expected amount</th>
                                <th>Revenue balance</th>
                                <th>Investment start</th>
                                <th>Investment end</th>
                                <th>Withdraw status</th>
                            </tr>
                          </thead>
                          @php
                              $sn =0;
                          @endphp
                          <tbody>
                            @forelse ($invs as $inv)


                              <tr>
                                  <td>{{ ++$sn }}</td>
                                  <td>{{ $inv->coin->quantity }}</td>
                                  <td><span class=" mdi mdi-currency-ngn "></span> {{ number_format($inv->invest_amount , 2, '.', ',') }}</td>
                                  <td><span class=" mdi mdi-currency-ngn "></span> {{ number_format($inv->expected_amount , 2, '.', ',') }}</td>
                                  <td>
                                      @if ($inv->revenue)
                                      <span class=" mdi mdi-currency-ngn "></span> {{ number_format($inv->revenue , 2, '.', ',') }}                                      @else
                                        <span class="text-danger">Investment not approved</span>
                                      @endif

                                    </td>
                                    <td>
                                        @if ($inv->invest_date)
                                        {{ $inv->invest_date }}
                                        @else
                                          <span class="text-danger">Investment not approved</span>
                                        @endif

                                      </td>
                                  <td>  @if ($inv->end_date)
                                    {{ $inv->end_date }}
                                    @else
                                      <span class="text-danger">Investment not approved</span>
                                    @endif</td>
                                  <td>
                                      @if (date('now') >= $inv->end_date)
                                      <span class="badge badge-pill badge-success">Approved</span>
                                      @else
                                      <span class="badge badge-pill badge-danger">Pending</span>
                                      @endif
                                  </td>
                              </tr>

                              @empty
                              <h4 class="text-center text-danger">No ongoing investment at moment</h4>
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

