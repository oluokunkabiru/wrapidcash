@if ( Spatie\Permission\Models\Role::findByName(Auth::user()->getRoleNames()[0])->hasPermissionTo('view withdrawal request'))
@extends('users.admin.layout.app')
@section('title', 'Withdraw request')
@section('style')

@endsection


@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success! </strong> {{ session('success') }}
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Failed! </strong> {{ session('failed') }}
        </div>
    @endif

    @if (session('pending'))
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Pending! </strong> {{ session('pending') }}
        </div>
    @endif
    @if (session('processing'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Processing! </strong> {{ session('processing') }}
        </div>
    @endif
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
                                @if ( Spatie\Permission\Models\Role::findByName(Auth::user()->getRoleNames()[0])->hasPermissionTo('process withdrawal request'))
                                <a href="{{ route('process-withdraw', [$with->id, str_replace(" ", "-", $with->user->name)]) }}" class="btn btn-rounded btn-warning text-white font-weight-bold">Continue processing</a>
                                @endif
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
@else
    <script>
        window.location = "{{ route('unauthorised') }}";
    </script>

@endif
