@extends('backend.layouts.app')
@section('title')
   Create Service
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-3">Service Create</h4>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div><!--end card-header-->
            <div class="card-body">


                <form method="post" action="{{route('admin.services.store')}}" accept-charset="UTF-8"    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name of service</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="link">image</label>
                        <input type="file" name="link" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="mb-3">

                        <label for="slug">slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Password">
                        <small id="slug"   class="form-text text-muted">it will generate auto metically</small>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">short_description</label>
                        <textarea name="short_description" class="form-control" id="short_description" rows="3"></textarea>
                      </div>
                    <div class="mb-3">
                        &nbsp;  &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="featured" id="inlineCheckbox3"checked value="0" hidden>
                            <input class="form-check-input fs-3" type="checkbox" name="featured" id="inlineCheckbox3"checked value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox3">featured</label>
                        </div>
                        &nbsp;  &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4" checked value="0">
                            <input class="form-check-input fs-3" type="checkbox" name="published" id="inlineCheckbox4" checked value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox4">published</label>
                        </div>

                        &nbsp;  &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input fs-3" type="checkbox" name="status"  id="inlineCheckbox6" hidden value="0">
                            <input class="form-check-input fs-3" type="checkbox" name="status"  id="inlineCheckbox6" checked value="1">
                            <label class="form-check-label fs-3" for="inlineCheckbox6">status <small class="text-muted text-soft-primary ">active or inactive</small> </label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1">desc</label>
                        <textarea class="ckeditor form-control" name="description"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="meta_title">Name of service meta_title</label>
                        <input type="text" name="meta_title" class="form-control" id="name" aria-describedby="emailHelp" placeholder="meta_title">
                    </div>
                    <div class="mb-3">
                        <label for="meta_title">meta_keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" id="name" aria-describedby="emailHelp" placeholder="meta_keywords">
                    </div>

                    <button type="submit" class="btn btn-de-primary">Submit</button>
                    <button type="button" class="btn btn-de-danger">Cancel</button>

                </form>

            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div>

@endsection



