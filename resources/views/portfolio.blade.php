<x-layout :title="'Portfolio | Fabio Angelici Web Developer'"
    :description="'Portfolio clienti Fabio Angelici - Sviluppatore web freelance. Siti web e gestionali online'"
    :ogUrl="'https://www.fabioangelici.com/portfolio'"
    ogImage=''
    :ogDescription="'Portfolio clienti Fabio Angelici - Sviluppatore web freelance. Siti web e gestionali online'"
    :ogTitle="'Portfolio | Fabio Angelici Web Developer'"
    :canonical="'https://fabioangelici.com/portfolio'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center md:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio clienti</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>
    <section class="md:w-8/12 mx-auto p-5 md:p-0">
            {{-- Breadcrumb --}}
            <div class="w-full items-start md:col-start-2">
                <div class="md:col-start-2 md:col-span-2">
                    {{ Breadcrumbs::render('portfolio') }}
                </div>
            </div>
    
            <p class="text-xl p-5">In questa pagina puoi trovare degli esempi dei lavori che ho eseguito come freelance. Si tratta di lavori eterogenei al cui interno si trovano siti a singola pagina, siti multilingua, landing page e siti dinamici.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center gap-5 py-10">
                <a href="{{ route('public.eliografica') }}">
                    <img src="/images/eliografica.webp" width="400" alt="">
                </a>
                <a href="{{ route('public.meridiane') }}">
                    <img src="/images/meridiane.webp" width="400" alt="">
                </a>
                <a href="{{ route('public.cilaver') }}">
                    <img src="/images/cilaver.webp" width="400" alt="">
                </a>
                <a href="{{ route('public.chiaratessaro') }}">
                    <img src="/images/chiara.webp" width="400" alt="">
                </a>
                <a href="{{ route('public.teknofibra') }}">
                    <img src="/images/tekno.webp" width="400" alt="">
                </a>
                <a href="{{ route('public.climassistance') }}">
                    <img src="/images/clima.webp" width="400" alt="">
                </a>
            </div>
    </section>
    
</x-layout>