<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/output.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./src/input.css">
    <link rel="stylesheet" href="assets/icon/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets//i8-icon/i8-icon.css">



</head>

<body>
    <div class="bg-white">

        <div class="flex justify-center items-center sm:p-32  lg:p-52">
            <div class="grid lg:grid-cols-2 sm:grid-cols-1 shadow-lg p-16 rounded-xl">
                <div class="gambar">
                    <img src="https://img.freepik.com/free-vector/web-development-concept-with-programmer-ar_107791-17049.jpg?t=st=1709133848~exp=1709137448~hmac=f08d4523cc2728bcdd9c5dafc6c114b7965eaafe76605f6fdb3460b222aebeb7&w=1380"
                        alt="">
                </div>
                <div class="login">
                    <div class="my-2">
                        <h2 class="font-bold">Login to ERA DIGITAL</h2>
                        <span>Akses Super Admin Anda!</span> @error('message')
                            <span class="font-bold text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <form action="{{ url('authLogin') }}" method="POST" class="grid grid-rows-2 gap-4 mt-4 ">
                        @csrf
                        <input type="email" name="email" class="px-4 py-2 rounded-md ring-1"
                            placeholder="Typing Email...">

                        <input type="password" name="password" class="px-4 py-2 rounded-md ring-1"
                            placeholder="Typing Password...">
                        <button type="submit"
                            class=" hover:bg-blue-600 transition ease-in-out hover:ring-2 w-full bg-blue-500 text-white rounded-md py-2">Login</button>
                    </form>
                    <hr class="my-5 pe-8">
                    <p class="text-center mb-3">Or Login With</p>
                    <div style="width: 100%">
                        <form action="{{ url('/auth/google') }}" method="get">
                            @csrf
                            <button type="submit"
                                class="hover:bg-blue-600 transition ease-in-out hover:ring-2 w-full bg-blue-500 text-white rounded-md py-2">
                                <i class="fab fa-google" style="color: #ffffff;"></i> Google
                            </button>
                        </form>

                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    </div>

    <script src="./assets/jquery/dist/jquery.js"></script>
    <script src="./assets/javascript/main.js"></script>



</body>

</html>
