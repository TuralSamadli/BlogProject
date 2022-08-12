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


                <a href="{{ route('category.create') }}" type="button" class="btn waves-effect waves-light btn-success">Add
                    category</a>
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
                                    <td>{{ $message->message}}</td>

                                </tr>
                            @endforeach
                        @endsection
