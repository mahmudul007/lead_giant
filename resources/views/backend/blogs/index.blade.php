@extends('backend.layouts.app')
@section('title')
    Blogs
@endsection
@section('css')
    <link href={{ asset('backend/assets/libs/simple-datatables/style.css') }} rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="text-end mb-4">
            <a href="{{ route('admin.blogs.create') }}">
                <div class="btn btn-success fs-4">Create Blogs +</div>
            </a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blogs Details </h4>

                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable_1">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th>slug</th>
                                    <th>Featured</th>
                                    <th>published</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>

                                        <td>

                                            @if ($item->featured == 1)
                                                <span class="badge badge-soft-success fs-6">Active</span>
                                            @else
                                                <span class="badge badge-soft-danger fs-6">In Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->published == 1)
                                                <span class="badge badge-soft-success fs-6">Published</span>
                                            @else
                                                <span class="badge badge-soft-danger fs-6">not Published</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <a href="{{ route('admin.blogs.edit', $item->id) }}">
                                                        <div class="btn btn-success">Edit</div>
                                                    </a>
                                                </div>
                                                &nbsp; &nbsp;
                                                <div>
                                                    <form action="{{ route('admin.blogs.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm ('are you sure to delete this?')"
                                                            type="submit">Delete</button>
                                                    </form>

                                                </div>
                                                &nbsp; &nbsp;
                                                <div>
                                                    <a href="{{ route('admin.blogs.publish', [$item->id]) }}">

                                                        @if ($item->published == 1)
                                                            <div class="btn btn-warning text-white">
                                                                Unpublish
                                                            </div>
                                                        @else
                                                            <div class="btn btn-success text-white">
                                                                Publish
                                                            </div>
                                                        @endif


                                                    </a>
                                                </div>
                                                &nbsp; &nbsp;
                                                <div>
                                                    <a href="{{ route('admin.blogs.show', [$item->id]) }}">
                                                        <div class="btn btn-dark text-white">Show</div>
                                                    </a>
                                                </div>
                                            </div>





                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <script src={{ asset('backend/assets/libs/simple-datatables/umd/simple-datatables.js') }}></script>
    <script src={{ asset('backend/assets/js/pages/datatable.init.js') }}></script>
@endsection
