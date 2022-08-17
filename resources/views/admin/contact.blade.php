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
            <form method="POST" action="{{ route('contact.update') }}" class="form-horizontal mt-4">
                @csrf
                    
                <input type="hidden" value="{{ $members->id}}" name="id">

                <div class="form-group" style="width: 50%">
                    <label>Birthday</label>
                    <input value="{{ $members->birthday }}" type="date" class="form-control" name="birthday">
                </div>
                
                <div class="form-group" style="width: 50%">
                    <label>City</label>
                    <input value="{{ $members->city }}" type="text" class="form-control" name="city">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Study</label>
                    <input value="{{ $members->study }}" type="text" class="form-control" name="study">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Website</label>
                    <input value="{{ $members->website }}" type="text" class="form-control" name="website">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Interests</label>
                    <input value="{{ $members->interests }}" type="text" class="form-control" name="interests">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>Description</label>
                    <input value="{{ $members->description }}" type="text" class="form-control" name="description">
                </div>
                

                <div class="form-group" style="width: 50%">
                    <label>Degree</label>
                    <input value="{{ $members->degree }}" type="text" class="form-control" name="degree">
                </div>
                
                
                <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                    <button type="submit" class="btn waves-effect waves-light btn-success">Edit Category</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection