@extends('backend.layouts.app')
@section('title')
    Edit Brand
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('admin.brands.index') }}">
                        <div class="btn btn-success">
                            Back
                        </div>
                    </a>


                </div>

                <!--end card-header-->
                <div class="card-body">


                    {!! Form::model($service, [
                        'method' => 'PUT',
                        'route' => ['admin.brands.update', $service->id],
                        'files' => true,
                    ]) !!}
                    {{-- <form method="PUT" action="{{ route('admin.brands.update',$service->slug) }}"
                        enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name of brand</label>
                        <input type="text" value="{{ $service->name }}" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="link">image</label>
                        <input type="file" name="link" value="{{$service->brandPicture->link}}" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="">
                        @if (!empty($service->brandPicture->link))
                            <br>
                            <img width="100px " height="50px" src="{{ $service->brandPicture->link }}" alt="">
                        @endif

                    </div>
                  
                    <div class="mb-3">
      
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="status" id="inlineCheckbox6" hidden
                                value="0">

                            <input class="form-check-input fs-3" type="checkbox" name="status" id="inlineCheckbox6"
                                {{ $service->status == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox6">status <small
                                    class="text-muted text-soft-primary ">active or inactive</small> </label>
                        </div>
                    </div>

                    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}

                    </form>
                    {!! Form::close() !!}

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

    </div>
@endsection
