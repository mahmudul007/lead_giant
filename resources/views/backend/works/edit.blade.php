@extends('backend.layouts.app')
@section('title')
    {{ $work->name }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-header text-end">
                        <a href="{{ route('admin.works.index') }}">
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
                    {!! Form::model($work, [
                        'method' => 'PUT',
                        'route' => ['admin.works.update', $work->id],
                        'files' => true,
                    ]) !!}

                    <div class="mb-3">
                        <label for="title">Title of Blog</label>
                        <input type="text" value="{{ $work->title }}" name="title" class="form-control"
                            id="title" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="category">category Of work</label>
                        <input type="text" name="category" class="form-control" value="{{ $work->category  }}"
                            id="category" placeholder="">

                    </div>

                    <div class="mb-3">
                        <label>
                            <h5>Uploaded images</h5>
                        </label>

                        @foreach ($work->worksPicture as $item)
                            <ul>
                                <li> <img src="{{ $item->link }}" width="100px " height="50px" alt="">
                                    <a onclick="return confirm ('are you sure to delete this?')"
                                        href="{{ route('admin.works.singleimage.delete', $item->id) }}">
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
