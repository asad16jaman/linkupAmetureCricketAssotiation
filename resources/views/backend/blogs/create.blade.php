@extends('backend.layouts.app')

@section('title', 'Create Blog')

@push('css')
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/summernote-lite.min.css') }}" />
@endpush

@section('content')

    <div class="container-fluid pt-3">
        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <hr class="my-3" style="border: 1px solid #021216 !important">
        <div class="row justify-content-center">
            <div class="col-xl-12 justify-content-center">
                <div class="card custom-card">
                    <div class="card-header justify-content-between py-1"
                        style="background-color: #021216 !important; color: white !important;">
                        <div class="card-title">
                            Update About Us
                        </div>

                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.aboutUpdate', $about) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row g-4">
                                <!-- Title -->
                                <div class="col-md-4 d-flex align-items-center" style="margin-bottom: -15px!important;">
                                    <label for="title" class="form-label me-3" style="width: 30%;"><b>Title</b></label>
                                    <input type="text" class="form-control " id="title" name="title"
                                        placeholder="Enter Title" value="{{ old('title', $about->title) }}" required="">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Button Link -->
                                <div class="col-md-4 d-flex align-items-center" style="margin-bottom: -15px!important;">
                                    <label for="link" class="form-label me-3" style="width: 30%;">
                                        <b>Button Link</b>
                                    </label>
                                    <input type="url" class="form-control " id="link" name="link"
                                        placeholder="Enter Button Link" value="{{ old('link', $about->link) }}">
                                    @error('link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 d-flex align-items-center" style="margin-bottom: -15px!important;">
                                    <label for="btn_text" class="form-label me-3" style="width: 30%;">Button Text</label>
                                    <input type="text" class="form-control " id="btn_text" name="btn_text"
                                        placeholder="Enter Button Text" value="{{ old('btn_text', $about->btn_text) }}">
                                    @error('btn_text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label for="summernote" class="form-label me-3" style="width: 30%;">
                                        <b>Description</b>
                                    </label>
                                    <textarea id="summernote" name="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Image -->
                                <div class="col-md-4 d-flex align-items-center" style="margin-bottom: -15px!important;">
                                    <label for="image" class="form-label me-3" style="width: 30%;">Image</label>
                                    <div class="d-flex align-items-center">
                                        <img id="" class="img-thumbnail me-3" src="" alt="About Us Image">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="mt-4 text-end">
                                <button type="submit" class="btn btn-sm btn-primary px-4"
                                    style="font-size:12px;">Update</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>


        </div>
    </div>
@endsection


@push('js')
    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write something here...',
                height: 100,
            });
        });
    </script>
@endPush
