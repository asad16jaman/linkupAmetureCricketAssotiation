@extends('backend.layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container-fluid pt-3">
    <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <div class="">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <hr class="my-2" style="border: 1px solid #d2d3d3  !important">
    <div class="row justify-content-center">
        <div class="col-xl-6 justify-content-center">
            <div class="card custom-card">
                <div class="card-header justify-content-between py-1" style="background-color: #021216 !important; color: white !important;">
                    <div class="card-title">
                       Edit User
                    </div>
                    <div class="prism-toggle">
                        <a href="{{ route('admin.usersAll')}}" class="btn btn-sm btn-primary-light">Show All</a>
                    </div>
                </div>
                <form action="{{ route('admin.userUpdate',$user)}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter name</label>
                        <input type="text" class="form-control form-control-sm" id="form-text" name="name" value="{{ old('name', $user->name)}}" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                      <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter Username</label>
                        <input type="text" class="form-control form-control-sm" id="form-text" name="username" value="{{ old('username', $user->username)}}" placeholder="Enter username">
                        @error('username')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                      <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter Mobile</label>
                        <input type="text" class="form-control form-control-sm" id="form-text" name="mobile" value="{{ old('mobile', $user->mobile)}}" placeholder="Enter mobile">
                        @error('mobile')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="form-text" class="form-label fs-14 text-dark">Enter Email</label>
                        <input type="email" class="form-control form-control-sm" id="form-text" value="{{ old('email', $user->email)}}" name="email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- <div class="mb-3">
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
                        
                    </div> -->
                    
                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
                </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection

