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
            <form method="POST" action="{{ route('contact.store') }}" class="form-horizontal mt-4">
                @csrf
                    
                <input type="hidden" value="{{ $members->id}}" name="id_category">

                <div class="form-group" style="width: 50%">
                    <label>Birtday</label>
                    <input value="{{ $members->birtday }}" type="text" class="form-control" name="phonenumber">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>City</label>
                    <input value="{{ $members->city }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Study</label>
                    <input value="{{ $members->study }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Website</label>
                    <input value="{{ $members->website }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Interests</label>
                    <input value="{{ $members->interests }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Description</label>
                    <input value="{{ $members->description }}" type="text" class="form-control" name="category_name">
                </div>
                

                <div class="form-group" style="width: 50%">
                    <label>Degree</label>
                    <input value="{{ $members->degree }}" type="text" class="form-control" name="category_name">
                </div>
                
                
                <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                    <button type="submit" class="btn waves-effect waves-light btn-success">Edit Category</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection