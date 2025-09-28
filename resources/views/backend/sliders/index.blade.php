@extends('backend.layouts.app')

@section('title', 'Sliders All')

@section('content')
    <div class="container-fluid pt-3">

         <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
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
                            Add Slider
                        </div>

                    </div>
                    <form action="{{ route('admin.sliderStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="form-text" class="form-label fs-14 text-dark">Enter Title</label>
                                    <input type="text" class="form-control form-control-sm" id="form-text"
                                        value="{{ old('title') }}" name="title" placeholder="Enter title">
                                    @error('title')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="form-text" class="form-label fs-14 text-dark">Enter Excerpt</label>
                                    <textarea name="excerpt" class="form-control form-control-sm" rows="1" id="excerpt" placeholder="Enter excerpt">{{ old('excerpt') }}</textarea>
                                    @error('excerpt')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="image" class="form-label fs-14 text-dark">
                                        Image</label>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="file" class="form-control form-control-sm" name="image"
                                                id="" onchange="previewImage(event, 'sliderImagePreview')">
                                        </div>
                                        <div class="col-md-4">
                                            <img id="sliderImagePreview" class="img-thumbnail me-3"
                                                style="width: 50px; height: 50px;" src="" alt="slider">
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-end">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between py-1"
                        style="background-color: #021216 !important; color: white !important;">
                        <div class="card-title">
                            Sliders
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">S.No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Excerpt</th>
                                        <th scope="col">Image</th>
                                        <th scope="col" class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($sliders->currentPage() - 1) * $sliders->perPage() + 1;
                                    @endphp
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <th scope="row" class="text-center">
                                                {{ $i++ }}
                                            </th>
                                            <td>
                                                {{ Str::limit($slider->title, 20, '...') }}
                                            </td>
                                            <td> {{ Str::limit($slider->excerpt, 30, '...') }}</td>
                                            <td>
                                                <img src="{{ route('imagecache', ['template' => 'ppxs', 'filename' => $slider->fi()]) }}">
                                            </td>
                                            <td class="text-left d-flex">
                                                <a href="{{ route('admin.sliderEdit', $slider) }}"
                                                    class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                                    data-bs-target="#sliderModal{{ $slider->id }}">Edit</a>
                                                <form action="{{ route('admin.sliderDelete', $slider) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure to delete?');"
                                                    class="dropdown-item p-0 m-0">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        style="text-decoration:none;">
                                                        Delete
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>

                                        <div class="modal fade" id="sliderModal{{ $slider->id }}" tabindex="-1"
                                            aria-labelledby="sliderModalLabel{{ $slider->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"
                                                        style="background-color: #021216 !important; color: white !important;">
                                                        <h6 class="modal-title" id="exampleModalLabel1">
                                                            <span style="color: white">Slider Edit</span>
                                                        </h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('admin.sliderUpdate', $slider) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-2">
                                                                <label for="title{{ $slider->id }}">Title</label>
                                                                <input type="text" name="title"
                                                                    id="title{{ $slider->id }}"
                                                                    placeholder="Title here"
                                                                    class="form-control form-control-sm"
                                                                    value="{{ old('title', $slider->title) }}" required>
                                                                @error('title')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-2">
                                                                <label for="excerpt{{ $slider->id }}">Excerpt</label>
                                                                <textarea name="excerpt" class="form-control form-control-sm" rows="2" id="excerpt"
                                                                    placeholder="Enter excerpt">{{ old('excerpt', $slider->excerpt) }}</textarea>
                                                                @error('excerpt')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-2">
                                                                <label for="excerpt{{ $slider->id }}">Active</label>
                                                                <input type="checkbox" name="active"
                                                                    {{ $slider->active == 1 ? 'checked' : ' ' }}>
                                                            </div>

                                                            <div class="mb-3 col-md-4">
                                                                <label for="image" class="form-label fs-14 text-dark">
                                                                    Image</label>
                                                                <input type="file" class="form-control form-control-sm"
                                                                    name="image" id="form-password" onchange="previewImage(event, 'sliderImagePreview')">


                                                                @if($slider->image)
                                                                    <img id="sliderImagePreview" src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $slider->fi()]) }}" >
                                                                @endif

                                                                @error('image')
                                                                    <span class="text-danger">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

@push('js')
    <script>
        function previewImage(event, previewId) {

            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const preview = document.getElementById(previewId);
                preview.src = reader.result;
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>
@endpush
