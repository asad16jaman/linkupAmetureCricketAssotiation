@extends('backend.layouts.app')

@section('title', 'Team Members')

@section('content')

    <div class="container-fluid">

        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Cetegory</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
                          Cetegory
                        </div>
                    </div>
                    <form action="{{ route('admin.categoryStore') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="slug" class="col-md-3 col-form-label"><b>Slug</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control " id="slug" name="slug"
                                                placeholder="Enter slug" value="{{ old('slug') }}" required="">
                                        </div>
                                        @error('slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-6" style="margin-bottom: -10px!important;">
                                    <label for="excerpt" class="form-label me-3" style="width: 30%;">
                                        <b>Excerpt</b>
                                    </label>
                                    <textarea name="short_description" id="excerpt" class="form-control form-control-sm" rows="2"
                                        placeholder="Enter excerpt">{{ old('excerpt') }}</textarea>
                                    @error('excerpt')
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

@endPush
