@extends('users.admin.layout.app')
@section('title', 'Site configuration setting')
@section('style')

@endsection


@section('content')
    <div class="container">

        <div class="card">

            <div class="card-header">
            <h4 class="text-center p-3 text-whit font-weight-bold">Add new users</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
                    <div class="form-group">
                        <label for="firstname"><b>Full name</b></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{  old('name') }}" required
                            autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="firstname"><b>Email Address</b></label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{  old('email') }}" required
                            autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="firstname"><b>Phone number</b></label>
                        <input id="text" type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{  old('phone') }}" required
                            autocomplete="email" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="sel1"> <b>Select staff role</b> :</label>
                        <br>
                        <select name="role" class="custom-select-sm select2" id="selectrole">
                            {{--  <option value="{{ Auth::user()->getRoleNames()[0] }}" id="{{ Auth::user()->roles->first()->id }}" selected>{{ Auth::user()->getRoleNames()[0] }}</option>  --}}
                            @forelse ($roles as $role)
                            <option value="{{ $role->name }}" id="{{ $role->id }}">{{ ucwords($role->name) }}</option>
                            @empty
                            <option value="">No roles available</option>
                            @endforelse

                      </div>


                    </select>
                    <button type="submit" class="btn btn-success btn-rounded mr-3 float-right font-weight-bold">Add new staff</button>
                </form>

            </div>

        </div>


    </div>
@endsection

@section('script')
<script>
     $(document).ready(function() {
        // Select2
        if(jQuery().select2) {
            $(".select2").select2();
        }
     })
</script>
@endsection
