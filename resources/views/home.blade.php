<x-layout :title="'Creazione siti web | Fabio Angelici Web Developer'"
    :description="'Vuoi creare il tuo sito internet in modo professionale? Ho esperienza pluriennale e metto la mia professionalità al tuo servizio.'"
    :ogUrl="'https://www.fabioangelici.com/'"
    ogImage=''
    :ogDescription="'Sviluppo siti web, ecommerce e gestionali web. Per maggiori info visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppo siti web ecommerce e gestionali'"
    :canonical="'https://fabioangelici.com/'"
>
    {{-- Hero Section --}}
    <section class="hero h-screen flex items-center justify-center" id="hero">
        <div class="bg-sky-900 h-full w-full flex flex-col pl-5 lg:pl-0 lg:grid lg:grid-cols-8 lg:items-center justify-center font-code">
            <div class="col-start-2 col-span-7 mx-auto p-3 md:p-0 space-y-3 lg:space-y-5 font-bold">
                <div class="flex items-center">
                    <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
                    <p class="text-lg md:text-4xl lg:text-6xl pl-6 lg:pl-10 text-gray-500">//Hello World!</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm md:text-2xl lg:text-4xl text-slate-400 ">2</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-6 lg:pl-10 text-cyan-300">Sono Fabio </p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-3 lg:pl-5 text-pink-300"> = </p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-3 lg:pl-5 text-orange-300">web developer</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl text-white">;</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm md:text-2xl lg:text-4xl text-slate-400 ">3</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-6 lg:pl-10 text-cyan-300">Mi piace scrivere</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-4 lg:pl-7 text-white">codice</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-3 lg:pl-5 text-pink-300"> = </p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-3 lg:pl-5 text-pink-300">true</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl text-white">;</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm md:text-2xl lg:text-4xl text-slate-400 ">4</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-6 lg:pl-10 text-yellow-300">if</p>
                    <p class="text-[14px] md:text-2xl lg:text-4xl pl-4 lg:pl-7 tracking-tighter text-emerald-300">('Devi creare il tuo sito internet?')</p>
                    <p class="text-[14px] md:text-4xl lg:text-6xl pl-3 lg:pl-5 text-pink-300"> { </p>
                </div>
                <div class="flex items-center">
                    <p class="text-base md:text-2xl lg:text-4xl text-slate-400 ">5</p>
                    <a href="{{ route('public.contacts') }}" class="text-lg md:text-4xl lg:text-6xl pl-20 lg:pl-40 text-red-500 hover:text-purple-500 duration-200 underline">Contattami</a>
                    <p class="text-lg md:text-4xl lg:text-6xl text-white">;</p>
                </div>
                <div class="flex items-center">
                    <p class="text-base md:text-2xl lg:text-4xl text-slate-400 ">6</p>
                    <p class="text-lg md:text-4xl lg:text-6xl pl-6 lg:pl-10 text-pink-300">}</p>
                    <p class="text-lg md:text-4xl lg:text-6xl text-white">;</p>
                    <p class="animate-pulse text-lg md:text-4xl lg:text-6xl text-white pl-3 lg:pl-5">|</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}
    
    {{-- Intro Section --}}
    <section id="intro" class="bg-sky-600 h-fit flex justify-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center justify-items-center gap-10 p-20 text-lg lg:my-10 lg:text-2xl text-gray-300">
            <div class="">
                <img src="/images/background.png" alt="Creazione siti web">
            </div>
            <div class="">
                <h1 class="text-3xl font-bold text-center mb-3 lg:text-5xl font-code"><span class="text-emerald-300">Progettazzione e creazione </span><span class="text-gray-200">siti web performanti e dal design <span class="text-red-400">accattivante</span></h1>
                <p class="font-alata">Mi chiamo Fabio Angelici, sono uno sviluppatore freelance e sono specializzato nella <strong>creazione e nel restyling di siti web ed ecommerce e nello sviluppo di gestionali web</strong> per aziende, liberi professionisti e privati.</p>
                <p class="font-alata mt-5">Offro soluzioni personalizzate e all'avanguardia per la creazione di <strong>siti internet di alta qualità</strong>.</p>
                <p class="font-alata mt-5">Il mio <strong>scopo</strong> è quello di <strong>aiutare le aziende a crescere</strong> e raggiungere il loro obiettivo online attraverso la <strong>creazione di siti web</strong> che siano non solo esteticamente piacevoli, ma anche funzionali e facili da usare. </p>
                <p class="font-alata mt-5">Se stai cercando un web developer che possa offrirti un servizio eccezionale e un <strong>risultato finale di alta qualità</strong> non esitare a contattarmi.</p>
                <div class="mt-10 w-full text-center">
                <x-button :route="route('public.method')" :text="'Come lavoro'" />
            </div>
        </div>
    </section>
    {{-- End Intro Section --}}

    {{-- Offer Section --}}
    <section id="offer" class="bg-gray-200 h-fit flex justify-center">
        <div class="lg:w-9/12 my-5 p-5 text-lg lg:my-10 lg:text-2xl text-black">
            <h2 class="text-3xl font-bold text-center mb-3 lg:text-[40px] font-code"><span class="text-purple-800">Cosa posso offrirti</span> per realizzare il <span class="text-orange-500">tuo sito</span></h2>
            <div class="mt-5  lg:mt-10 grid grid-cols-1 lg:grid-cols-3 justify-items-center">
                <x-card
                    :route="route('public.websites')"
                    :icon="'fa-solid fa-code'" 
                    :title="'creazione siti web'"
                    :body="'Il servizio consiste nella realizzazione di siti web veloci, affidabili e altamente performanti. Responsive e ottimizzati per garantire una user exprience ottimale.'"    
                />
                <x-card 
                    :route="route('public.ecommerce')"
                    :icon="'fa-solid fa-cart-arrow-down'" 
                    :title="'ecommerce'"
                    :body="'Portali ecommerce personalizzabili e gestibili dal cliente in ogni loro aspetto, dall\'inserimento di nuovi prodotti e/o servizi, alla creazione di offerte e tanto altro.'"    
                />
                <x-card 
                    :route="route('public.management')"
                    :icon="'fa-solid fa-list-check'" 
                    :title="'Gestionali web'"
                    :body="'Realizzo gestionali sviluppati per il web e quindi accessibili, attraverso un pannello di controllo da qualsiasi dispositivo e postazione connessa a internet. '"    
                />
                <x-card 
                    :route="route('public.restyling')"
                    :icon="'fa-solid fa-arrows-rotate'" 
                    :title="'restyling dei siti'"
                    :body="'Hai già un sito web ma non sei soddisfatto del look o delle prestazioni? Attraverso un attento studio posso offrirti una nuova versione del tuo sito in modo SEO friendly'"    
                />
                <x-card 
                    :route="route('public.services')"
                    :icon="'fa-solid fa-magnifying-glass'" 
                    :title="'ottimizzazione seo'"
                    :body="'I siti che creo sono studiati prestando attenzione alle linee guida della SEO permettendomi di garantire ottimi risultati senza false promesse: diffida da chi ti garantisce il primo posto sui motori di ricerca.'"    
                />
                <x-card 
                    :route="route('public.services')"
                    :icon="'fa-solid fa-server'" 
                    :title="'hosting'"
                    :body="'Registrazione del dominio, creazione delle caselle email associate e spazio web per ospitare il tuo sito. Anche questi servizi fanno parte di quello che posso offrirti.'"    
                />
            </div>
            <div class="mt-10 w-full text-center">
                <x-button :route="route('public.services')" :text="'Scopri di più'" />
            </div>
        </div>
    </section>
    {{-- End Offer Section --}}

    {{-- Contact Section --}}
    <section id="contact" class="space-y-10 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 flex flex-col items-center text-gray-300">
        <h2 class="text-3xl px-2 font-bold text-center mb-2 lg:text-5xl font-code">Realizza ora il tuo <span class="text-yellow-500">sito web!</span></h2>
        <p class="font-alata text-lg mb-5  px-3 text-center lg:text-xl">Il risultato sarà un perfetto biglietto da visita on-line per la tua azienda o la tua attività. Richiedi un consulto gratuito.</p>
        <div class="flex flex-col items-center lg:flex-row space-y-5 lg:space-y-0 lg:space-x-5">
            <x-button :route="route('public.contacts')" :text="'Contattami on-line'" />
            <x-button :route="'tel:+393515749172'" :text="'+393515749172'" />
        </div>
    </section>
    {{-- End Contact Section --}}

    {{-- Portfolio Section --}}
    <section class="w-full lg:w-10/12 mx-auto pt-10">
        <div class="">
            <h2 class="font-code font-bold text-3xl lg:text-5xl text-center"><span class="text-yellow-500">Se ti piacciono </span>i miei lavori e vuoi un sito bello e funzionale <span class="text-purple-500">collaboriamo</span></h2>
        </div>
        <div id="controls-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg h-96 lg:h-screen">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <a href="{{ route('public.cilaver') }}">
                        <img src="/images/cilaver.webp" class="rounded-lg absolute block lg:w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web cilaver.it">
                    </a>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('public.teknofibra') }}">
                        <img src="/images/tekno.webp" class="rounded-lg absolute block w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web teknofibra.it">
                    </a>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('public.eliografica') }}">
                        <img src="/images/eliografica.webp" class="rounded-lg absolute block w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web eliograficavaresina.org">
                    </a>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('public.climassistance') }}">
                        <img src="/images/clima.webp" class="rounded-lg absolute block w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web climassistance.com">
                    </a>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('public.chiaratessaro') }}">
                        <img src="/images/chiara.webp" class="rounded-lg absolute block w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web chiaratessaro.it">
                    </a>
                </div>
                <!-- Item 6 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ route('public.meridiane') }}">
                        <img src="/images/meridiane.webp" class="rounded-lg absolute block w-9/12 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Creazione sito web meridianevarese.it">
                    </a>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>
    {{-- End Portfolio Section --}}

    {{-- Articles Section --}}
    <section id="articles">
        <h2 class="text-3xl font-bold text-center mt-10 mb-3 lg:text-5xl font-code">Segui il mio <span class="text-red-400">blog</span></h2>
        <p class="font-alata text-center text-lg lg:text-2xl mb-5">Ultimi articoli pubblicati</p>
        <div class="mx-auto w-8/12 lg:w-7/12">
            <div class="grid grid-cols-1 px-5 lg:grid-cols-3 lg:px-0 gap-10">
                @foreach ($articles as $article)
                    <a href="{{ route('article.show', $article->slug) }}">
                        <div class="flex flex-col mb-10">
                            <img class="mb-5 rounded-lg h-44 object-cover" src="{{ Storage::url($article->picture->image) }}" alt="{{ $article->title }}">
                            <p class="text-center font-bold text-2xl">{{ $article->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Articles Section --}}
</x-layout>