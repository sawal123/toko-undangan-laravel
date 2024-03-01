@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Metrica</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Analytics</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Analytics</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="text-dark mb-0 fw-semibold">Sessions</p>
                                                <h3 class="my-1 font-20 fw-bold">24k</h3>
                                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                            class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today
                                                </p>
                                            </div><!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-users font-24 align-self-center text-muted"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="text-dark mb-0 fw-semibold">Avg.Sessions</p>
                                                <h3 class="my-1 font-20 fw-bold">00:18</h3>
                                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                            class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions
                                                </p>
                                            </div><!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                                                </div>
                                            </div> <!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="text-dark mb-0 fw-semibold">Bounce Rate</p>
                                                <h3 class="my-1 font-20 fw-bold">$2400</h3>
                                                <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i
                                                            class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly
                                                </p>
                                            </div><!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-activity font-24 align-self-center text-muted"></i>
                                                </div>
                                            </div> <!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="text-dark mb-0 fw-semibold">Goal Completions</p>
                                                <h3 class="my-1 font-20 fw-bold">85000</h3>
                                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                                            class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly
                                                </p>
                                            </div><!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-confetti font-24 align-self-center text-muted"></i>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                        </div><!--end row-->
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Audience Overview</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                This Year<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="">
                                    <div id="ana_dash_1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Sessions Device</h4>
                                    </div><!--end col-->
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
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="ana_device" class="apex-charts"></div>
                                    <h6 class="bg-light-alt py-3 px-2 mb-0">
                                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                        01 January 2020 to 31 December 2020
                                    </h6>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table class="table border-dashed mb-0">
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th class="text-end">Sassions</th>
                                                <th class="text-end">Day</th>
                                                <th class="text-end">Week</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dasktops</td>
                                                <td class="text-end">1843</td>
                                                <td class="text-end">-3</td>
                                                <td class="text-end">-12</td>
                                            </tr>
                                            <tr>
                                                <td>Tablets</td>
                                                <td class="text-end">2543</td>
                                                <td class="text-end">-5</td>
                                                <td class="text-end">-2</td>
                                            </tr>
                                            <tr>
                                                <td>Mobiles</td>
                                                <td class="text-end">3654</td>
                                                <td class="text-end">-5</td>
                                                <td class="text-end">-6</td>
                                            </tr>

                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Live Visits Our New Site</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="circlechart" class="apex-charts"></div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <h4 class="card-title mt-0 mb-2">Traffic Sources</h4>
                                            <div class="traffic-card">
                                                <h4 class="my-2">80</h4>
                                                <p class="mb-2 fw-semibold">Right Now</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-auto align-self-center">
                                            <ul class="list-unstyled url-list mb-0">
                                                <li>
                                                    <i class="fas fa-caret-right font-16 text-primary"></i>
                                                    <span>Organic</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-caret-right font-16 text-success"></i>
                                                    <span>Direct</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-caret-right font-16 text-gray"></i>
                                                    <span>Campaign</span>
                                                </li>
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="progress mb-1">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                            role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                            aria-valuemax="100">55%</div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
                                        <div class="progress-bar bg-soft-secondary" role="progressbar" style="width: 17%"
                                            aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">17%</div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Pages View by Users</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group custom-list-group">
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="assets/images/small/rgb.svg" height="30"
                                                class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Dastone - Admin Dashboard</h6>
                                                <p class="mb-0 text-muted">analytic-index.html</p>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <a href="" class="btn btn-sm btn-soft-primary">4.3k <i
                                                    class="las la-external-link-alt font-15"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="assets/images/small/cobweb.svg" height="30"
                                                class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Metrica Simple- Admin Dashboard</h6>
                                                <p class="mb-0 text-muted">sales-index.html</p>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <a href="" class="btn btn-sm btn-soft-primary">3.7k <i
                                                    class="las la-external-link-alt font-15"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="assets/images/small/blocks.svg" height="30"
                                                class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Crovex - Admin Dashboard</h6>
                                                <p class="mb-0 text-muted">helpdesk-index.html</p>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <a href="" class="btn btn-sm btn-soft-primary">2.9k <i
                                                    class="las la-external-link-alt font-15"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="assets/images/small/atom.svg" height="30"
                                                class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Annex - Admin Dashboard</h6>
                                                <p class="mb-0 text-muted">calendar.html</p>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <a href="" class="btn btn-sm btn-soft-primary">1.6k <i
                                                    class="las la-external-link-alt font-15"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h2 class="m-0 align-self-center">80</h2>
                                    <div class="d-block ms-2 align-self-center">
                                        <span class="text-warning">Right now</span>
                                        <h5 class="my-1">Traffic Sources</h5>
                                        <p class="mb-0 text-muted">It is a long established fact that a reader will
                                            be of a page when looking at its layout.
                                            <a href="" class="text-primary">Read More <i
                                                    class="las la-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Activity</h4>
                                    </div><!--end col-->
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
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-bodyp-0">
                                <div class="p-3" data-simplebar style="height: 400px;">
                                    <div class="activity">
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-clock bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">10 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">50 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src="assets/images/users/user-5.jpg" alt=""
                                                    class="rounded-circle thumb-sm">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="">Mannat #112233</a> with theme
                                                        market
                                                    </p>
                                                    <small class="text-muted">10 hours ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">14 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src="assets/images/users/user-4.jpg" alt=""
                                                    class="rounded-circle thumb-sm">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="">Mannat #112233</a> with theme
                                                        market
                                                    </p>
                                                    <small class="text-muted">15 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end activity-->
                                </div><!--end analytics-dash-activity-->
                            </div> <!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Browser Used & Traffic Reports</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive browser_users">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Channel</th>
                                                <th class="border-top-0">Sessions</th>
                                                <th class="border-top-0">Prev.Period</th>
                                                <th class="border-top-0">% Change</th>
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="" class="text-primary">Organic search</a></td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                                <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="" class="text-primary">Direct</a></td>
                                                <td>2545<small class="text-muted">(47%)</small></td>
                                                <td>498<small class="text-muted">(81%)</small></td>
                                                <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>

                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="" class="text-primary">Referal</a></td>
                                                <td>1836<small class="text-muted">(38%)</small></td>
                                                <td>455<small class="text-muted">(74%)</small></td>
                                                <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="" class="text-primary">Email</a></td>
                                                <td>1958<small class="text-muted">(31%)</small></td>
                                                <td>361<small class="text-muted">(61%)</small></td>
                                                <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><a href="" class="text-primary">Social</a></td>
                                                <td>1566<small class="text-muted">(26%)</small></td>
                                                <td>299<small class="text-muted">(49%)</small></td>
                                                <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table> <!--end table-->
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Browser Used & Traffic Reports</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive browser_users">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Browser</th>
                                                <th class="border-top-0">Sessions</th>
                                                <th class="border-top-0">Bounce Rate</th>
                                                <th class="border-top-0">Transactions</th>
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/images/logos/chrome.png" alt=""
                                                        height="16" class="me-2">Chrome</td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td> 52.80%</td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="assets/images/logos/micro-edge.png" alt=""
                                                        height="16" class="me-2">Microsoft Edge</td>
                                                <td>2545<small class="text-muted">(47%)</small></td>
                                                <td> 47.54%</td>
                                                <td>498<small class="text-muted">(81%)</small></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="assets/images/logos/in-explorer.png" alt=""
                                                        height="16" class="me-2">Internet-Explorer</td>
                                                <td>1836<small class="text-muted">(38%)</small></td>
                                                <td> 41.12%</td>
                                                <td>455<small class="text-muted">(74%)</small></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="assets/images/logos/opera.png" alt=""
                                                        height="16" class="me-2">Opera</td>
                                                <td>1958<small class="text-muted">(31%)</small></td>
                                                <td> 36.82%</td>
                                                <td>361<small class="text-muted">(61%)</small></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><img src="assets/images/logos/chrome.png" alt=""
                                                        height="16" class="me-2">Chrome</td>
                                                <td>10853<small class="text-muted">(52%)</small></td>
                                                <td> 52.80%</td>
                                                <td>566<small class="text-muted">(92%)</small></td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table> <!--end table-->
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

            </div><!-- container -->

            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                    <button type="button" class="btn-close text-reset p-0 m-0 align-self-center"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h6>Account Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->

            <!--Start Footer-->
            <!-- Footer Start -->
            <footer class="footer text-center text-sm-start">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with
                    <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
            <!-- end Footer -->
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
@endsection
