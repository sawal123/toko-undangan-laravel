<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ERA DIGITAL</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{asset('build/assets/app-B2C0lvP0.css')}}">
  <link rel="stylesheet" href="{{asset('build/assets/aapp-CifqVuM1.js')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  {{-- <link rel="stylesheet" href="{{ asset('src/input.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/slick/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/slick/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/icon/fontawesome-free-6.5.1-web/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/icon/i8-icon/i8-icon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/owl.carousel/dist/assets/owl.carousel.min.css') }}" />

</head>

<body>
  <div class="bg-white">
    @include('frontend.master.headeer')
    @yield('content')
    @include('frontend.master.footer')
  </div>
  <div
    class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
    aria-hidden="true">
    <div
      class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
      style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
    </div>
  </div>
  </div>
  <script src="{{ asset('assets/jquery/dist/jquery.js') }}"></script>
  <script src="{{ asset('assets/javascript/sidedBar.js') }}"></script>
  <script src="{{ asset('assets/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/slick/slick/slick.js') }}"></script>
  <script src="{{ asset('assets/javascript/main.js') }}"></script>



</body>

</html>
