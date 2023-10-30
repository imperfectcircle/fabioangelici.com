<x-layout :title="'Siti web realizzati: Chiara Tessaro | Fabio Angelici'"
    :description="'Sito web chiaratessaro.com, per una graphic designer realizzato con libreria JS  e PHP con il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/chiara-tessaro'"
    ogImage=''
    :ogDescription="'Sito web chiaratessaro.com, per una graphic designer realizzato con libreria JS  e PHP con il framework Laravel'"
    :ogTitle="'Siti web realizzati: Chiara Tessaro | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/chiara-tessaro'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center md:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Chiara Tessaro</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="md:w-8/12 mx-auto p-5 md:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start md:col-start-2">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('chiara') }}
            </div>
        </div>
        <div class="">
            <img src="/images/chiara.webp" alt="Sito chiaratessaro.com">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2022"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Graphic Designer"
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
                route="https://chiaratessaro.com"
                par="https://chiaratessaro.com"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>Chiara Tessaro è una graphic designer della provincia di Treviso.</p>
            <p>La cliente aveva bisogno di rinnovare un vecchio sito in WordPress realizzato anni prima e non più aggiornato. Dopo un'intervista in cui è emersa la necessità di aggiornare i contenuti in autonomia abbiamo deciso di abbandonare la piattaforma WP, di orientarci verso la realizzazione di un sito vetrina che mostrasse i principali lavori eseguiti in ordine di categoria e di cambiare servizio di hosting.</p>
            <p>È stato realizzato un pannello di amministrazione per permettere alla cliente di caricare i suoi lavori autonomamente.</p>
            <p>Il sito è hostato su un server che ne permette un rapido caricamento ad un prezzo contenuto.</p>
        </div>
        <div class="">
            <img src="/images/chiara-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="md:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="chiara" />
        </div>
    </section>

</x-layout>