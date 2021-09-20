@extends('users.admin.layout.app')
@section('title', 'Manage coins and there prices')
@section('style')

@endsection


@section('content')
<div class="container">
    <div class="row">
        {{--  <div class="col-md-2"></div>  --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong style="font-size:20px;">Oops!
                            {{ 'Kindly rectify below errors' }}</strong><br />
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif
                  <p class="card-title">Manage wrap coins and there prices</p>
                  <div class="table-responsive">
                      <a href="#addcoin" data-toggle="modal" class="btn btn-primary btn-rounded font-weight-bold"> Add wrap coin</a>
                    <table id="transaction" class="table">
                      <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total investors</th>
                            <th>Icon</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      @php
                          $sn =0;
                      @endphp
                      <tbody>
                          @for ($i = 0; $i < 20; $i++)

                          <tr>
                              <td>{{ ++$sn }}</td>
                              <td>{{ $i }}</td>
                              <td><i class=" mdi mdi-currency-ngn "></i>{{ 10*$i }}</td>
                              <td> <span class="badge badge-pill badge-success">{{ $i+2 }}</span></td>
                              <td><img src="{{ asset('front-asset/images/coins.jpg') }}" class="card-img rounded-circle" style="width: 50px"  alt=""></td>
                              <td>{{ $i+1 }}/04/2021</td>
                              <td>
                                  @if ($i %2 ==0)
                                  <span class="badge badge-pill badge-success">Approved</span>
                                  @else
                                  <span class="badge badge-pill badge-danger">Pending</span>
                                  @endif
                              </td>

                              <td>
                                  <div class="row">
                                      <div class="col">
                                          <a href="">
                                            <span class="badge badge-pill badge-success"><i class="mdi mdi-tooltip-edit"></i></span>
                                          </a>
                                      </div>

                                      <div class="col">
                                        <a href="">
                                          <span class="badge badge-pill badge-warning"><i class="mdi mdi-block-helper "></i></span>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="">
                                          <span class="badge badge-pill badge-primary"><i class=" mdi mdi-eye  "></i></span>
                                        </a>
                                    </div>

                                  </div>
                            </td>
                          </tr>

                          @endfor
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
        {{--  <div class="col-md-2"></div>  --}}
    </div>

    <div class="modal" id="addcoin">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-uppercase font-weight-bold">Add new wrap coin</h4>
                {{-- <h2 class="text-center display-1 "> <span class="mdi mdi-bank"></span></h2> --}}

              <button type="button" class="close bg-danger text-white" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="{{ route('wrap-coin.store') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div id="avatarpreview"></div>
                @csrf
                <div class="form-group">
                    <label for="">Wrap Avatar:</label>
                    <input type="file" class="form-control-file border @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                </div>
                <div class="form-group">
                    <label for="">Wrap Quantity:</label>
                    <input type="number" step="1" name="quantity" class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>

                <label for="">Wrap Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class=" mdi mdi-currency-ngn "></i></span>
                    </div>
                    {{--  <label for="">Wrap Price</label>  --}}
                    <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                  </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-block btn-primary">Add wrap coin</button>
            </div>
        </form>
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



            function previewpassport(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#avatarpreview + img').remove();
                    $('#avatarpreview').after('<img src="'+e.target.result+'" class="card-imge rounded" width="100px"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function () {
            previewpassport(this);
        });

        })
    </script>
@endsection

