@extends('users.admin.layout.app')
@section('title', 'Active investment')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        {{--  <div class="col-md-2"></div>  --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <p class="card-title">Processed withdraw</p>
                  <div class="table-responsive">
                    <table id="transaction" class="table">
                      <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Users</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Amount Withdrawed</th>
                            <th>Processed date</th>
                        </tr>
                      </thead>
                      @php
                          $sn =0;
                      @endphp
                      <tbody>
                            @forelse ($invs as $inv)


                          <tr>
                              <td>{{ ++$sn }}</td>
                              <td>{{ ucwords($inv->user->name) }}</td>
                              <td> {{ ucwords($inv->user->phone) }}</td>
                              <td>{{ ucwords($inv->user->email) }}</td>
                              <td>{{ ucwords($inv->type) }}</td>
                              <td><span class="mdi mdi-currency-ngn"></span>{{ number_format($inv->amount, 2, '.', ',') }}</td>
                              <td>{{ date('d, M Y:h:s:ia', strtotime($inv->updated_at)) }}</td>


                          </tr>

                          @empty
                          <h3 class="text-danger font-weight-bold text-center text-captalise">No current processed withdraw request</h3>
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
        {{--  <div class="col-md-2"></div>  --}}
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

