@extends('backend.layouts.app')
@section('title')
    Lead Requests Details
@endsection
@section('content')
    <div class="row">


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('admin.contacts.index') }}">
                        <h4 class="card-title btn btn-primary text-white">Go to back All requests</h4>
                    </a>
                  
                </div>
               

             
          
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">

                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$requester_data->name ?? 'N/G' }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$requester_data->email ?? 'N/G' }}</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>{{$requester_data->value ?? 'N/G' }}</td>
                                </tr>
                                <tr>
                                    <td>Date time</td>
                                    <td>{{$contact_req->created_at->format('Y-m-d') }}</td>
                                </tr>
                                <tr>
                                    <td>Contact no</td>
                                    <td>{{$requester_data->id ?? 'N/G'}}</td>
                                </tr>
                                <tr>
                                    <td>Contact no</td>
                                    <td>
                                        @if ($contact_req->is_contacted == false)
                                        <span  class="badge bg-danger text-dark"> unseen</span>
                                    @else
                                     <span  class="badge bg-success text-dark">seen</span>
                                    @endif
                                    @if ($contact_req->is_contacted == false)
                                    <a href="{{ route('admin.contact.complete', $contact_req->id) }}">
                                        <div class="btn btn-success">Click to seen</div>
                                    </a>
                                    @endif
                                        </td>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
         

                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div>

@endsection
