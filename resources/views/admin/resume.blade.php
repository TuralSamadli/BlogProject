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
                            <th>Type</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start_date</th>
                            <th>End_date</th>
                            <th>Edit</th>
                            <th>Delete</th>


                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resume as $resume)
                            
                            <tr>

                                <td>
                                    @if($resume->resume_type==1)
                                    Education
                                    @elseif($resume->resume_type==2)
                                    Experience
                                    @endif         
                                   </td>
                                <td>{{ $resume->title }}</td>

                                <td>{{ $resume->description }}</td>
                                <td>{{ $resume->start_date}}</td>
                                <td>{{ $resume->end_date}}</td>
                                <td> <a href="{{ route('resume.edit', $resume->id) }}}}" class="btn waves-effect waves-light btn-warning">Edit</a></td>  </td>
                                <td><button onclick="{{Route('resume.delete')}}" type="button"
                                    class="btn waves-effect waves-light btn-danger">Delete</button></td>




                            </tr>
                        @endforeach
@endsection