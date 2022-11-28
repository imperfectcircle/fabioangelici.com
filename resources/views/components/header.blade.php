{{-- Header --}}
<header>
    {{-- Top Bar --}}
    <div class="w-full max-h-fit bg-gray-300 flex items-center md:py-3 md:grid md:grid-cols-2 md:justify-items-center">
        <div class="hidden md:inline-block">
            <a href="https://wa.me/+393515749172" target="_blank">
                <i class="fa-brands fa-whatsapp md:text-3xl p-2 text-green-600 hover:text-green-700"></i>
            </a>
            <a href="skype:live:.cid.8ae67683138ca1aa?chat">
                <i class="fa-brands fa-skype md:text-3xl p-2 text-sky-600 hover:text-sky-700"></i>
            </a>
            <a href="https://twitter.com/messages/compose?recipient_id=1596495346452103170" target="_blank">
                <i class="fa-brands fa-twitter md:text-3xl p-2 text-sky-500 hover:text-sky-600"></i>
            </a>
        </div>
        <div class="flex flex-col items-center w-full py-2 md:flex-row md:justify-center md:py-0">
            <a class="flex items-center md:px-3" href="mailto:info@fabioangelici.com">
                <i class="fa-regular fa-envelope md:text-2xl p-1"></i>
                <p class="font-alata text-lg">info@fabioangelici.com</p>
            </a>
            <a href="tel:+393515749172" class="flex items-center">
                <i class="fa-solid fa-phone md:text-2xl p-1"></i>
                <p class="font-alata text-lg">+393515749172</p>
            </a>
        </div>
    </div>
    {{-- End Top Bar --}}

    {{-- Navbar --}}
    <nav id="navbar" class="bg-gray-100 w-full max-h-fit md:grid md:grid-cols-2 md:justify-items-center top-0 shadow-xl">
        {{-- Logo --}}
        <div class="py-5 text-center flex justify-around md:inline-block">
            <div class="flex justify-center md:hidden">
                <a href="https://wa.me/+393515749172" target="_blank">
                    <i class="fa-brands fa-whatsapp text-3xl p-2 text-green-600 hover:text-green-700"></i>
                </a>
                <a href="skype:live:.cid.8ae67683138ca1aa?chat">
                    <i class="fa-brands fa-skype text-3xl p-2 text-sky-600 hover:text-sky-700"></i>
                </a>
            </div>
            <div class="col-span-2">
                <p class="text-2xl md:text-4xl">Fabio Angelici</p>
                <p class="text-md md:text-lg text-black/40 text-center uppercase">&#60;web developer&#47;&#62;</p></div>
            <div class="flex justify-center md:hidden">
                
            </div>
            {{-- Hamburger Button --}}
            <div class="md:hidden">
                <button id="menu-btn" type="button" class="z-50 block min-w-full hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
        {{-- End Hamburger Button --}}
        </div>
        {{-- End Logo --}}

        {{-- Menù --}}
        <div class="hidden md:flex md:items-center">
            <ul class="flex items-center justify-center space-x-5 font-alata text-xl uppercase">
                <x-menu :route="route('public.home')" :name="'Home'"/>
                <x-menu :route="route('public.about')" :name="'chi sono'"/>
                <x-menu :route="route('public.services')" :name="'Servizi'"/>
                <x-menu :route="route('public.blog')" :name="'blog'"/>
                <x-menu :classes="'border-2 border-orange-500 px-5 py-2 rounded-full hover:bg-orange-500 hover:text-white duration-200'" :route="route('public.contacts')" :name="'contatti'"/>
            </ul>
        </div>
        {{-- End Menù --}}

        
    </nav>
    {{-- End Navbar --}}

    {{-- Mobile Menù --}}
    <div id="menu" class="absolute top-[4.5rem] bottom-0 left-0 hidden flex-col self-end items-center w-full min-h-screen py-1 pt-40  space-y-3 text-lg text-white uppercase bg-slate-400 z-10">
        <a href="{{ route('public.home') }}" class="hover:bg-slate-900 px-7 py-3 uppercase">Home</a>
        <a href="{{ route('public.about') }}" class="hover:bg-slate-900 px-7 py-3 uppercase">Chi sono</a>
        <a href="{{ route('public.services') }}" class="hover:bg-slate-900 px-7 py- uppercase">Servizi</a>
        <a href="{{ route('public.blog') }}" class="hover:bg-slate-900 px-7 py-3 uppercase">Blog</a>
        <a href="{{ route('public.contacts') }}" class="hover:bg-slate-900 px-7 py-3 uppercase">contatti</a>
    </div>
    {{-- End Mobile Menù --}}
</header>
{{-- End Header --}}