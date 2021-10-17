@extends('users.admin.layout.app')
@section('title', $contact->subject)
@section('content')


    <section class="section">
        <div class="section-header">
            <h1 class="text-center font-weight-bold"> {{ $contact->subject }}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                {{ $contact->message }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>




    </section>

@endsection
@section('script')
    <script>
        $(document).ready(function() {



            // Select2
            if(jQuery().select2) {
                $(".select2").select2();
            }

            $('#selectrole').on('change', function(){
                var role = $(this).find('option:selected').attr('id');//;.children(":selected").attr("id");
                $("#therole"+role).collapse('show');
            })




            $(document).on('change', '.permission', function(){
                var selectrole = $('#selectrole').val();

               if($(this).is(":checked")){
                var permission = $(this).val();
                var status = "add";

                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: 'POST',
                url: '{{ route('permission.store') }}',
                data: 'role='+selectrole+"&permission="+permission,
                success: function(data) {
                    $("#alermessage").attr('class', 'alert alert-success show alert-dismissible  fade');
                    $("#alermessage .alert-body .alertme").text(data);
                }
              })

               }else{
                var permission = $(this).val();
                var status = "remove";
                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: 'POST',
                url: '{{ route('remove-permission') }}',
                data: 'role='+selectrole+"&permission="+permission,
                success: function(data) {
                    $("#alermessage").attr('class', 'alert alert-danger show alert-dismissible  fade');
                    $("#alermessage .alert-body .alertme").text(data);
                }
              })
               };

            })
        })
    </script>
@endsection
