@extends('backend.layouts.app')

@section('title', 'Users All')

@section('content')
<div class="container-fluid pt-3">
     <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <div class="">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <hr class="my-2" style="border: 1px solid #d2d3d3  !important">
     <div class="row justify-content-center">
        <div class="col-xl-12 justify-content-center">
            <div class="card custom-card">
                <div class="card-header justify-content-between py-1" style="background-color: #021216 !important; color: white !important;">
                    <div class="card-title">
                       Add New User
                    </div>
                   
                </div>
                <form action="{{ route('admin.userStore')}}" method="POST">
                @csrf
                <div class="card-body ">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="form-text" class="form-label fs-14 text-dark">Enter name</label>
                            <input type="text" class="form-control form-control-sm" id="form-text" value="{{ old('name')}}" name="name" placeholder="Enter Name">
                            @error('name')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="form-text" class="form-label fs-14 text-dark">Enter Username</label>
                            <input type="text" class="form-control form-control-sm" id="form-text" name="username" value="{{ old('username')}}" placeholder="Enter username">
                            @error('username')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="form-text" class="form-label fs-14 text-dark">Enter Mobile</label>
                            <input type="text" class="form-control form-control-sm" id="form-text" name="mobile" value="{{ old('mobile')}}" placeholder="Enter mobile">
                            @error('mobile')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="form-text" class="form-label fs-14 text-dark">Enter Email</label>
                            <input type="email" class="form-control form-control-sm" id="form-text" name="email" value="{{ old('email')}}" placeholder="Enter Email">
                            @error('email')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="form-password" class="form-label fs-14 text-dark">Enter
                                Password</label>
                            <input type="password" class="form-control form-control-sm" id="form-password" name="password" placeholder="Password">
                            @error('password')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="form-password" class="form-label fs-14 text-dark">Enter
                                Password</label>
                            <input type="password" class="form-control form-control-sm" name="password_confirmation" id="form-password" placeholder="Password confirmation">
                            
                        </div>
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
                <div class="card-header justify-content-between py-1" style="background-color: #021216 !important; color: white !important;">
                    <div class="card-title">
                        Users
                    </div>
                    
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

