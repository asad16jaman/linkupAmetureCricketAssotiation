@extends('backend.layouts.app')

@section('title', 'Setting Edit')

@section('content')
    <div class="container-fluid">
        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>

                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">System Information</li>
                        </ol>
                    </nav>
                </div>
            </div>
          
        </div>

        <hr class="my-2" style="border: 1px solid #d2d3d3  !important">
      
        <div class="row mx-auto">
            <div class="col-xl-12 w3-text-white">
                <form action="{{ route('admin.settingUpdate', $ws->id) }}" method="POST" enctype="multipart/form-data"
                    novalidate>
                    @csrf
                    <div class="card shadow-sm" style="background: #ffffff">
                        <div class="card-header bgcolorstyle" style="background-color: #021216 !important;">
                            <h6 class="mb-0" style="color: white"><b>System Information</b></h6>
                        </div>

                        <div class="card-body p-4 ">
                            <!-- Form Start -->
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="title" class="col-md-4 col-form-label">Title</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="title"
                                                        name="title" placeholder="Enter title" value="{{ old('title', $ws->title) }}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="contact_address" class="col-md-4 col-form-label">Address</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="contact_address"
                                                        name="contact_address" placeholder="Enter Contact Address"
                                                        value="{{ old('contact_address', $ws->contact_address) }}"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="mobile" class="col-md-4 col-form-label">Phone</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="mobile"
                                                        name="contact_mobile" placeholder="Enter Phone Number"
                                                        value="{{ old('contact_mobile', $ws->contact_mobile) }}"
                                                        required="">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="contact_email" class="col-md-4 col-form-label">Email</label>
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control " id="contact_email"
                                                        name="contact_email" placeholder="Enter Email"
                                                        value="{{ old('contact_email', $ws->contact_email) }}"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="facebook_url" class="col-md-4 col-form-label">Facebook
                                                    URl</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="facebook_url"
                                                        name="facebook_url" placeholder="Enter Facebook URL (Optional)"
                                                        value="{{ old('facebook_url', $ws->facebook_url) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="twitter_url" class="col-md-4 col-form-label">Twitter URl</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="twitter_url"
                                                        name="twitter_url" placeholder="Enter URL Twitter (Optional)"
                                                        value="{{ old('twitter_url', $ws->twitter_url) }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="instagram_url" class="col-md-4 col-form-label">Instagram
                                                    URl</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="instagram_url"
                                                        name="instagram_url" placeholder="Enter URL Instagram (Optional)"
                                                        value="{{ old('instagram_url', $ws->instagram_url) }}">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="youtube_url" class="col-md-4 col-form-label">Youtube
                                                    URl</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="youtube_url"
                                                        name="youtube_url" placeholder="Enter URL Youtube (Optional)"
                                                        value="{{ old('youtube_url', $ws->youtube_url) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="google_url" class="col-md-4 col-form-label">Google</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="google_url"
                                                        name="google_url" placeholder="Enter Google URL (Optional)"
                                                        value="{{ old('google_url', $ws->google_url) }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="google_map" class="col-md-4 col-form-label">Google map</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="google_map"
                                                        name="google_map" placeholder="Enter URL (Optional)"
                                                        value="{{ old('google_map', $ws->google_map) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <div class="row mb-3">
                                                <label for="office_hour" class="col-md-4 col-form-label">Office
                                                    hour</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control " id="office_hour"
                                                        name="office_hour" placeholder="Enter office hour"
                                                        value="{{ old('office_hour', $ws->office_hour) }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <!-- Copyright Section -->
                                            <div class="mb-4">
                                                <div class="row mb-3">
                                                    <label for="copyright"
                                                        class="col-md-4 col-form-label">Copyright</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control " id="copyright"
                                                            name="copyright" placeholder="Enter copyright text"
                                                            value="{{ old('copyright', $ws->copyright) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <!-- Favicon Upload -->
                                            <div class="row mb-3">
                                                <label for="favicon_image" class="col-md-4 col-form-label">FavIcon</label>
                                                <div class="col-md-8">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image Preview -->
                                                        <img id="faviconPreview" class="img-thumbnail me-3"
                                                            src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $ws->favicon()]) }}" alt="FavIcon">
                                                        <!-- Input Field -->
                                                        <input type="file" name="favicon" id="favicon"
                                                            class="form-control">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="margin-bottom: -10px!important;">
                                            <!-- H. Logo Upload -->
                                            <div class="row mb-3">
                                                <label for="company_logo" class="col-md-4 col-form-label">Logo</label>
                                                <div class="col-md-8">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Logo Preview -->
                                                        <img src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $ws->logo()]) }}" class="img-thumbnail me-3" alt="H. Logo">
                                                        <!-- Input Field -->
                                                        <input type="file" name="logo" id="logo"
                                                            class="form-control ">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="text-end" style="margin-bottom: -10px!important;">
                                    <button type="submit" class="btn btn-sm btn-primary" style="font-size:12px;">Update
                                        info</button>
                                </div>
                            </form>
                            <!-- Form End -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
