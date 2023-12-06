@extends('backend.layouts.app')
@section('title')
    Index
@endsection
@section('css')
    <link href={{ asset('backend/assets/libs/simple-datatables/style.css') }} rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="text-end mb-4">
        <a href="{{ route('admin.services.create') }}">
            <div class="btn btn-success">Create service +</div>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="datatable_1">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>slug</th>

                        <th>published</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>

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
                                        <a href="{{ route('admin.services.edit', $item->id) }}">
                                            <div class="btn btn-success">Edit</div>
                                        </a>
                                    </div>
                                    &nbsp; &nbsp;
                                    <div>
                                        {{ Form::open(['route' => ['admin.services.destroy', $item->id], 'method' => 'delete']) }}
                                        <div class="btn btn-danger"
                                            onclick="return confirm ('are you sure to delete this?')" type="submit">Delete
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                    &nbsp; &nbsp;
                                    <div>
                                        <a href="{{ route('admin.services.publish', [$item->id]) }}">

                                                @if ($item->published == 1)
                                                <div class="btn btn-danger text-white">
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
                                        <a href="{{ route('admin.services.show', [$item->id]) }}">
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
@endsection
@section('script')
    <script src={{ asset('backend/assets/libs/simple-datatables/umd/simple-datatables.js') }}></script>
    <script src={{ asset('backend/assets/js/pages/datatable.init.js') }}></script>
@endsection
