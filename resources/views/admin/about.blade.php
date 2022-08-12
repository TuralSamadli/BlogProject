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
                <form method="POST" action="{{ route('store.index') }}" class="form-horizontal mt-4">
                    @csrf
                    <input type="hidden" value="{{ $users->id }}" name="id_category">
                    <div class="form-group" style="width: 50%">
                        <label>Phone Number</label>
                        <input value="{{ $users->phone }}" type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Email</label>
                        <input value="{{ $users->email }}" type="text" class="form-control" name="surname">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Address</label>
                        <input value="{{ $users->address }}" type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Facebook</label>
                        <input value="{{ $users->facebook }}" type="text" class="form-control" name="adress">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Linkedin</label>
                        <input value="{{ $users->linkedin}}" type="text" class="form-control" name="adress">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Github</label>
                        <input value="{{ $users->github }}" type="text" class="form-control" name="adress">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Instagram</label>
                        <input value="{{ $users->instagram }}" type="text" class="form-control" name="adress">
                    </div>
                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button  onclick="" type="submit" class="btn waves-effect waves-light btn-success">Edit User Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection