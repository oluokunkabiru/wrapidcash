@extends('users.investor.layout.app')
@section('title', 'Transaction history')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <p class="card-title">Transaction history</p>
                  <div class="table-responsive">
                    <table id="transaction" class="table">
                      <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Action</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                      @php
                          $sn =0;
                      @endphp
                     <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td>{{ ++$sn }}</td>
                                <td>{{ $transaction->action }}</td>
                                <td><span class=" mdi mdi-currency-ngn "></span>
                                    {{ number_format($transaction->price, 2, '.', ',') }}
                                </td>
                                <td>{{ $transaction->created_at }}</td>

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
        <div class="col-md-2"></div>
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



        })
</script>
@endsection

