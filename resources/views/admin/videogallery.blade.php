@extends('admin.layout.app')

@section('title', 'Create Video Gallery')

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
        height: 100px; 
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
  @include('admin.layout.sidebar',['page' => 'v-gallery'])
@endsection

@section('bodyContent')

    <div class="container">

        <div class="page-inner">

            <div class="card mb-1">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Create Gallery</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body px-3 py-1">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="title">Video Url</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('video_url') is-invalid
                                        @enderror" name="video_url"
                                            value="{{ $editgallery ? $editgallery->video_url : "" }}" placeholder="Enter Video Url">
                                        @error('video_url')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="duration">Duration</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('duration') is-invalid
                                        @enderror" name="duration"
                                            value="{{ $editgallery ? $editgallery->duration : "" }}" placeholder="Enter Video duration">
                                        @error('duration')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-12">
                                <div class="col-md-12 d-flex justify-content-center">
                                
                                <div class="row">
                                    
                                    <div class="col-md-8 col-12 d-flex justify-content-center mt-1">
                                        <!-- hidden input -->
                                        <div>
                                            <label for="">Thumbnail</label>
                                            <input type="file" class="form-control" name="img" id="imageInput" accept="image/*">
                                        </div>
                                        @error('img')
                                            <p class="text-danger text-center">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-4 col-12 d-flex justify-content-center mt-1">
                                         <label>
                                            <!-- (placeholder) -->
                                            <img id="previewImage" 
                                                src="{{ ($editgallery && $editgallery->img) ? asset('storage/'.$editgallery->img ) : asset('assets/admin/img/demoUpload.jpg') }}" 
                                                alt="Demo Image" 
                                                class="profileImg"
                                                style="">
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                           <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <h5 class="card-title ">All Galleries</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 offset-md-6 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <label class="d-flex justify-content-end">Search:
                                                    <form>
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
                                                        <th style="width: 214.469px;">Thumbnail</th>
                                                        <th style="width: 214.469px;">Duration</th>
                                                        <th style="width: 214.469px;">Url</th>
                                                        <th style="width: 81.375px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($allgallery as $gallery)
                                                    <tr role="row" class="odd" >
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img class="tablepicture" src="{{ $gallery->img ? asset('storage/'.$gallery->img)  : asset('assets/admin/img/demoProfile.png') }}" alt="user profile picture">
                                                        </td>
                                                        <td>{{ $gallery->duration }}</td>
                                                        <td>{{ $gallery->video_url }}</td>
                                                        <td class="d-flex justify-content-center">
                                                            
                                                            <a href="{{   route('admin.videogallery' ,['id'=>$gallery->id,'page'=>request()->query('page'),'search'=>request()->query('search')])  }}" class="btn btn-info p-1 me-1">
                                                                <i class="fas fa-edit iconsize"></i>
                                                            </a>

                                                            <form action="{{ route('admin.videogallery.delete',['id'=>$gallery->id]) }}" method="post">
                                                                @csrf
                                                                <!-- <input type="submit" value="Delete"> -->
                                                                 <button type="submit" class="btn btn-danger p-1 deleteBtn"><i class="fas fa-trash-alt iconsize"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <p>there is no Gallery</p>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-12 d-flex justify-content-end me-2">
                                            @if ($allgallery->previousPageUrl())
                                                <a href="{{ $allgallery->previousPageUrl() }}"
                                                    class="btn btn-primary mx-2 p-1"><i class="fas fa-hand-point-left"></i></a>
                                            @endif

                                            @if ($allgallery->nextPageUrl())
                                                <a href="{{ $allgallery->nextPageUrl() }}" class="btn btn-primary mx-2 p-1"><i
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