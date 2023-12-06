@extends('backend.layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-9">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Total Browsed</p>
                                    <h3 class="my-1 font-20 fw-bold">{{ number_format($analytics['total_browse']) }}</h3>
                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                class="mdi mdi-trending-up"></i>Times</span></p>
                                </div>
                                <!--end col-->
                                <div class="col-3 align-self-center">
                                    <div
                                        class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-users font-24 align-self-center text-muted"></i>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Unique Visitors</p>
                                    <h3 class="my-1 font-20 fw-bold">{{ $analytics['unique_visitor_count'] }}</h3>
                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                class="mdi mdi-trending-up"></i>1.5%</span> Weekly
                                        Avg.Sessions</p>
                                </div>
                                <!--end col-->
                                <div class="col-3 align-self-center">
                                    <div
                                        class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Unique Random Visitors</p>
                                    <h3 class="my-1 font-20 fw-bold">{{ $analytics['unique_random_visitor_count'] }}</h3>
                                    <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i
                                                class="mdi mdi-trending-down"></i>35%</span> Bounce Rate
                                        Weekly</p>
                                </div>
                                <!--end col-->
                                <div class="col-3 align-self-center">
                                    <div
                                        class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-activity font-24 align-self-center text-muted"></i>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">
                                  Current  Visit
                                       </p>
                                    <h3 class="my-1 font-20 fw-bold">{{ $analytics['unique_visitor_count_today'] }}</h3>
                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                class="mdi mdi-trending-up"></i>10.5%</span> Completions
                                        Weekly</p>
                                </div>
                                <!--end col-->
                                <div class="col-3 align-self-center">
                                    <div
                                        class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-confetti font-24 align-self-center text-muted"></i>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Audience Overview</h4>
                        </div>
                        <!--end col-->

                           <!--end col-->
                           <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Anlytics<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Daily </a>
                                    <a class="dropdown-item" href="{{ route('admin.dashboard', ['month' =>true]) }}">Monthly</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="">
                        <div id="ana_dash_1" class="apex-charts"></div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Sessions Device</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Purchases</a>
                                    <a class="dropdown-item" href="#">Emails</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="text-center">
                        <div id="ana_device" class="apex-charts"></div>
                        <h6 class="bg-light-alt py-3 px-2 mb-0">
                            <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                            From App Launch Till Now
                        </h6>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table border-dashed mb-0">
                            <thead>
                                <tr>
                                    <th>Device</th>
                                    <th class="text-end">Visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dasktop</td>
                                    <td class="text-end">{{ $analytics['desktop_visitors'] }}</td>
                                </tr>

                                <tr>
                                    <td>Mobile</td>
                                    <td class="text-end">{{ $analytics['mobile_visitors'] }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                    <!--end /div-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->



    <div class="row">
      

      
            <div class="col-12">
          
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Contact Lead report</h4>


                    </div>
                    <!--end col-->
                    <div class="col text-end">
                        <a href="{{ route('admin.contacts.index') }}">
                            <h4 class="card-title btn btn-success text-white">View all</h4>
                        </a>


                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>

                                <th class="border-top-0">Contact Id</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Phone</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">is contacted</th>
                                <th class="border-top-0">View</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            @foreach ($property_contacts as $item)
                                <tr>
                                    <td>{{ $item->id  }}</td>
                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $item->name ?? 'N/G' }}</td>
                                    <td>{{ $item->phone ?? 'N/G' }}</td>
                                    <td>{{ $item->email ?? 'N/G' }}</td>
                                    <td>
                                        @if ($item->is_contacted == true)
                                            <span class="badge bg-success text-dark"> contaced</span>
                                        @else
                                            <span class="badge bg-warning text-dark">not contaced</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.contacts.show', $item->id) }}">
                                            <div class="btn btn-primary"> View </div>
                                        </a>
                                    </td>
                                </tr>
                     
                              
                                <!--end tr-->
                            @endforeach




                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    </div>
    <script>
        var visitorArray = @json(array_column($analytics['date_vs_visits'], 'visits'));
        var browseArray = @json(array_column($analytics['date_vs_visits'], 'browse'));
        var chartDateArray = @json(array_column($analytics['date_vs_visits'], 'date'));

        var mobileVsDesktopX = ['Mobile', 'Desktop'];
        var mobileVsDesktopY = [{{ $analytics['mobile_visitors'] }}, {{ $analytics['desktop_visitors'] }}];
        console.log(visitorArray);
        console.log(browseArray);
    </script>
@endsection
