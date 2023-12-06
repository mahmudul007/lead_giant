@extends('backend.layouts.app')
@section('title')
    {{ $property->name }}
@endsection
@section('content')
    <div class="row">


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('admin.properties.index') }}">
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
                                    <td>{{ $property->title }}</td>


                                </tr>
                                <tr>

                                    <td>Slug</td>
                                    <td>{{ $property->slug }}</td>


                                </tr>


                                <tr>

                                    <td>Picture</td>

                                    <td>

                                        @foreach ($property->blogPicture as $item)
                                            <img style="height: 50px;width:100px;" src="{{ $item->link }}" alt="">
                                        @endforeach


                                    </td>


                                </tr>
                                <tr>
                                    <td>published</td>
                                    <td>

                                        @if ($property->published == 1)
                                            <span class="badge rounded-pill bg-success fs-6"> Published</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger fs-6">Not Published</span>
                                        @endif


                                    </td>
                                </tr>
                                <tr>

                                    <td>Featured</td>
                                    <td>


                                        @if ($property->featured == 1)
                                            <span class="badge rounded-pill bg-success fs-6"> Featured</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger fs-6">Not Featured</span>
                                        @endif

                                    </td>


                                </tr>



                                <tr>
                                    <td>Blog </td>
                                    <td>{!! $property->blogtext !!}</td>
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
