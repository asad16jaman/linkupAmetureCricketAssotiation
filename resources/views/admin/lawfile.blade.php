@extends('admin.layout.app')

@section('title', 'Admin Page')

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
            width: 150px;
            height: 100px;
            object-fit: contain;
            /* border: 2px dashed #ccc; */
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
  @include('admin.layout.sidebar',['page' => 'by-law'])
@endsection

@section('bodyContent')

    <div class="container">

        <div class="page-inner">

            <div class="card mb-1">
                <div class="card-header pt-1 pb-0">
                    <h6 class="text-center">Create By Law File</h6>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-2 ">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div  style="width:100%;height:300px;border:1px solid #ccc; display:flex; align-items:center; justify-content:center; font-size:14px; text-align:center;">
                                    <iframe id="file-preview" src="{{ $editItem ? asset('storage/'.$editItem->file) : '' }}" style="width:100%;height:100%;" frameborder="0"></iframe>
                                </div>
                                
                            </div>
                            <div class="col-md-6 col-12">

                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="title">Nav Name :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('navName') is-invalid
                                        @enderror" name="navName"
                                            value="{{ old('navName',optional($editItem)->navName) }}" placeholder="Enter Nav Name">
                                        @error('navName')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                        <label class="col-md-3" for="file">File <span style="color: red">( PDF)</span></label>
                                        <input class="col-md-9"  type="file" name="file" accept="application/pdf" onchange="readFile(this)"/>
                                    
                                </div>

                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-1">
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <h6 class="card-title ">By-Laws Files</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="basic-datatables_length">

                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="basic-datatables_filter" class="dataTables_filter">
                                                <label class="d-flex justify-content-end">Search:
                                                    <form id="searchform">

                                                        <input type="search" value="{{ request()->query('search') }}"
                                                            name="search" class="form-control form-control-sm"
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
                                                    <tr role="row bg-dark">
                                                        <th style="width: 136.031px;" class="p-1">SL NO:</th>
                                                        <th style="width: 214.469px;" class="p-1">Nav Name</th>
                                                        <th style="width: 214.469px;" class="p-1">File</th>
                                                        <th style="width: 81.375px;" class="p-1">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse($allData as $item)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{ $loop->iteration }}</td>
                                                            <td>
                                                                {{ $item->navName }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('storage/'.$item->file) }}" target="_blank">View File</a>
                                                            </td>
                                                            <td class="d-flex justify-content-center">

                                                                <a href="{{ route('admin.byLawFile' ,['id'=>$item->id,'page'=>request()->query('page'),'search'=>request()->query('search')]) }}"
                                                                    class="btn btn-info p-1 me-1">
                                                                    <i class="fas fa-edit iconsize"></i>
                                                                </a>

                                                                <form
                                                                    action="{{ route('admin.byLawFile.delete', ['id' => $item->id]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <!-- <input type="submit" value="Delete"> -->
                                                                    <button type="submit" class="btn btn-danger p-1 deleteBtn"><i
                                                                            class="fas fa-trash-alt iconsize"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <p>there is no By-Law File</p>

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


            </div>
        </div>

@endsection

    @push('script')
        <script>
            let noFile = "No file selected";

    function readFile(input) {
        

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const fileType = file.type;

            if (fileType === 'application/pdf') {
                // PDF preview using iframe
                let iframe = document.getElementById('file-preview');
                iframe.src = URL.createObjectURL(file);
               
                preview.appendChild(iframe);
            } else {
                preview.innerHTML = noFile;
            }
        } else {
            preview.innerHTML = noFile;
        }
    }


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