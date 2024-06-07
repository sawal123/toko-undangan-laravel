@extends('frontend.master.app')

@section('content')
    <section class="mt-32">
        <div class="header-undangan">
           @foreach ($slide as $sl)
           <a href="{{$sl->link}}" class="lg:h-96 md:h-72 rounded-xl">
            <img class="w-full lg:h-96 md:h-72 object-cover rounded-xl "
                src="{{asset('storage/slide/'.$sl->image)}}"
                alt="">
        </a>
           @endforeach
            

        </div>
    </section>

    <section class="my-5 lg:px-8">
        <h2 class="text-center font-bold">Kategori</h2>
        <div class="overflow-x-auto">
            <div class="flex justify-center">
                @foreach ($jenis as $jen)
                    <a href="{{ url('undangan-cetak/' . $jen->jenis) }}" class="mx-2">
                        <div
                            class="w-full text-center   ring-1 rounded-lg px-4 py-2 m-2  cursor-pointer hover:shadow-md text-slate-500 hover:text-slate-700">
                            {{ $jen->jenis }}
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </section>
    <section class="class="my-5 lg:px-8"">

    </section>

    <section class="my-10 px-10">
        @if (count($undangan) > 0)
            <div class="grid gap-4  lg:grid-cols-6 grid-cols-2 xl:grid-cols-8">
                {{-- {{dd($undangan)}} --}}
                @foreach ($undangan as $item) 
                    <div class=" rounded-lg ring-1 max-w-40 w-40   mx-auto hover:shadow-lg">
                        <a href="{{ url('product/detail/' . $item->slug) }}">
                            <img class="rounded-lg object-cover h-32 w-full "
                                src="{{ asset('./storage/undangancetak/' . $item->gambar) }}" alt="">
                            <div class="p-2">
                                <p class=" text-slate-700">{{ $item->name }}</p>
                                <div class="flex justify-between">
                                    <h5>Rp {{ number_format($item->harga, 0, ',', '.') }}</h5>
                                    <span class="text-slate-500 text-sm">Stok: {{ $item->stok }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="w-full">
                <h3 class="text-center">Data Tidak Ada</h3>
            </div>
        @endif
    </section>
@endsection
