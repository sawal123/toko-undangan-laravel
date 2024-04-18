@extends('frontend.master.app')
@section('content')
<section class="mt-32">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
      <div class="p-5  lg:w-1/2 sm:w-full  mx-auto">
          <!-- <img class=" rounded-xl shadow-lg h-full w-full  object-cover  mx-auto"  src="https://img.lazcdn.com/g/p/14216a5eb1dd9121ec1f262a402c9b1f.jpg_720x720q80.jpg" alt=""> -->
          <img id="expandedImg" src="https://id-test-11.slatic.net/p/ecdeba8be182faa9dfae647a67619c2a.jpg"  class="rounded-xl shadow-lg lg:h-auto sm:h-1/2 w-full  object-cover  mx-auto">
          <div class="flex overflow-x-auto my-6">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//96/MTA-61495521/no-brand_undangan-blangko-erba-88199_full01.jpg" alt="a" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="data:image/jpeg;base64,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" alt="b" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://img.ws.mms.shopee.co.id/25b98de78552add2d62b919fee0a69a1" alt="c" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://id-test-11.slatic.net/p/ecdeba8be182faa9dfae647a67619c2a.jpg" alt="d" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://id-test-11.slatic.net/p/ecdeba8be182faa9dfae647a67619c2a.jpg" alt="e" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://id-test-11.slatic.net/p/ecdeba8be182faa9dfae647a67619c2a.jpg" alt="f" onclick="myImg(this)">
              <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2" src="https://id-test-11.slatic.net/p/ecdeba8be182faa9dfae647a67619c2a.jpg" alt="g" onclick="myImg(this)">
          </div>
      </div>
      <div class="p-10 lg:mt-2 mt-32">
          <div class="mb-5">
              <p>Undangan ERA DIGITAL <span class="font-bold">MQ 138</span></p>
              <h2 class="font-bold">Deskripsi</h2>
              <p class="text-slate-400">Kondisi : <span class="text-stone-700">Baru</span></p>
              <p class="text-slate-400">Waktu Pre-Order : <span class="text-stone-700">3 Hari</span></p>
              <p class="text-slate-400">Min. Pemesanan : <span class="text-stone-700">300pcs</span></p>
              <hr class="my-2">
              Harap Hubungi Kami untuk Cek Stok yang tersedia
              <p>Undangan pernikahan model lipat Single hardboard / Hardcover dngan cover lipat dan hangtag tali</p>
          </div>
          <a href="#" class="hover:ring-1 hover:bg-blue-600  transition ease-in-out rounded-lg bg-blue-500 text-white px-6 py-2 my-5">Order</a>
      </div>
    </div>
  </section>

  
<hr class="lg:my-10 sm:my-5">
  <section class="px-10 mb-10">
      <div class=" my-5">
          <h2>Produk Serupa</h2>
      </div>
    <div class="grid gap-4 lg:grid-cols-6 grid-cols-2 xl:grid-cols-8">
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
      <div class=" rounded-lg ring-1 max-w-40 mx-auto">
        <a href="">
          <img class="rounded-lg" src="./assets/images/favorite.jpg" alt="">
        <div class="p-2">
          <p class="font-bold text-slate-700">MQ 13</p>
          <div class="flex justify-between">
            <p class="text-slate-700">Rp1.000</p>
            <span class="text-slate-500">Stok: 12</span>
          </div>
        </div>
        </a>
      </div>
    </div>
  </section>
@endsection