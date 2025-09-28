@extends('backend.layouts.app')

@section('title', 'Sliders All')

@section('content')
<div class="container-fluid pt-3">
     <div class="row justify-content-center">
        <div class="col-xl-12 justify-content-center">
            <div class="card custom-card">
                <div class="card-header justify-content-between py-1" style="background-color: #021216 !important; color: white !important;">
                    <div class="card-title">
                       Add New Category
                    </div>
                   
                </div>
                <form action="{{ route('admin.categoryStore')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="form-text" class="form-label fs-14 text-dark">Enter Title</label>
                            <input type="text" class="form-control form-control-sm" id="form-text" value="{{ old('title')}}" name="title" placeholder="Enter title">
                            @error('title')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                       <div class="col-md-4 d-flex align-items-center" style="margin-bottom: -15px;">
                            <label for="status" class="form-label me-3" style="width: 20%;">Status</label>
                            <select class="form-select " id="status" name="status" required="">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                       
                     </div>
                    
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
                </form>
               
            </div>
        </div>


    </div>
    

</div>
@endsection

