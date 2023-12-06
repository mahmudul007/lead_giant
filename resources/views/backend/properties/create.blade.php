@extends('backend.layouts.app')
@section('title')
    Create Property
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-3">Property Create</h4>
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



                    {!! Form::open(['route' => 'admin.properties.store', 'method' => 'POST', 'files' => true]) !!}

                    <div class="mb-3">
                        <label for="title">Titel Of blog</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="title"
                            placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="category">category Of blog</label>
                        <input type="text" name="category" class="form-control" value="{{ old('category') }}"
                            id="category" placeholder="">

                    </div>
                    <div class="mb-3">
                        <h4 class="text-success"> <ins>Add picture? Choose file in below</ins> <span class="text-warning">
                                (Ctrl+select multiple)</span> </h4>
                        <input type="file" class="form-control"value="{{ old('images[]') }}" name="images[]" multiple>
                    </div>

                    <div class="mb-3" hidden>

                        <label for="slug">slug</label>
                        <input type="text" name="slug" class="form-control"value="{{ old('slug') }}" id="slug"
                            placeholder="slug">
                        <small id="slug" class="form-text text-muted">it will generate auto metically</small>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            &nbsp; &nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input fs-3" type="checkbox" name="featured"
                                    id="inlineCheckbox3"checked value="0" hidden>
                                <input class="form-check-input fs-3" type="checkbox" name="featured"
                                    id="inlineCheckbox3"checked value="1">
                                <label class="form-check-label fs-3" for="inlineCheckbox3">featured</label>
                            </div>
                            &nbsp; &nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                    checked value="0">
                                <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4"
                                    checked value="1">
                                <label class="form-check-label fs-3" for="inlineCheckbox4">published</label>
                            </div>


                        </div>

                        <hr>
                        <div class="mb-3 mt-2">
                            <label for="exampleInputPassword1">
                                <h4>Blog Text</h4>
                            </label>
                            <textarea class="ckeditor form-control" name="blogtext">{{ old('blogtext') }}</textarea>

                        </div>


                        <div class="btn text-end">
                            {!! Form::submit('Submit', ['class' => 'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

        </div>
    @endsection
