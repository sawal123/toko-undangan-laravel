<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8" />
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <link href="{{asset('admin/assets/libs/mobius1-selectr/selectr.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables.net/css/dataTables.bootstrap5.css') }}">


    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body">

    @include('backend.app.leftbar')
    @include('backend.app.topbar')

    @yield('content')

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>

    {{-- <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/js/pages/analytics-index.init.js') }}"></script>

    {{-- <script src="{{ asset('admin/assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/datatable.init.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/libs/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net/js/dataTables.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net/js/dataTables.bootstrap5.js')}}"></script>

    <!-- App js -->

    <script src="{{asset('admin/assets/libs/mobius1-selectr/selectr.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/forms-advanced.js')}}"></script>

    <script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/form-editor.init.js')}}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>


</body>
<!--end body-->

</html>
