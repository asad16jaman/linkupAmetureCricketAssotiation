@extends('backend.layouts.app')

@section('title', 'User Create')

@section('content')
<div class="container-fluid pt-3">
   

    <div class="row justify-content-center">
        <div class="col-xl-6 justify-content-center">
            <div class="card custom-card">
                <div class="card-header justify-content-between py-1" style="background-color: #021216 !important; color: white !important;">
                    <div class="card-title">
                       Create User
                    </div>
                    <div class="prism-toggle">
                        <a href="{{ route('admin.usersAll')}}" class="btn btn-sm btn-primary-light">Show All</a>
                    </div>
                </div>
                <form action="{{ route('admin.userStore')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter name</label>
                        <input type="text" class="form-control form-control-sm" id="form-text" value="{{ old('name')}}" name="name" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter Email</label>
                        <input type="email" class="form-control form-control-sm" id="form-text" name="email" value="{{ old('email')}}" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="form-password" class="form-label fs-14 text-dark">Enter
                            Password</label>
                        <input type="password" class="form-control form-control-sm" id="form-password" name="password" placeholder="Password">
                        @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="form-password" class="form-label fs-14 text-dark">Enter
                            Password</label>
                        <input type="password" class="form-control form-control-sm" name="password_confirmation" id="form-password" placeholder="Password confirmation">
                        
                    </div>
                    
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
                </form>
               
            </div>
        </div>


    </div>

     <div class="row">
        <div class="col-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between py-1">
                    <div class="card-title">
                        Users
                    </div>
                    <a href="{{ route('admin.userCreate')}}" class="btn btn-sm btn-primary border">Add New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">S.No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" class="text-center">Action</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <th scope="row" class="text-center">
                                       {{$loop->iteration}}
                                    </th>
                                    <td>
                                       {{ $user->name }}
                                    </td>
                                    <td> {{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.userEdit',$user)}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.userDelete',$user)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

