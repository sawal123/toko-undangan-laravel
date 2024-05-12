@extends('frontend.master.app')

@section('content')
    <section class="mt-32">
        <div class="header-undangan">
            <a href="" class="lg:h-96 md:h-72 rounded-xl">
                <img class="w-full lg:h-96 md:h-72 object-cover rounded-xl "
                    src="https://plus.unsplash.com/premium_photo-1661657801128-459e612ef2c6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </a>
            <a href="" class=" lg:h-96 md:h-72 rounded-xl">
                <img class="w-full lg:h-96 md:h-72 object-cover rounded-xl "
                    src="https://plus.unsplash.com/premium_photo-1661657801128-459e612ef2c6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </a>

        </div>
    </section>

    <section class="my-5 lg:px-8">
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
    <section class="class="my-5 lg:px-8"">

    </section>

    <section class="my-10 px-10">
        <div class="grid gap-4 lg:grid-cols-6 grid-cols-2 xl:grid-cols-8">
            @foreach ($undangan as $item)
            <div class=" rounded-lg ring-1 max-w-40 mx-auto hover:shadow-lg">
                <a href="{{url('product/detail/'.$item->slug)}}">
                    <img class="rounded-lg" src="{{asset('./storage/undangancetak/'.$item->gambar)}}" alt="">
                    <div class="p-2">
                        <p class=" text-slate-700">{{$item->name}}</p>
                        <div class="flex justify-between">
                            <p class="text-slate-700 text-sm">{{$item->harga}}</p>
                            <span class="text-slate-500 text-sm">Stok: {{$item->stok}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </section>
@endsection
