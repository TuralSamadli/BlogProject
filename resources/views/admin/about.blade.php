@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">User Information Table </h4>
                        </div>
                        <div style="text-align: right" class="col-md-6"><a
                                href=class="btn waves-effect waves-light btn-success">Add User</a></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Phone Number</th>
                                    <th>Email Adress</th>
                                    <th>Adress</th>
                                    <th>Facebook</th>
                                    <th>Linkedin Account</th>
                                    <th>Github</th>
                                    <th>Instagram</th>
                                    <th>birthday</th>
                                    <th>city</th>
                                    <th>Website</th>
                                    <th>Cv</th>
                                    <th>Interests</th>
                                    <th>Degree</th>
                                    <th>Description</th>
                                    <th>Edite</th>
                                    <th>Delete</th>




                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    {{-- {{-- <tr> --}}
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    {{-- <td><img src="{{ $product_details->image}}" /></td> --}}
                                    <td>{{ $user->image }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->facebook }}</td>
                                    <td>{{ $user->linkedin }}</td>
                                    <td>{{ $user->github }}</td>
                                    <td>{{ $user->Instagram }}</td>
                                    <td>{{ $user->birthday }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->website }}</td>
                                    <td>{{ $user->cv }}</td>
                                    <td>{{ $user->interests }}</td>
                                    <td>{{ $user->degree }}</td>
                                    <td>{{ $user->description }}</td>




                                    <td> <button type="button"
                                            class="btn waves-effect waves-light btn-warning">Edit</button></td>
                                    <td> <button type="button"
                                            class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
