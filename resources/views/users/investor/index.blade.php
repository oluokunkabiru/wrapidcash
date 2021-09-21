@extends('users.investor.layout.app')
@section('title', 'Dashboard')

@section('content')

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Welcome back,{{ ucwords(Auth::user()->name) }}</h2>
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body dashboard-tabs p-0">
            <ul class="nav nav-tabs px-4" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Active investment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
              </li>
            </ul>
            <div class="tab-content py-0 px-0">
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="d-flex flex-wrap justify-content-xl-between">
                  <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Start date</small>
                      <h5 class="mr-2 mb-0">$577545</h5>

                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Current Balance</small>
                      <h5 class="mr-2 mb-0">$577545</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Status</small>
                      <h5 class="mr-2 mb-0">9833550</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Progress</small>
                      <h5 class="mr-2 mb-0">2233783</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                <div class="d-flex flex-wrap justify-content-xl-between">
                  <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Start date</small>
                     <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>

                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Downloads</small>
                      <h5 class="mr-2 mb-0">2233783</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Total views</small>
                      <h5 class="mr-2 mb-0">9833550</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Revenue</small>
                      <h5 class="mr-2 mb-0">$577545</h5>
                    </div>
                  </div>
                  <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Flagged</small>
                      <h5 class="mr-2 mb-0">3497843</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                    <h4 class="text-center font-weight-bold">Available coin plan</h4>

                <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-coin  icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Coin 1</small>
                      <h5 class="mb-0 d-inline-block"> <span class=" mdi mdi-currency-ngn "></span> 212121</h5>

                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-coin  icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Coin 2</small>
                      <h5 class="mb-0 d-inline-block"> <span class=" mdi mdi-currency-ngn "></span> 212121</h5>

                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-coin  icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Coin 3</small>
                      <h5 class="mb-0 d-inline-block"> <span class=" mdi mdi-currency-ngn "></span> 212121</h5>

                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-coin  icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Coin 1</small>
                      <h5 class="mb-0 d-inline-block"> <span class=" mdi mdi-currency-ngn "></span> 212121</h5>

                    </div>
                  </div>
                  <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-coin  icon-lg mr-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Coin 1</small>
                      <h5 class="mb-0 d-inline-block"> <span class=" mdi mdi-currency-ngn "></span> 212121</h5>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-uppercase">Profile details</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/admin.jpg') }}" class="card-img" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4">
                            <h5 class="mdi mdi-account "></h5>
                        </div>
                        <div class="col-8">
                            <h5 class="text-dark font-weight-bold">{{ ucwords(Auth::user()->name) }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h5 class=" mdi mdi-email  "></h5>
                        </div>
                        <div class="col-8">
                            <h5 class="text-dark font-weight-bold">{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h5 class="mdi mdi-phone-outgoing  "></h5>
                        </div>
                        <div class="col-8">
                            <h5 class="text-dark font-weight-bold">{{ Auth::user()->phone }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h5 class=" mdi mdi-gender-transgender  "></h5>
                        </div>
                        <div class="col-8">
                            <h5 class="text-dark font-weight-bold">Gender</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('investor-referral', $investor->username ) }}">{{ route('investor-referral', $investor->username ) }}</a>
            <p class=" mdi mdi-content-copy " onclick="fileCopy(this.id)"  id="{{ route('investor-referral', $investor->username ) }}"></p>
          </div>
          <div class="toast" data-autohide="true">
            <div class="toast-body">
              Copied <span id="toast" class="font-weight-bold mx-1"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Current balance</p>
            <h1><span class=" mdi mdi-currency-ngn "></span> 28835</h1>
            <h4>Gross sales over the years</h4>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Recent Purchases</p>
            <div class="table-responsive">
              <table id="transaction" class="table">
                <thead>
                  <tr>
                      <th>S/N</th>
                      <th>Plan</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Status</th>
                  </tr>
                </thead>
                @php
                    $sn =0;
                @endphp
                <tbody>
                    @for ($i = 0; $i < 20; $i++)

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

    </div>
@endsection

@section('script')
    <script>
function fileCopy(text) {
  // alert(text);
  var txt = $("<input>").val(text).appendTo("body").select();
  document.execCommand("copy");
  $("#toast").text(text);
  $('.toast').toast('show');

}
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
