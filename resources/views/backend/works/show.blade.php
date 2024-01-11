@extends('backend.layouts.app')
@section('title')
    {{ $work->name }}
@endsection
@section('content')
    <div class="row">


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('admin.works.index') }}">
                        <h4 class="card-title btn btn-primary text-white">Go to back</h4>
                    </a>

                </div>

                <!--end card-header-->
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">

                            <tbody>
                                <tr>

                                    <td>Title</td>
                                    <td>{{ $work->title }}</td>


                                </tr>
                                <tr>

                                    <td>Category</td>
                                    <td>{{ $work->category }}</td>


                                </tr>
                                <tr>

                                    <td>Slug</td>
                                    <td>{{ $work->slug }}</td>


                                </tr>


                                <tr>

                                    <td>Picture</td>

                                    <td>

                                        @foreach ($work->worksPicture as $item)
                                            <img style="height: 50px;width:100px;" src="{{ $item->link }}" alt="">
                                        @endforeach


                                    </td>


                                </tr>
                                <tr>

                                    <td>Created At</td>
                                    <td>{{ $work->created_at }}</td>
                                </tr>
                                <tr>

                                    <td>Updated At</td>
                                    <td>{{ $work->updated_at }}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                    <!--end /tableresponsive-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div>
@endsection
