<x-layout :title="'Siti web realizzati: cilaver | Fabio Angelici'"
    :description="'Sito web cilaver.it, per una azienda di materiali coibenti realizzato con PHP utilizzando il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/cilaver'"
    ogImage=''
    :ogDescription="'Sito web cilaver.it, per una azienda di materiali coibenti realizzato con PHP utilizzando il framework Laravel'"
    :ogTitle="'Siti web realizzati: cilaver | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/cilaver'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Cilaver</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="lg:w-8/12 mx-auto p-5 lg:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start lg:col-start-2">
            <div class="lg:col-start-2 lg:col-span-2">
                {{ Breadcrumbs::render('cilaver') }}
            </div>
        </div>
        <div class="">
            <img src="/images/cilaver.webp" alt="Sito cilaver.it">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2022"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Prodotti coibenti e fonoassorbenti"
            />
            <x-portfolio-detail 
                title="Servizi:"
                par="Progettazione e realizzazione sito web multilingua, Realizzazione pannello di amministrazione, Indicizzazione e ottimizzazione sui motori di ricerca"
            />
            <x-portfolio-detail 
                title="Tecnologie Utilizzate:"
                par="HTML5, CSS3, JavaScript, Laravel, NGINX, MySQL"
            />
            <x-portfolio-detail-link 
                title="Link:"
                route="https://cilaver.it"
                par="https://cilaver.it"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>La Cilaver S.r.l. si occupa della realizzazione e vendita di materiali coibenti e fonoassorbenti di alta qualità.</p>
            <p>Il cliente voleva realizzare un nuovo sito web che si rivolgesse anche al mercato estero per far conoscere i suoi prodotti e dove fosse possibile caricare documentazione tecnica che gli utenti potessero scaricare.</p>
            <p>Sia il sito che il pannello di amministrazione per la gestione dei documenti ed il caricamento delle immagini della gallery sono stati realizzati in PHP utilizzando il framework Laravel. È stata effettuata una prima ottimizzazione SEO che subirà una modifica a 3 e 6 mesi dalla messa online per migliorarne il posizionamento.</p>
            <p>Tutte le immagini sono state ottimizzate per il web e l'hosting permette un caricamento celere del sito sia nella versione italiana che nella sua controparte inglese.</p>
        </div>
        <div class="">
            <img src="/images/cilaver-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="lg:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="cilaver" />
        </div>
    </section>

</x-layout>