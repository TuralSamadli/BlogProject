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
                                <tr>

                                    <td>{{ $messages->name }}</td>
                                    <td>{{ $messages->email }}</td>

                                    <td>{{ $messages->subject }}</td>
                                    <td>{{ $messages->message}}</td>
                                    <td>   <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                                        <button  onclick="{{route('message.delete')}}" type="button" class="btn waves-effect waves-light btn-success">Delete</button>
                                    </div></td>
                                </tr>
                            
                        @endsection
