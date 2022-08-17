@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


               
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                
                            
                                <tr>

                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>

                                    <td>{{ $message->subject }}</td>
                                    <td><p> {{ $message->message}}</p></td>
                                    <td>   <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                                        <td> <button onclick="MessageDelete('{{$message->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                    </div></td>
                                </tr>
                                @endforeach
                                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                                <script>
                                    function MessageDelete(id) {
                                        swal({
                                            title: "Warning",
                                            text: "Are you sure?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                            buttons: ["No", "Yes"],
                                        })
                                            .then((willDelete) => {
                                                if (willDelete) {
                                                    // let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                                                    $.ajax({
                                                        url: "{{ route('message.delete') }}",
                                                        data: { "_token": "{{ csrf_token() }}", id:id },
                                                        method: "POST",
                                                        success: function (data) {
                                                            if(data==="ok"){
                                                                swal("Success!", "Message deleted!", "success");
                                                                window.setTimeout(function(){location.reload()},2000)
                                                            }else{
                                                                swal("Error!", "Message didn't deleted!", "error");
                                                            }
                                                        },
                                                        error: function (x, sts) {
                                                            console.log("Error...");
                                                            console.log('no');
                                                        },
                                                    });
                                                } else {
                                                    swal("Cancelled!");
                                                }
                                            });
                                    }
                                </script>
                            @endsection
