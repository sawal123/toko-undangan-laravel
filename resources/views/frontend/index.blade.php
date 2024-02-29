@extends('frontend.master.app')
@section('content')
<section>
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        aria-hidden="true">
        <div
          class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
      <div class="mx-auto max-w-7xl  ">
        <!-- Hero section -->
        <div class="grid gap-4 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
          <div class="xl:py-52 lg:py-52 pt-36 max-w-full">
            <h1 class="font-bold lg:text-start text-center text-slate-700">Ayo Buat Undangan Pernikahan kamu!,
              Kualitas Bukan
              Kaleng-Kaleng</h1>
            <button
              class="transition delay-75 duration-50  w-full lg:w-52 px-4 py-2 bg-blue-500 text-white rounded-lg mt-5 hover:bg-blue-700 hover:ring-2 hover:ring-blue-400">Hubungi
              Kami</button>
          </div>
          <div class="mt-5 xl:mt-0">
            <img src="./assets/images/img1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1"
      d="M0,0L34.3,26.7C68.6,53,137,107,206,117.3C274.3,128,343,96,411,69.3C480,43,549,21,617,64C685.7,107,754,213,823,224C891.4,235,960,149,1029,144C1097.1,139,1166,213,1234,208C1302.9,203,1371,117,1406,74.7L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
    </path>
  </svg>



  <section>
    <div class="text-center mb-7">
      <h2 class="font-bold text-slate-700">Undangan Favorite</h2>
      <p class="text-slate-700">Undangan ini paling banyak dipesan oleh costumer</p>
    </div>
    <div class="center mt-5 mb-10">
      <div class=" rounded-lg ring-1 ">
        <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
      </div>
      <div class=" rounded-lg ring-1 ">
        <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold">MQ 13</p>
          <div class="flex justify-between">
            <p>Rp1.000</p>
            <span>Stok: 12</span>
          </div>
        </div>
      </div>
      <div class=" rounded-lg ring-1 ">
        <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold">MQ 13</p>
          <div class="flex justify-between">
            <p>Rp1.000</p>
            <span>Stok: 12</span>
          </div>
        </div>
      </div>
      <div class=" rounded-lg ring-1 ">
        <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold">MQ 13</p>
          <div class="flex justify-between">
            <p>Rp1.000</p>
            <span>Stok: 12</span>
          </div>
        </div>
      </div>
      <div class=" rounded-lg ring-1 ">
        <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold">MQ 13</p>
          <div class="flex justify-between">
            <p>Rp1.000</p>
            <span>Stok: 12</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===========Kategori -->
  <section class="my-2 lg:px-8">
    <h2 class="text-center font-bold">Kategori</h2>
    <div class="overflow-x-auto">
      <div class="flex justify-center">
        <a href="#" class="mx-2">
          <div
            class="w-full text-center   ring-1 rounded-lg px-4 py-2 m-2  cursor-pointer hover:shadow-md text-slate-500 hover:text-slate-700">
            Lintang
          </div>
        </a>
        <a href="#" class="mx-2">
          <div
            class="w-full text-center   ring-1 rounded-lg px-4 py-2 m-2  cursor-pointer hover:shadow-md text-slate-500 hover:text-slate-700">
            Jago
          </div>
        </a>
        <a href="#" class="mx-2">
          <div
            class="w-full text-center   ring-1 rounded-lg px-4 py-2 m-2  cursor-pointer hover:shadow-md text-slate-500 hover:text-slate-700">
            MQ Set
          </div>
        </a>
        <a href="#" class="mx-2">
          <div
            class="w-full text-center   ring-1 rounded-lg px-4 py-2 m-2  cursor-pointer hover:shadow-md text-slate-500 hover:text-slate-700">
            ERBA
          </div>
        </a>

      </div>
    </div>

  </section>

  <section class="bg-slate-100 rounded-ss-full rounded-ee-full">
    <div class="grid md:grid-cols-1 lg:grid-cols-2 mt-3">
      <div class="p-20">
        <img class="rounded-lg mx-auto md:max-w-full lg:min-w-96" src="./assets/images/undangan.png" alt="">
      </div>
      <div class="p-5 my-auto">
        <h2 class="font-bold text-slate-700">Harga Murah, Banyak Bonus <br>
          Hemat waktu, tenaga, dan hemat biaya
        </h2>
        <ul class="mt-5 text-slate-700">
          <li><i class="far fa-check-circle"></i> Bisa Cetak Tanpa minimal</li>
          <li><i class="far fa-check-circle"></i> Free Plastik Undangan</li>
          <li><i class="far fa-check-circle"></i> Free Undangan Digital</li>
          <li><i class="far fa-check-circle"></i> Free Undangan Animasi</li>
          <li><i class="far fa-check-circle"></i> Free Kartu Punjungan</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="my-2 lg:px-8 text-slate-700">
    <h2 class="font-bold text-center my-10">Pertanyaan yang sering diajukan</h2>
    <div class="grid lg:grid-rows-1 md:grid-cols-1 gap-4 xl:mx-80 md:mx-20 mx-8">
      <div class=" p-2 ring-2 ring-blue-500 rounded-lg overflow-hidden">
        <button class="w-full ac">
          <div class="flex justify-between cursor-pointer p-2 w-full ">
            <p class=" font-bold">Apakah ini Gratis Ongkir?</p>
            <i class="fas fa-arrow-right p-0 m-0 my-auto transform transition duration-300 delay-75  "></i>

          </div>
        </button>

        <div class="p-2 hidden transition-opacity  delay-100 duration-500  ease-in-out subAc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus eius aperiam amet,
            molestias rem animi expedita id sapiente. Architecto dolorum eos illum dicta dolorem repellat placeat
            aliquam laboriosam harum.</p>
        </div>
      </div>
      <div class=" p-2 ring-2 ring-blue-500 rounded-lg overflow-hidden">
        <button class="w-full ac">
          <div class="flex justify-between cursor-pointer p-2 w-full ">
            <p class=" font-bold">Apakah ini Gratis Ongkir?</p>
            <i class="fas fa-arrow-right p-0 m-0 my-auto transform transition duration-300 pnh"></i>

          </div>
        </button>

        <div class="p-2 hidden transition-opacity  delay-100 duration-500  ease-in-out subAc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus eius aperiam amet,
            molestias rem animi expedita id sapiente. Architecto dolorum eos illum dicta dolorem repellat placeat
            aliquam laboriosam harum.</p>
        </div>
      </div>
      <div class=" p-2 ring-2 ring-blue-500 rounded-lg overflow-hidden">
        <button class="w-full ac">
          <div class="flex justify-between cursor-pointer p-2 w-full ">
            <p class=" font-bold">Apakah ini Gratis Ongkir?</p>
            <i class="fas fa-arrow-right p-0 m-0 my-auto  transform transition duration-300 pnh"></i>

          </div>
        </button>

        <div class="p-2 hidden transition-opacity  delay-100 duration-500  ease-in-out subAc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus eius aperiam amet,
            molestias rem animi expedita id sapiente. Architecto dolorum eos illum dicta dolorem repellat placeat
            aliquam laboriosam harum.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="my-2 mb-20">
    <div class="text-center mt-32">
      <h2 class="font-bold">Testimonial</h2>
      <p>Apakah kata costumer tentang produk kami?</p>
    </div>
    <div class="owl-carousel owl-teme">
      <div class="p-5 ring-1 rounded-lg  mx-2">
        <div class="heading text-start mb-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit nisi explicabo porro maxime natus saepe amet
          sed rem modi incidunt! Consequuntur sunt nam deserunt rerum laborum facere, neque corrupti iste.
        </div>
        <div class="flex">
          <img class="w-10 h-10 rounded-full object-cover" style="width: 2.5rem !important;"
            src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
          <div class="text-start ms-2 my-auto">
            <div class="font-bold p-0 m-0">Hendro Satrio</div>
            <div class="text-slate-500 p-0 m-0">Order Lintang 31</div>
          </div>
        </div>
      </div>
      <div class="p-5 ring-1 rounded-lg  mx-2">
        <div class="heading text-start mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quis. Minima voluptatibus velit sed cumque,
          labore ipsam molestiae, at iusto cupiditate ipsa architecto qui repellat perferendis hic quam placeat ex?
        </div>
        <div class="flex">
          <img class="w-10 h-10 rounded-full object-cover" style="width: 2.5rem !important;"
            src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="">
          <div class="text-start ms-2 my-auto">
            <div class="font-bold p-0 m-0">Hendro Satrio</div>
            <div class="text-slate-500 p-0 m-0">Order Lintang 31</div>
          </div>
        </div>
      </div>

    </div>

  </section>
@endsection