@extends('backend.layouts.app')

@section('title', 'Team Members')

@section('content')

    <div class="container-fluid">

        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Team Member</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add New Team Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <hr class="my-2" style="border: 1px solid #d2d3d3  !important">

        <div class="row justify-content-center">
            <div class="col-xl-12 justify-content-center">
                <div class="card custom-card">
                    <div class="card-header justify-content-between py-1"
                        style="background-color: #021216 !important; color: white !important;">
                        <div class="card-title">
                            Add New Team Member
                        </div>

                    </div>
                    <form action="{{ route('admin.teamMemberStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-3 col-form-label"><b>Name</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control " id="name" name="name"
                                                placeholder="Enter Name" value="{{ old('name') }}"
                                                required="">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                        
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="mobile" class="col-md-3 col-form-label"><b>Mobile</b></label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control " id="mobile" name="mobile"
                                                placeholder="Enter mobile" value="{{ old('mobile') }}" required="">
                                        </div>
                                        @error('mobile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                        
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="designation" class="col-md-3 col-form-label"><b>Email</b></label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control " id="email" name="email"
                                                placeholder="Enter email" value="{{ old('email') }}" required="">
                                        </div>
                                        @error('mobile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                             
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="role" class="col-md-3 col-form-label"><b>Role</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control " id="role" name="role"
                                                placeholder="Enter role" value="{{ old('role') }}" required="">
                                        </div>
                                        @error('role')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-3 col-form-label"><b>Image</b></label>
                                        <div class="col-md-9">
                                            <div class="d-flex align-items-center">
                                                <img id="memberImagePreview" class="img-thumbnail me-3"
                                                    style="width: 50px; height: 50px;" src="" alt="">
                                                <input type="file" name="image" id="image" class="form-control"
                                                    onchange="previewImage(event, 'memberImagePreview')">
                                            </div>
                                        </div>

                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6" style="margin-bottom: -10px!important;">
                                    <label for="description" class="form-label me-3" style="width: 30%;">
                                        <b>Address</b>
                                    </label>
                                    <textarea name="short_description" id="address" class="form-control form-control-sm" rows="2"
                                        placeholder="Enter address">{{ old('address') }}</textarea>
                                    @error('address')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6" style="margin-bottom: -10px!important;">
                                    <label for="description" class="form-label me-3" style="width: 30%;">
                                        <b>Short Description</b>
                                    </label>
                                    <textarea name="short_description" id="short_description" class="form-control form-control-sm" rows="2"
                                        placeholder="Enter short description">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-end">
                            <button class="btn btn-primary btn-sm px-5" type="submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>
@endsection
@push('js')
    <script>
        function previewImage(event, previewId) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function () {
                const preview = document.getElementById(previewId);
                preview.src = reader.result;
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endPush
