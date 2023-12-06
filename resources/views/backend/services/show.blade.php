@extends('backend.layouts.app')
@section('title')
    {{$service->name}}
@endsection
@section('content')
    <div class="row">


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                 <a href="{{route('admin.services.index')}}">  <h4 class="card-title btn btn-primary text-white">Go to back</h4></a>

                </div>

                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">

                            <tbody>
                                <tr>

                                    <td>Name</td>
                                    <td>{{ $service->name }}</td>


                                </tr>
                                <tr>

                                    <td>Slug</td>
                                    <td>{{ $service->name }}</td>


                                </tr>
                                @dd ($service->brandPicture)
                                {{-- <tr>

                                    <td>Picture</td>
                                    <td> <img style="height: 50px;width:100px;"src="{{ $service->brandPicture->link }}"
                                            alt=""> </td>


                                </tr> --}}
                                <tr>
                                    <td>published</td>
                                    <td>

                                        @if (  $service->published ==1)
                                        <span class="badge rounded-pill bg-success fs-6">  Published</span>

                                        @else
                                        <span class="badge rounded-pill bg-danger fs-6">Not Published</span>
                                        @endif


                                    </td>
                                </tr>
                                <tr>

                                    <td>active status</td>
                                    <td>


                                        @if (  $service->status ==1)
                                        <span class="badge rounded-pill bg-success fs-6">  Active</span>

                                        @else
                                        <span class="badge rounded-pill bg-danger fs-6">In Active</span>
                                        @endif

                                    </td>


                                </tr>
                                <tr>
                                    <td>Featured</td>
                                    <td>
                                        @if (    $service->featured ==1)
                                        <span class="badge rounded-pill bg-success fs-6">  published</span>

                                        @else
                                        <span class="badge rounded-pill bg-danger fs-6">Not published</span>
                                        @endif

                                     </td>
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
