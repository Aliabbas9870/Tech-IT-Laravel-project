{{-- @extends('backend.layouts.main')
@section('content')
@extends('title','faqs') --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs List ali</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>


    <br>
    <div class="row">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, obcaecati modi quasi nisi eos
            laboriosam autem quod, culpa quam doloremque iste. Totam, illo nihil. Odio molestias voluptatibus quos totam
            tenetur.</p>
        <div class="col-9">
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">
                            <a class="text-info" href="{{ url('/admin') }}">Main Menu</a> | FAQs List
                        </h6>
                        <a href="{{ url('/admin/faq-add') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm float-right">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add FAQs
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th width="160px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr>
                                            <td>{{ $faq->id }}</td>
                                            <td>{{ $faq->question }}</td>
                                            <td>{{ $faq->answer }}</td>
                                            <td>
                                                @if ($faq->status == 1)
                                                    <a href="#">
                                                        <span class="badge badge-success p-2">Active</span>
                                                    </a>
                                                @else
                                                    <a href="#">
                                                        <span class="badge badge-danger p-2">Disabled</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/admin/faq-edit/{{ $faq->id }}"
                                                    class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form method="post" class="d-inline"
                                                    action="/admin/faq-delete/{{ $faq->id }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-circle btn-sm"
                                                        onClick="return confirm('Are you sure you want to Delete Record');"
                                                        title="Delete Record">
                                                        <i class="fas fa-trash"></i>
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
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
