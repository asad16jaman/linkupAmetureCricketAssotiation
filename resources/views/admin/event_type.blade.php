@extends('admin.layout.app')

@section('title', 'Admin Page')

@section('style')
<style>
    .table > tbody > tr > td{
        padding: 0px !important;
        margin-bottom: 2px;
    }
    .iconsize{
        font-size: 15px;
    }
    .profileImg{
        width: auto;
        height: 75px; 
        object-fit: cover;
        border: 2px dashed #ccc;
        border-radius: 6px;
    }
    .tablepicture{
        width: 30px;
        height: 30px;
        object-fit: fill;
    }
     .headbg > tr > th{
        background-color: #3c5236;
        color: #fff;
        padding: 2px !important;
        margin-bottom: 2px;
    }
</style>
@endsection

@section('pageside')
  @include('admin.layout.sidebar',['page' => 'brand'])
@endsection

@section('bodyContent')
    <div class="container">
        <div class="page-inner" style="min-height:80vh">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card mb-1">
                        <div class="card-header pt-1 pb-0">
                            <h4 class="text-center">Create Blog Type</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body p-3 ">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="">
                                            <label for="email2">Type :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <input type="text" class="form-control p-1 @error('name') is-invalid
                                                @enderror"  name="name" value="{{ old('name',optional($edititem)->name)  }}"
                                                    placeholder="Enter Event Type">
                                        @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 col-12">
                                        <input type="submit" value="Submit" class="btn btn-primary me-3 p-1">
                                    </div>
                                </div>
                                    {{-- 
                                        <div class="col-md-4 col-12">
                                        <div class="col-md-12 d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center mt-1">
                                                <label for="imageInput" style="cursor: pointer;">
                                                    <!-- (placeholder) -->
                                                    <img id="previewImage" 
                                                        src="{{ $edititem ? asset('storage/'.$edititem->img) :  asset('assets/admin/img/demoUpload.jpg') }}" 
                                                        alt="Demo Image" 
                                                        class="profileImg"
                                                        style="">
                                                </label>
                                                <!-- hidden input -->
                                                <input type="file" name="img" id="imageInput" name="image" accept="image/*" style="display: none;">
                                            </div>
                                            <p class="text-danger text-center" style="font-size:12px;margin-bottom:0px">JPG/JPEG/PNG . Ratio:3/2</p>
                                            @error('img')
                                                    <p class="text-danger text-center">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <p></p> -->
                                    </div>
                                    --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-12 g-md-0">
                    <div class="card">
                        <div class="card-header p-2">
                            <h5 class="card-title ">All Blog Type</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 offset-md-6 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <label class="d-flex justify-content-end">Search:
                                                    <form method="GET">
                                                       
                                                        <input type="search" value="{{ request()->query('search') }}" name="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="basic-datatables">
                                                    </form>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="basic-datatables"
                                                class="display table table-striped table-hover dataTable" role="grid"
                                                aria-describedby="basic-datatables_info">
                                                <thead class="headbg">
                                                    <tr role="row bg-dark" >
                                                        <th style="width: 136.031px;">SL NO:</th>
                                                        {{-- <th style="width: 214.469px;">Picture</th> --}}
                                                        <th style="width: 214.469px;">Type</th>
                                                        <th style="width: 81.375px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($allitems as $brand)
                                                    <tr role="row" class="odd" >
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        {{-- <td>
                                                            <img class="tablepicture" src="{{ $brand->logo ? asset('storage/'.$brand->logo)  : asset('assets/admin/img/demoProfile.png') }}" alt="user profile picture">
                                                        </td> --}}
                                                        <td>{{ $brand->name }}</td>
                                                        
                                                        <td class="">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <a href="{{  route('admin.event' ,['id'=>$brand->id,'page'=>request()->query('page'),'search'=>request()->query('search')])  }}" class="btn btn-info p-1 me-1">
                                                                    <i class="fas fa-edit iconsize"></i>
                                                                </a>
                                                                <form action="{{ route('admin.event.delete',['id'=>$brand->id]) }}" method="post">
                                                                    @csrf
                                                                    <!-- <input type="submit" value="Delete"> -->
                                                                    <button type="button" class="btn btn-danger p-1 deleteBtn"><i class="fas fa-trash-alt iconsize"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <p>there is no Blogs Type</p>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end me-2">
                                            @if ($allitems->previousPageUrl())
                                                <a href="{{ $allitems->previousPageUrl() }}"
                                                    class="btn btn-primary mx-2 p-1"><i class="fas fa-hand-point-left"></i></a>
                                            @endif
                                            @if ($allitems->nextPageUrl())
                                                <a href="{{ $allitems->nextPageUrl() }}" class="btn btn-primary mx-2 p-1"><i
                                                        class="fas fa-hand-point-right "></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('script')
    <script>
        
        $(document).on("click", ".deleteBtn", function (e) {
                    e.preventDefault();
                    let form = $(this).closest("form"); // nearest form select korbe
                    swal({
                        title: "Are you sure?",
                        text: "You Want To Delete",
                        icon: "warning",
                        buttons: {
                            cancel: {
                                text: "Cancel",
                                visible: true,
                                className: "btn btn-danger"
                            },
                            confirm: {
                                text: "Yes, delete it!",
                                className: "btn btn-success"
                            }
                        },
                        dangerMode: true,
                    }).then((willDelete) => {
                        console.log(willDelete)
                        if (willDelete) {
                            form.submit(); // confirm hole form submit hobe
                        }
                    });
        });
    </script>

@endpush