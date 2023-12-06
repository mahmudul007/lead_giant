@extends('backend.layouts.app')
@section('title')
    {{ $property->name }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-header text-end">
                        <a href="{{ route('admin.blogs.index') }}">
                            <h4 class="card-title btn btn-success text-white">Go to back</h4>
                        </a>

                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!--end card-header-->
                <div class="card-body">
                    {!! Form::model($property, [
                        'method' => 'PUT',
                        'route' => ['admin.blogs.update', $property->id],
                        'files' => true,
                    ]) !!}

                    <div class="mb-3">
                        <label for="title">Title of Blog</label>
                        <input type="text" value="{{ $property->title }}" name="title" class="form-control"
                            id="title" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="category">category Of blog</label>
                        <input type="text" name="category" class="form-control" value="{{ $property->category  }}"
                            id="category" placeholder="">

                    </div>

                    <div class="mb-3">
                        <label>
                            <h5>Uploaded images</h5>
                        </label>

                        @foreach ($property->blogPicture as $item)
                            <ul>
                                <li> <img src="{{ $item->link }}" width="100px " height="50px" alt="">
                                    <a onclick="return confirm ('are you sure to delete this?')"
                                        href="{{ route('admin.blogs.singleimage.delete', $item->id) }}">
                                        <p class="btn btn-danger">delete</p>
                                    </a>
                                </li>

                            </ul>
                        @endforeach
                        <h4 class="text-success"> <ins>Add new picture? Choose file in below</ins> <span
                                class="text-warning"> (Ctrl+select multiple)</span> </h4>
                        <input type="file" class="form-control" name="images[]" multiple>
                    </div>

                    <hr>
                   
 
                    <hr>

                    <div class="mb-3">
                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="featured"
                                id="inlineCheckbox3"checked value="0" hidden>
                            <input class="form-check-input fs-3" type="checkbox" name="featured"
                                id="inlineCheckbox3"{{ $property->featured == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox3">featured</label>
                        </div>
                        &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                checked value="0">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                {{ $property->published == '1' ? 'checked' : '' }} value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox4">published</label>
                        </div>

                       
                    </div>

                    <hr>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputPassword1">
                            <h4>Blog text</h4>
                        </label>
                        <textarea class="ckeditor form-control" name="blogtext">{!! $property->blogtext !!}</textarea>

                    </div>



                    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}


                    {!! Form::close() !!}

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

    </div>
@endsection
