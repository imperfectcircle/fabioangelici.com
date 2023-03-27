<x-layout :title="'Siti web realizzati: meridiane varese | Fabio Angelici'"
    :description="'Sito web realizzato in PHP con il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/meridiane-varese'"
    :ogDescription="'Sito web realizzato in PHP con il framework Laravel'"
    :ogTitle="'Siti web realizzati: meridiane varese | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/meridiane-varese'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center md:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Meridiane Varese</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="md:w-8/12 mx-auto p-5 md:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start md:col-start-2">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('meridiane') }}
            </div>
        </div>
        <div class="">
            <img src="/images/meridiane.webp" alt="Sito meridianevarese.it">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2021"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Meridiane, Orologi solari"
            />
            <x-portfolio-detail 
                title="Servizi:"
                par="Progettazione e realizzazione sito web, Indicizzazione e ottimizzazione sui motori di ricerca"
            />
            <x-portfolio-detail 
                title="Tecnologie Utilizzate:"
                par="HTML5, CSS3, JavaScript, Laravel, NGINX, MySQL"
            />
            <x-portfolio-detail-link 
                title="Link:"
                route="https://meridianevarese.it"
                par="https://meridianevarese.it"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>Meridiane Varese si occupa dello studio, divulgazione e realizzazione di meridiane ed orologi solari.</p>
            <p>Il cliente aveva la necessità di rinnovare un vecchio sito web realizzato in WordPress e non più aggiornato da diversi anni. Il cliente ha manifestato la volontà di voler aggiornare in autonomia le immagini della gallery e la creazione degli eventi connessi all'attività. Abbiamo desico di realizzare un nuovo sito abbandonando la piattaforma WP e andando a migliorare l'esperienza utente fornendo percorsi di navigazione più lineari.</p>
            <p>É stato realizzato un pannello di amministrazione per permettere la gestione dei contenuti da parte del cliente, ed è stata effettuata un'ottimizzazione di base per i motori di ricerca</p>
        </div>
        <div class="">
            <img src="/images/meridiane-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="md:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="meridiane" />
        </div>
    </section>

</x-layout>