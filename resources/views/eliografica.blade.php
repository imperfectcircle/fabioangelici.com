<x-layout :title="'Siti web realizzati: eliografica varesina | Fabio Angelici'"
    :description="'Sito web eliograficavaresina.org, per una ditta eliografica realizzato con PHP utilizzando il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/eliografica-varesina'"
    :ogDescription="'Sito web eliograficavaresina.org, per una ditta eliografica realizzato con PHP utilizzando il framework Laravel'"
    :ogTitle="'Siti web realizzati: eliografica varesina | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/eliografica-varesina'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center md:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Eliografica Varesina</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="md:w-8/12 mx-auto p-5 md:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start md:col-start-2">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('eliografica') }}
            </div>
        </div>
        <div class="">
            <img src="/images/eliografica.webp" alt="Sito eliograficavaresina.org">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2021"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Eliografica, Copisteria"
            />
            <x-portfolio-detail 
                title="Servizi:"
                par="Progettazione e realizzazione sito web, Indicizzazione e ottimizzazione sui motori di ricerca"
            />
            <x-portfolio-detail 
                title="Tecnologie Utilizzate:"
                par="HTML5, CSS3, JavaScript, Laravel, NGINX"
            />
            <x-portfolio-detail-link 
                title="Link:"
                route="https://eliograficavaresina.org"
                par="https://eliograficavaresina.org"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>Eliografica Varesina è una storica copisteria di Varese specializzata nella stampa digitale.</p>
            <p>Il cliente aveva bisogno di rinnovare un vecchio sito web realizzato nei primi anni 2000. Dopo un'intervista e la compilazione di un questionario per definire gli obbiettivi e capire quali necessità avesse il cliente, abbiamo deciso di orientarci verso la realizzazione di un sito a pagina singola che elencasse i principali servizi offerti e che desse la possibilità all'utente di contattare l'attività attraverso un form di contatto.</p>
            <p>Il sito è stato ottimizzato per i motori di ricerca ed è hostato su un server particolarmente performante che ne rende il caricamento rapido.</p>
        </div>
        <div class="">
            <img src="/images/eliografica-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="md:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="eliografica" />
        </div>
    </section>

</x-layout>