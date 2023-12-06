@extends('backend.layouts.app')
@section('title')
    Edit Service
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('admin.services.index') }}">
                        <div class="btn btn-success">
                            Back
                        </div>
                    </a>


                </div>

                <!--end card-header-->
                <div class="card-body">


                    {!! Form::model($service, [
                        'method' => 'PUT',
                        'route' => ['admin.services.update', $service->id],
                        'files' => true,
                    ]) !!}
                    {{-- <form method="PUT" action="{{ route('admin.services.update',$service->slug) }}"
                        enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name of service</label>
                        <input type="text" value="{{ $service->name }}" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="link">image</label>
                        <input type="file" name="link" value="{{$service->servicePicture->link}}" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="">
                        @if (!empty($service->servicePicture->link))
                            <br>
                            <img width="100px " height="50px" src="{{ $service->servicePicture->link }}" alt="">
                        @endif

                    </div>
                    <div class="mb-3">

                        <label for="slug">slug</label>
                        <input type="text" value="{{ $service->slug }}" name="slug" class="form-control"
                            id="slug" placeholder="Password">
                        <small id="slug" class="form-text text-muted">it will generate auto metically</small>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">short_description</label>
                        <textarea name="short_description" class="form-control" id="short_description" rows="3"> {{ $service->short_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="featured" id="inlineCheckbox3"checked
                                value="0" hidden>
                            <input class="form-check-input fs-3" type="checkbox" name="featured"
                                id="inlineCheckbox3"{{ $service->featured == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox3">featured</label>
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                checked value="0">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                {{ $service->published == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox4">published</label>
                        </div>

                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="status" id="inlineCheckbox6" hidden
                                value="0">

                            <input class="form-check-input fs-3" type="checkbox" name="status" id="inlineCheckbox6"
                                {{ $service->status == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox6">status <small
                                    class="text-muted text-soft-primary ">active or inactive</small> </label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1">desc</label>
                        <textarea class="ckeditor form-control" name="description">{!! $service->description !!}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="meta_title">Name of service meta_title</label>
                        <input type="text" name="meta_title" class="form-control" id="name"
                            value="{{ $service->meta_title }}" aria-describedby="emailHelp" placeholder="meta_title">
                    </div>
                    <div class="mb-3">
                        <label for="meta_title">meta_keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" id="name"
                            value="{{ $service->meta_keywords }}" aria-describedby="emailHelp"
                            placeholder="meta_keywords">
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
