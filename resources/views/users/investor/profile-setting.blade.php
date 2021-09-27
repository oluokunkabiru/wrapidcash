@extends('users.investor.layout.app')
@section('title', 'Profile update')
@section('content')
    <div class="container my-2 p-2">
        <div class="card">
            <div class="card-header p-4">Profile settings</div>
            <div class="card-body p-2">
                <div class="dudu">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('investor.update', Auth::user()->id) }}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="avatarset" value="{{ Auth::user()->getMedia('avatar')->first() ? "set" :"notset" }}">
                        <div class="card-columns">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Personale information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="firstname"><b>Full name</b></label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ ucwords(Auth::user()->name), old('name')  }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="email"><b>Email</b></label>
                                        {{-- <input type="email" placeholder="Enter Email" name="email" required> --}}
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ Auth::user()->email, old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="phonenumber"><b>Phone Number</b></label>
                                        {{-- <input type="number" placeholder="Enter Phone Number" name="pname" required> --}}
                                        <input id="phone" type="tel"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ Auth::user()->phone, old('phone') }}" required autocomplete="phone">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phonenumber"><b>Profie image</b></label>

                                        <input type="file" accept="image/*"  name="avatar" class="form-control-file border  @error('avatar') is-invalid @enderror">
                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4>Bank detail</h4>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" id="bankid" name="bankid" value="{{ old('bankid') }}">
                                    <div class="form-group ">
                                        <label for="sel1">Select Bank:</label>
                                        <select class="form-control select2" name="bank" id="bank">
                                            @if (Auth::user()->bank_id)
                                            <option value="{{ Auth::user()->bankcode ? Auth::user()->bankcode:"" }}" {{ Auth::user()->bankcode ? "readonly" :"disabled"  }}  selected> {{ Auth::user()->bankname }} --Select bank--</option>
                                            @else
                                                <option value="{{ old('bank') }}" disabled selected>-- Select bank --</option>
                                                @forelse ($banks as $bank)
                                                    <option value="{{ $bank->code }}" id="{{ $bank->id }}">{{ $bank->name }}</option>
                                                @empty
                                                    <option value="">No bank available</option>
                                                @endforelse
                                            @endif
                                        </select>
                                        @error('bank')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group ">
                                        <label for="phonenumber"><b>Account number</b></label>
                                        {{-- <input type="number" placeholder="Enter Phone Number" name="pname" required> --}}
                                        <input type="number" id="accountnumber"
                                            class="form-control @error('accountnumber') is-invalid @enderror" name="accountnumber"
                                            value="{{Auth::user()->account_number, old('accountnumber') }}" required disabled autocomplete="accountnumber">
                                        <span  class="text-danger" role="alert" id="invalidaccountnumber"></span>
                                        @error('accountnumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname"><b>Account name</b></label>
                                        <input id="accountname" type="text"
                                            class="form-control @error('accountname') is-invalid @enderror" name="accountname"
                                            value="{{ Auth::user()->account_name, old('accountname') }}" disabled readonly required autocomplete="accountname" autofocus>

                                        @error('accountname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4>Change password</h4>
                                    <small class="text-danger">Leave empty, if not change</small>
                                </div>
                                <div class="card-body">

                                    <div class="form-group ">
                                        <label for="psw"><b>Old password</b></label>
                                        {{-- <input type="password" placeholder="Enter Password" name="psw" required> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword">

                                        @error('oldpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="psw"><b>New password</b></label>
                                        {{-- <input type="password" placeholder="Enter Password" name="psw" required> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group ">
                                        <label for="password-confirm"><b>Confirm Password</b></label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation">

                                    </div>
                                </div>
                            </div>

                            <button type="submit" disabled id="submit" class="btn font-weight-bold p-3 btn-primary text-uppercase">
                                {{ __('update profile') }}
                            </button>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    @endsection


    @section('script')
        <script>
            $(document).ready(function() {
                $(".select2").select2();

                // alert('hello');
                $(document).on('change', '#bank', function() {
                    var id = $(this).children(":selected").attr("id");
                    // alert(id);
                    $('#bankid').val(id);
                    if ($(this).val() !="") {
                    $("#accountnumber").removeAttr("disabled")
                    } else {
                        $("#accountnumber").attr("disabled", 'true')
                    }
                })
                $(document).on('change', '#accountnumber', function() {
                var bank = $("#bank").val();
                var account = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type: 'POST',
                    url: '{{ route('get-account-details') }}',
                    data: 'bank=' + bank+"&accountnumber="+account,
                    success: function(data) {
                        var resp = JSON.parse(data);
                        if (resp.account_name !=null) {
                            // alert("no null");
                            $("#submit").removeAttr("disabled");
                            $("#accountname").removeAttr("disabled");
                            $("#accountname").val(resp.account_name)
                            }else{
                                // alert(resp.message);
                                $("#invalidaccountnumber").text(resp.message)
                                $("#accountnumber").attr("disabled", 'true')
                                $("#submit").attr("disabled", 'true')
                            }
                            // alert(resp.message);
                        // console.log(resp.message)
                        // $("#zone").html(data)
                    }
                })

            })



            })
        </script>
    @endsection
