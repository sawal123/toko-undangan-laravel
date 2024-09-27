@extends('frontend.master.app')
@section('content')
    <style>
        /* Style untuk modal gambar */
        .img-modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 9999;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            /* Background hitam */
        }

        /* Style gambar di dalam modal */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            animation: zoom 0.6s;
            /* Animasi zoom in */
        }

        /* Animasi zoom */
        @keyframes zoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        /* Tombol close */
        .close-btn {
            position: absolute;
            top: 30px;
            right: 50px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: #bbb;
        }
    </style>
    <section class="mt-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
            <div class="p-5  lg:w-1/2 sm:w-full  mx-auto">
                <img id="expandedImg" src="{{ asset('storage/undangancetak/' . $galery['0']['gambar']) }}"
                    class="rounded-xl shadow-lg object-cover  h-[250px] w-[300px] " onclick="openModal()">
                <div id="imgModal" class="img-modal" onclick="closeModal()">
                    <span class="close-btn" onclick="closeModal()">&times;</span>
                    <img class="modal-content" id="imgModalContent">
                </div>
                <div class="flex overflow-x-auto my-6">
                    @foreach ($galery as $items)
                        <img class=" object-cover rounded-xl h-16 w-16 hover:ring-2 cursor-pointer mx-2 my-2"
                            src="{{ asset('storage/undangancetak/' . $items->gambar) }}" alt="g"
                            onclick="myImg(this)">
                    @endforeach
                </div>
            </div>
            <div class="p-10 lg:mt-2 mt-20">
                <div class="mb-5">
                    <p>Undangan ERA DIGITAL <span class="font-bold">{{ $undangan->name }}</span></p>
                    <h5>Rp {{ number_format($undangan->harga, 0, ',', '.') }}</h5>
                    <p class="font-bold">Deskripsi</p>
                    <p class="text-slate-400">Kondisi : <span class="text-stone-700">Baru</span></p>
                    <p class="text-slate-400">Waktu Pre-Order : <span class="text-stone-700">3 Hari</span></p>
                    <p class="text-slate-400">Min. Pemesanan : <span class="text-stone-700">100pcs</span></p>
                    <hr class="my-2">
                    {!! $undangan->deskripsi !!}</p>
                </div>
                <a href="https://wa.me/6282274677715?text=Saya+ingin+Pesan+Undangan+{{ $undangan->name }}"
                    class="hover:ring-1 hover:bg-blue-600  transition ease-in-out rounded-lg bg-blue-500 text-white px-6 py-2 my-5">Order</a>
            </div>
        </div>
    </section>


    <hr class="lg:my-10 sm:my-5">
    <section class="px-10 mb-10">
        <div class=" my-5">
            <h2>Produk Serupa</h2>
        </div>
        <div class="grid gap-4 lg:grid-cols-6 grid-cols-2 xl:grid-cols-8">
            @foreach ($serupa as $serup)
                <div class=" rounded-lg ring-1 max-w-40 w-40   mx-auto hover:shadow-lg">
                    <a href="{{ url('product/detail/' . $serup->slug) }}">
                        <img class="rounded-lg object-cover h-32 w-full "
                            src="{{ asset('./storage/undangancetak/' . $serup->gambar) }}" alt="">
                        <div class="p-2">
                            <p class=" text-slate-700">{{ $serup->name }}</p>
                            <div class="flex justify-between">
                                <h5 class="text-sm">Rp {{ number_format($serup->harga, 0, ',', '.') }}</h5>
                                <span class="text-slate-500 text-sm">Stok: {{ $serup->stok }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>
    <script>
        function openModal() {
            var modal = document.getElementById("imgModal");
            var modalImg = document.getElementById("imgModalContent");
            var expandedImg = document.getElementById("expandedImg");

            modal.style.display = "block"; // Show modal
            modalImg.src = expandedImg.src; // Set modal image to clicked image
        }

        function closeModal() {
            var modal = document.getElementById("imgModal");
            modal.style.display = "none"; // Hide modal
        }
    </script>
@endsection
