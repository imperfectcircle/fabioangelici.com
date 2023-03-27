<x-layout :title="'Siti web realizzati: Teknofibra | Fabio Angelici'"
    :description="'Sito web realizzato in PHP con il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/teknofibra'"
    :ogDescription="'Sito web realizzato in PHP con il framework Laravel'"
    :ogTitle="'Siti web realizzati: Teknofibra | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/teknofibra'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center md:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Teknofibra</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="md:w-8/12 mx-auto p-5 md:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start md:col-start-2">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('teknofibra') }}
            </div>
        </div>
        <div class="">
            <img src="/images/tekno.webp" alt="Sito teknofibra.it">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2023"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Materiali coibenti ultraleggeri"
            />
            <x-portfolio-detail 
                title="Servizi:"
                par="Progettazione e realizzazione sito web, realizzazione pannello di amministrazione, indicizzazione sui motori di ricerca"
            />
            <x-portfolio-detail 
                title="Tecnologie Utilizzate:"
                par="HTML5, CSS3, JavaScript, Laravel, NGINX, MySQL"
            />
            <x-portfolio-detail-link 
                title="Link:"
                route="https://teknofibra.it"
                par="https://teknofibra.it"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>Teknofibra è un'azienda della provincia di Varese che si occupa della progettazione e vendita di prodotti coibenti ultraleggeri per veivoli ed auto e moto da gara.</p>
            <p>Il cliente aveva la necessità di sistemare un sito realizzato in WordPress di cui non era soddisfatto né a livello di prestazioni né a livello di usabilità e design. Dopo alcuni incontri in cui abbiamo definito le problematiche riscontrate con il vecchio sito e la compilazione di un questionario per definire obbiettivi e aspettative, abbiamo deciso di abbandonare la piattaforma WP e di creare da zero un nuovo sito multilingua in cui siamo andati a presentare i prodotti di punta e alcuni casi d'uso dei materiali.</p>
            <p>Il sito è stato completamente ridisegnato per andare a incontrare i desideri del cliente. È stato realizzato un pannello di amministrazione da cui è possibile compilare tabelle dei materiali, caricare schede tecniche, immagini e video in autonomia. </p>
            <p>Abbiamo deciso di spostare l'hosting in modo da andare ad migliorare ulteriormente le performance del sito che ora viene caricato molto più rapidamente.</p>
        </div>
        <div class="">
            <img src="/images/tekno-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="md:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="teknofibra" />
        </div>
    </section>

</x-layout>