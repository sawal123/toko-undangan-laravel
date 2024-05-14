<header class="fixed inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 " id="nav">
        <div class="flex lg:flex-1">
            <a href="" class="-m-1.5 p-1.5">
                <span class="sr-only">You Company</span>
                <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""
                    class="h-8 w-auto" />
            </a>
        </div>
        <!-- burger -->
        <div class="flex lg:hidden">
            <button id="btnBurger" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray">
                <span class="sr-only">Open Main Menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8 *:px-2 ">
            <a href="{{url('/')}}"
                class=" transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Home</a>
            <a href="{{ url('/undangan-cetak') }}"
                class=" {{request()->is('undangan-cetak*') ? 'bg-slate-200 ring-2' : ''}} transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Undangan
                Cetak</a>
            <a href=""
                class="{{request()->is('undangan-digital') ? 'bg-slate-200 ring-2' : ''}} transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Undangan
                Digital</a>
            <a href=""
                class="transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Promo</a>
            <a href=""
                class="transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Blog</a>
            <a href=""
                class="transition delay-75 duration-150 ease-in-out text-sm font-semibold leading-6 text-gray-900 hover:bg-slate-200 hover:ring-2 rounded-lg">Contact
                Us</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">

            @if (Auth::user())
            {{-- <span>{{Auth::user()->name}}</span> --}}
                <a href="{{ url('logout') }}" class="text-sm font-semibold leading-6 text-gray-900">Log Out <span
                        aria-hidden="true">&rarr;</span></a>
            @else
                <a href="{{ url('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            @endif
        </div>
    </nav>
    <!-- ===========Mobile============= -->
    <div class="lg:hidden hidden" id="sideBar" role="dialog" aria-modal="true">
        <!-- <div class="fixed inset-0 z-50"></div> -->
        <div
            class="fixed inset-y-0 right-0 z-50-full overflow-y-auto w-full bg-white p-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""
                        class="h-8 w-auto">
                </a>
                <button class="-m-2.5  p-2.5 text-gray-700" id="closeSidebar">
                    <span class="sr-only">Close Menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class=" mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Undangan</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Undangan
                            Digital</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Hubungi</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
