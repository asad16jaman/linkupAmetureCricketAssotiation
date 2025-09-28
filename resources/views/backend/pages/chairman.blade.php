@extends('backend.layouts.app')

@section('title', 'Update Message')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('backend/assets/css/summernote-lite.min.css') }}" /> --}}
@endpush

@section('content')

    <div class="container-fluid pt-3">
        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Chairman</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chairman Update</li>
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
                            Update Chairman
                        </div>

                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.chairmanMessageUpdate', $chairman) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                           
                            <div class="row">
                                <!-- Owner Name -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label"><b>Name</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control " id="name" name="name"
                                                placeholder="Enter Owner Name" value="{{ old('name', $chairman->name) }}" required="">
                                        </div>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Education -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="education" class="col-md-4 col-form-label"><b>Education</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control " id="education" name="education"
                                                placeholder="Enter Education" value="{{ old('education', $chairman->education) }}" required="">
                                        </div>
                                        @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Designation -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="designation" class="col-md-4 col-form-label"><b>Designation</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control " id="designation" name="designation"
                                                placeholder="Enter Designation" value="{{ old('designation', $chairman->designation) }}" required="">
                                        </div>
                                        @error('designation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Organization -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="organization" class="col-md-4 col-form-label"><b>Organization</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control " id="organization"
                                                name="organization" placeholder="Enter Organization"
                                                value="{{ old('organization', $chairman->organization) }}" required="">
                                        </div>
                                        @error('organization')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Contact Number -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="contact_number" class="col-md-4 col-form-label"><b>Contact</b></label>
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control " id="contact_number"
                                                name="contact_number" placeholder="Enter Contact Number" value="{{ old('name', $chairman->name) }}"
                                                required="">
                                        </div>
                                        @error('contact_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                               
                             

                                 <!-- Organization -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="link" class="col-md-4 col-form-label"><b>Button Link</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="link"
                                                name="link" placeholder="Enter link"
                                                value="{{ old('link', $chairman->link) }}" required="">
                                        </div>
                                        @error('link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="btn_text" class="col-md-4 col-form-label"><b>Button Text</b></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control " id="btn_text"
                                                name="btn_text" placeholder="Enter text url"
                                                value="{{ old('btn_text', $chairman->btn_text) }}" required="">
                                        </div>
                                        @error('btn_text')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Owner Image -->
                                <div class="col-md-4" style="margin-bottom: -10px!important;">
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-form-label"><b>Image</b></label>
                                        <div class="col-md-8">
                                            <div class="d-flex align-items-center">
                                                    <img id="ownerImagePreview" class="img-thumbnail me-3"
                                                    style="width: 50px; height: 50px;" 
                                                    src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $chairman->fi()]) }}" 
                                                    alt="{{$chairman->name}}">
                                                <input type="file" name="image" id="image"
                                                class="form-control" onchange="previewImage(event, 'ownerImagePreview')">
                                            </div>
                                        </div>

                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="summernote" class="form-label me-3" style="width: 30%;">
                                        <b>Description</b>
                                    </label>
                                    <textarea id="summernote" name="description">{!! old('btn_text', $chairman->description) !!}</textarea>
                                    @error('description')
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
