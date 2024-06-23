@extends('backend.layouts.main')
@section('title', 'Projects')
@section('content')
    <div class="container-fluid grid-container">

        <main class="content ">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Client</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->details }}</td>
                                        <td>{{ $project->category }}</td>
                                        <td>{{ $project->client }}</td>
                                        <td>{{ $project->link }}</td>
                                        <td>
                                            <img src="/backend/images/projects/{{ $project->image }}"
                                                class="rounded-circle border border-info" width="50px" height="50px"
                                                alt="Image Not Found">
                                        </td>
                                        <td>
                                            @if ($project->status == 1)
                                                <span class="badge badge-success p-2">Active</span>
                                            @else
                                                <span class="badge badge-danger p-2">Disabled</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/project-edit/{{ $project->id }}"
                                                class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>Edit
                                            </a>
                                            <form method="post" class="d-inline"
                                                action="/admin/project-delete/{{ $project->id }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-circle btn-sm"
                                                    onClick="return confirm('Are you sure you want to delete this record?');"
                                                    title="Delete Record">
                                                    <i class="fas fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">

                            <a href="{{ url('/admin/projectadd') }}" class="btn btn-info btn-sm shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Add New Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection
