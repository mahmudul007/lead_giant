@extends('backend.layouts.app')
@section('title')
    Create Works
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-3">Works Create</h4>
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



                    {!! Form::open(['route' => 'admin.works.store', 'method' => 'POST', 'files' => true]) !!}

                    <div class="mb-3">
                        <label for="title">Titel Of works</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="title"
                            placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="category">category Of works</label>
                        <input type="text" name="category" class="form-control" value="{{ old('category') }}"
                            id="category" placeholder="">

                    </div>
                    <div class="mb-3">
                        <h4 class="text-success"> <ins>Add picture? Choose file in below</ins> <span class="text-warning">
                                </span> </h4>
                        <input type="file" class="form-control"value="{{ old('images[]') }}" name="images[]" multiple>
                    </div>

                    <div class="mb-3" hidden>

                        <label for="slug">slug</label>
                        <input type="text" name="slug" class="form-control"value="{{ old('slug') }}" id="slug"
                            placeholder="slug">
                        <small id="slug" class="form-text text-muted">it will generate auto metically</small>
                    </div>

                    <div class="row">
                      

                     


                        <div class="btn text-start">
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
