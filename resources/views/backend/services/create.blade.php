@extends('backend.layouts.app')
@section('title')
   Create Brand +
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-3">Brand you work with create +</h4>
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
                        <label for="name">Name of Brand</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="link">image</label>
                        <input type="file" name="link" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">
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


                  <div>
                    <button type="submit" class="btn btn-de-primary">Submit</button>
                    <button type="button" class="btn btn-de-danger">Cancel</button>
                  </div>
                </form>

            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div>

@endsection



