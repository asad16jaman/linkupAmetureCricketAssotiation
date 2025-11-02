@extends('admin.layout.app')

@section('title', 'Create Home Data')

@section('style')
    <style>
        .profileImg {
            width: auto;
            height: 100px;
            object-fit: cover;
            border: 2px dashed #ccc;
            border-radius: 6px;
        }
    </style>
@endsection

@section('bodyContent')


    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Home Page Data</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="title">Title :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" id="title"
                                            class="form-control p-1 @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title', optional($home)->title)}}"
                                            placeholder="Title Of The Section">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="impact">Impact :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control @error('impact') is-invalid @enderror" name="impact"
                                            id="impact" rows="6">{{ old('impact', optional($home)->impact) }}</textarea>
                                        @error('impact')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Crickters :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text"
                                            class="form-control p-1 @error('total_crickter') is-invalid @enderror"
                                            value="{{ old('total_crickter', optional($home)->total_crickter) }}"
                                            name="total_crickter" placeholder="Enter Total Crickters">
                                    </div>
                                    @error('total_crickter')
                                        <p class="text-danger text-end">{{ $message }}</p>
                                    @enderror
                                </div>

                                 <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Ad Section Title :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text"
                                            class="form-control p-1 @error('advertis_title') is-invalid @enderror"
                                            value="{{ old('advertis_title', optional($home)->advertis_title) }}"
                                            name="advertis_title" placeholder="Enter Title">
                                    </div>
                                    @error('advertis_title')
                                        <p class="text-danger text-end">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="row mb-2">
                                    <div class="col-md-12 col-12 d-flex justify-content-center mt-1">
                                        <label for="imageInput" style="cursor: pointer;">
                                            <!-- (placeholder) -->
                                            <img id="previewImage"
                                                src="{{ ($home && $home->img) ? asset('storage/' . $home->img) : asset('assets/admin/img/demoUpload.jpg')}}"
                                                alt="Demo Image" class="profileImg" style="">
                                        </label>
                                        <!-- hidden input -->
                                        <input type="file" name="img" id="imageInput" accept="image/*"
                                            style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'homedata'])
@endsection

@push('script')
    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        })
    </script>
@endpush