@extends('backend.layouts.app')

@section('title', 'Team Members')

@section('content')
    <div class="container-fluid pt-3">

        <div class="my-2 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">List</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <hr class="my-2" style="border: 1px solid #d2d3d3  !important">
        <div class="row">
            <div class="col-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between py-1"
                        style="background-color: #021216 !important; color: white !important;">
                        <div class="card-title">
                            Team Members
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Image</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($teams->currentPage() - 1) * $teams->perPage() + 1;
                                    @endphp
                                    @foreach ($teams as $team)
                                        <tr>
                                            <th scope="row" class="text-center">
                                                {{ $i++ }}
                                            </th>
                                            <td>
                                                {{ $team->name }}
                                            </td>
                                            <td>{{ $team->email }}</td>
                                            <td>{{ $team->mobile }}</td>
                                            <td>{{ $team->role }}</td>
                                            <td> <img
                                                    src="{{ route('imagecache', ['template' => 'ppsm', 'filename' => $team->fi()]) }}">
                                            </td>
                                            <td class="text-left d-flex">
                                                <a href="{{ route('admin.teamMemberEdit', $team) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                                <form action="{{ route('admin.teamMemberDelete', $team) }}"
                                                    method="POST" onsubmit="return confirm('Are you sure to delete?');"
                                                    class="dropdown-item p-0 m-0">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        style="text-decoration:none;">
                                                        Delete
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>
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
