@extends('backend.layouts.app')
@section('title')
    Contact Requests
@endsection
@section('css')
    <link href={{ asset('backend/assets/libs/simple-datatables/style.css') }} rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="text-end mb-4">
            <a href="{{ route('admin.dashboard') }}">
                <div class="btn btn-warning fs-4">Back To Dashboard</div>
            </a>
        </div>



        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> All Leads By Contact </h4>

                    </div><!--end card-header-->
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table" id="datatable_2">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">message</th>
                                        <th class="border-top-0">Date</th>

                                        <th class="border-top-0">Phone</th>
                                       

                                        <th class="border-top-0">View Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($message as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email ?? 'N/G' }}</td>
                                            <td>{{ $data->value }}</td>
                                            <td>{{ $data->created_at->format('Y-m-d') }}</td>

                                            <td class="text-danger">{{ $data->phone ?? 'N/G' }}</td>
                                           
                                            <td>
                                                @if ($data->is_contacted == false)
                                                    <span class="badge bg-danger text-dark"> unseen</span>
                                                @else
                                                    <span class="badge bg-success text-dark">seen</span>
                                                @endif
                                            </td>

                                            <td>
                                                <!-- In your HTML file -->
                                                <div class="d-flex space-between">
                                                    <span>
                                                        <a href="{{ route('admin.contacts.show', $data->id) }}">
                                                            <div class="btn btn-info">View Full</div>
                                                        </a> <br>
                                                    </span>

                                                    <span class="gap-between-spans" style=" margin-left: 10px;">
                                                        @if ($data->is_contacted == false)
                                                            <a href="{{ route('admin.contact.complete', $data->id) }}">
                                                                <div class="btn btn-success">Click to seen</div>
                                                            </a>
                                                        @endif
                                                    </span>
                                                </div>

                                            </td>
                                        </tr>
                                        <!--end tr-->
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
    @endsection
    @section('script')
        <script src={{ asset('backend/assets/libs/simple-datatables/umd/simple-datatables.js') }}></script>
        <script src={{ asset('backend/assets/js/pages/datatable.init.js') }}></script>
    @endsection
