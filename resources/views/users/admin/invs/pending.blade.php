@if ( Spatie\Permission\Models\Role::findByName(Auth::user()->getRoleNames()[0])->hasPermissionTo('view pending investment'))
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
                  <p class="card-title">Pending investment</p>
                  <div class="table-responsive">
                    <table id="transaction" class="table">
                      <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Users</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Plan</th>
                            <th>Payment date</th>
                            <th>Evidence of payment</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      @php
                          $sn =0;
                      @endphp
                      <tbody>
                            @forelse ($invs as $inv)


                          <tr>
                              <td>{{ ++$sn }}</td>
                              <td>{{ ucwords($inv->investor->users($inv->investor->id)->name) }}</td>
                              <td> {{ ucwords($inv->investor->users($inv->investor->id)->phone) }}</td>
                              <td> {{ ucwords($inv->investor->users($inv->investor->id)->email) }}</td>
                              <td>{{ ucwords($inv->coin->name) }}</td>
                              <td>{{ date('d, M Y:h:s:ia', strtotime($inv->created_at)) }}</td>
                              <td> <a href="{{ $inv->getMedia('evidence')->first()->getFullUrl() }}" target="_blank" rel="noopener noreferrer"><img src="{{ $inv->getMedia('evidence')->first()->getFullUrl() }}" style="width: 100px" alt=""></a></td>
                              <td>
                                @if ( Spatie\Permission\Models\Role::findByName(Auth::user()->getRoleNames()[0])->hasPermissionTo('process pending investment'))

                                <a href="{{ route('investment-progress.edit', $inv->id) }}" class="btn btn-rounded btn-warning text-white font-weight-bold">Proceed to approve</a>
                                @endif
                              </td>
                          </tr>

                          @empty
                          <h3 class="text-danger font-weight-bold text-center text-captalise">No current pending investment</h3>
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

