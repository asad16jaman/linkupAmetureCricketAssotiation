@extends('admin.layout.app')

@section('title', 'Create Management')

@section('style')
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
            height: 50px;
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
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'management'])
@endsection
@section('bodyContent')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Create Management</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Name :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('name') is-invalid
                                        @enderror" name="name" value="{{ old('name', optional($editTeam)->name)  }}"
                                            placeholder="Enter Full Name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Designation :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1  @error('designation') is-invalid
                                        @enderror" name="designation"
                                            value="{{  old('designation', optional($editTeam)->designation)  }}"
                                            placeholder="Enter Designation">
                                        @error('designation')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Email :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1  @error('email') is-invalid
                                        @enderror" name="email"
                                            value="{{  old('email', optional($editTeam)->email)  }}"
                                            placeholder="Enter Email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6 col-12">

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Facebook :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1  @error('facebook_url') is-invalid
                                        @enderror" name="facebook_url"
                                            value="{{  old('facebook_url', optional($editTeam)->facebook_url)  }}"
                                            placeholder="Enter Facebook Url">
                                        @error('facebook_url')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3 d-flex justify-content-center mt-1">
                                        <label style="cursor: pointer;" class="me-2">
                                            <!-- (placeholder) -->
                                            Picture :
                                        </label>
                                    </div>
                                    <div class="col-9">
                                        <!-- hidden input -->
                                        <div class="me-3">
                                            <input type="file" class="form-control" name="photo" id="imageInput"
                                                accept="image/*">
                                        </div>
                                        <img id="previewImage"
                                            src="{{ $editTeam ? asset('storage/' . $editTeam->photo) : asset('assets/admin/img/demoProfile.png') }}"
                                            alt="Demo Image" class="profileImg" style="">
                                        @error('photo')
                                            <p class="text-danger text-center">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 mt-2 ms-2"> 
                                <label for="description">Detail :</label>
                                <textarea name="bio" class="form-control  $error('speech') is-invalid $enderror"  id="description">{{ old('speech',optional($editTeam)->bio) }}</textarea>      
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Management</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead class="headbg">
                                        <tr role="row bg-dark">
                                            <th style="width: 136.031px;">SL NO:</th>
                                            <th style="width: 214.469px;">Picture</th>
                                            <th style="width: 214.469px;">Name</th>
                                            <th style="width: 214.469px;">Designation</th>
                                            <th style="width: 214.469px;">Detail</th>
                                            <th style="width: 81.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($allteam as $team)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img class="tablepicture"
                                                        src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/admin/img/demoProfile.png') }}"
                                                        alt="user profile picture">
                                                </td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->designation }}</td>
                                                <td>
                                                    <a href="">Detail</a>
                                                </td>


                                                <td class="d-flex justify-content-center">

                                                    <a href="{{ route('admin.management', ['id' => $team->id, 'page' => request()->query('page'), 'search' => request()->query('search')]) }}"
                                                        class="btn btn-info p-1 me-1">
                                                        <i class="fas fa-edit iconsize"></i>
                                                    </a>

                                                    <form action="{{ route('admin.management.delete', ['id' => $team->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- <input type="submit" value="Delete"> -->
                                                        <button type="submit" class="btn btn-danger p-1 deleteBtn"><i
                                                                class="fas fa-trash-alt iconsize"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>there is no Management</p>

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
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <script src="{{ asset('/assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
        <script>

            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                        console.error('CKEditor Error:', error);
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
           
            $(document).ready(function(){
                 $("#basic-datatables").DataTable({
                sort: false
            });
            })


        </script>

    @endpush