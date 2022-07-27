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
                <h1>User Edit Page</h1>
                <form method="POST" action="{{ route('about') }}" class="form-horizontal mt-4">
                    @csrf
                    @foreach ($users as $user)
                        
                    <input type="hidden" value="{{ $user->id}}" name="id_category">

                    <div class="form-group" style="width: 50%">
                        <label>Phone Number</label>
                        <input value="{{ $user->phone }}" type="text" class="form-control" name="phonenumber">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Email</label>
                        <input value="{{ $user->address }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Address</label>
                        <input value="{{ $user->address }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Facebook</label>
                        <input value="{{ $user->facebook }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Linkedin</label>
                        <input value="{{ $user->linkedin }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Github</label>
                        <input value="{{ $user->github }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Instagram</label>
                        <input value="{{ $user->instagram }}" type="text" class="form-control" name="category_name">
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>name</label>
                        <input value="{{ $user->address }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>name</label>
                        <input value="{{ $user->address }}" type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>name</label>
                        <input value="{{ $user->address }}" type="text" class="form-control" name="category_name">
                    </div>
                    
                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit Category</button>
                    </div>
                    @endforeach

                </form>
            </div>
        </div>
    </div>
@endsection