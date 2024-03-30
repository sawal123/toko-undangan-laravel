<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8" />
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @vite('resources/css/app.css')
  
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <link href="{{ asset('admin/assets/libs/mobius1-selectr/selectr.min.css') }}" rel="stylesheet" type="text/css" />

   


    <link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables.net/css/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables.net/css/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables.net/css/buttons.dataTables.css') }}">
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


    <script src="{{ asset('admin/assets/libs/datatables.net/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net/js/buttons.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net/js/dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net/js/dataTables.bootstrap5.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> --}}

    <!-- App js -->

    <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/sweet-alert.init.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/mobius1-selectr/selectr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/forms-advanced.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/form-editor.init.js') }}"></script>


    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/ecommerce-index.init.js')}}"></script>



    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/showModal.js') }}"></script>
    <script src="{{ asset('admin/js/modalCostumer.js') }}"></script>
    <script src="{{ asset('admin/js/sweetAlert.js') }}"></script>


   

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Horeee!!!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            })
        </script>
    @endif

   
</body>
<!--end body-->

</html>
