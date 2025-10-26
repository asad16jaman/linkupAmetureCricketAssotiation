@extends('admin.layout.app')

@section('title', 'Create Blog')

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .table>tbody>tr>td {
            padding: 0px !important;
            margin-bottom: 2px;
        }

        .iconsize {
            font-size: 15px;
        }

        .profileImg {
            width: auto;
            height: 100px;
            object-fit: cover;
            border: 2px dashed #ccc;
            border-radius: 6px;
        }

        .tablepicture {
            width: 30px;
            height: 30px;
            object-fit: fill;
        }

        .headbg>tr>th {
            background-color: #3c5236;
            color: #fff;
            padding: 2px !important;
            margin-bottom: 2px;
        }

        .productimages {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .preview-img {
            position: relative;
            display: inline-block;
        }

        .preview-img img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .preview-img .remove-btn {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            cursor: pointer;
        }

        .note-modal-backdrop {
            position: unset !important;
            opacity: 0 !important;
        }

        .note-modal {
            z-index: 10500 !important;
        }

        .note-dialog {
            z-index: 20000 !important;
        }
        .b_tbody tr td{
            text-align: center;
        }
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'product'])
@endsection

@section('bodyContent')
    <div class="container">
        <div class="page-inner">

            <div class="card mb-1">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Create Blog</h4>
                </div>
                <form method="post" id="productForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-6 col-12">

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="">Title :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('name') is-invalid
                                        @enderror" name="name" value="{{ old('name', optional($editItem)->name)}}"
                                            placeholder="Enter Blog Title">
                                        @error('name')
                                            <p class="text-danger">{{  $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="event_date">Event Date :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="date"
                                            class="form-control p-1 @error('event_date') is-invalid @enderror"
                                            name="event_date" value="{{ old('event_date', optional($editItem)->event_date)}}"
                                            placeholder="Enter Product Price">
                                        @error('event_date')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>


                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Blog Type :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <select name="event_type_id" id="" class="form-control p-1 @error('event_type_id') is-invalid
                                        @enderror">
                                            <!-- <option value="1">dkslk</option>
                                                            <option value="1">dkslk</option> -->
                                            <option value="">-- Select Type --</option>
                                            @if($editItem != null)
                                                @foreach ($eventTypes as $event)
                                                    <option value="{{ $event->id }}" @selected(old('event_type_id', optional($editItem)->event_type_id) == $event->id)>{{ $event->name }}
                                                    </option>
                                                @endforeach
                                            @else
                                                @foreach ($eventTypes as $category)
                                                    <option value="{{ $category->id }}"
                                                        @selected((old('event_type_id') == $category->id))>{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex justify-content-center mt-1">
                                        <label for="imageInput" style="cursor: pointer;">
                                            <!-- (placeholder) -->
                                            <img id="previewImage"
                                                src="{{ ($editItem && $editItem->picture) ? asset('storage/' . $editItem->picture) : asset('assets/admin/img/demoUpload.jpg') }}"
                                                alt="Demo Image" class="profileImg" style="">
                                        </label>

                                        <!-- hidden input -->
                                        <input type="file" name="picture" id="imageInput" accept="image/*"
                                            style="display: none;">
                                    </div>
                                    <p class="text-danger text-center" style="font-size:12px">JPG/JPEG/PNG . Ratio:1/1</p>
                                    @error('picture')
                                        <p class="text-danger text-center">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <label for="description"> Discription :</label>
                                    <textarea name="description" class="form-control summernote" rows="6"
                                        id="description">{{ old('description', optional($editItem)->description) }}</textarea>
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
                        <div class="card-header">
                            <h4 class="card-title">All Blogs</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr role="row bg-dark">
                                            <th style="width: 136.031px;">SL NO:</th>
                                            <th style="width: 35.875px;">Image</th>
                                            <th style="width: 214.469px;">Name</th>
                                            <th style="width: 214.469px;">Blog Type</th>
                                            <th style="width: 214.469px;">Date</th>
                                            <th style="width: 214.469px;">Description</th>
                                            <th style="width: 81.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="b_tbody">
                                        @forelse($allevents as $product)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $loop->iteration }}</td>
                                                            <td>
                                                                <a href="#"
                                                                    title="Click to see Review">
                                                                    <img class="tablepicture"
                                                                        src="{{ $product->picture ? asset('storage/' . $product->picture) : asset('assets/admin/img/demoProfile.png') }}"
                                                                        alt="{{ $product->name }}">
                                                                </a>
                                                            </td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->eventType->name }}</td>
                                                            <td>{{ $product->event_date }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $product->id }}">
                                                                    View
                                                                </button>
                                                            </td>
                                                            <td class="d-flex justify-content-center">
                                                                <a href="{{ route('admin.event', ['id' => $product->id, 'page' => request()->query('page'), 'search' => request()->query('search')]) }}"
                                                                    class="btn btn-info p-1 me-1">
                                                                    <i class="fas fa-edit iconsize"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('admin.event.delete', ['id' => $product->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <!-- <input type="submit" value="Delete"> -->
                                                                    <button type="button"
                                                                        class="btn btn-danger p-1 deleteBtn"><i
                                                                            class="fas fa-trash-alt iconsize"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdrop{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $product->name }}</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                               
                                                                                <h4>Description</h4>
                                                                                {!! $product->description !!}
                                                                                <hr>
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    @empty
                                                        <p>there is no Blogs</p>
                                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
        <script src="{{ asset('/assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
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

            $(document).ready(function () {
                $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['fontsize', 'color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview']]
                    ]
                });

                $("#basic-datatables").DataTable({
                    sort:false
                });
            });




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