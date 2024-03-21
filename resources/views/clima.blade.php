<x-layout :title="'Siti web realizzati: Climassistance | Fabio Angelici'"
    :description="'Sito web climassistance.com, per una ditta di idraulica realizzato in PHP utilizzando il framework Laravel'"
    :ogUrl="'https://www.fabioangelici.com/portfolio/climassistance'"
    ogImage=''
    :ogDescription="'Sito web climassistance.com, per una ditta di idraulica realizzato in PHP utilizzando il framework Laravel'"
    :ogTitle="'Siti web realizzati: Climassistance | Fabio Angelici'"
    :canonical="'https://fabioangelici.com/portfolio/climassistance'"
>
    <section id="hero" class="bg flex flex-col items-center mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portfolio | Climassistance</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
    </section>

    <section class="lg:w-8/12 mx-auto p-5 lg:p-0">
        {{-- Breadcrumb --}}
        <div class="w-full items-start lg:col-start-2">
            <div class="lg:col-start-2 lg:col-span-2">
                {{ Breadcrumbs::render('climassistance') }}
            </div>
        </div>
        <div class="">
            <img src="/images/clima.webp" alt="Sito climassistance.com">
        </div>
        <h2 class="text-4xl py-10 font-bold">Dettagli</h2>
        <div class="space-y-3">
            <x-portfolio-detail 
                title="Anno di realizzazione:"
                par="2023"
            />
            <x-portfolio-detail 
                title="Settore:"
                par="Idraulica e servizi tecnologici"
            />
            <x-portfolio-detail 
                title="Servizi:"
                par="Progettazione e realizzazione sito web, Realizzazione pannello di amministrazione, Indicizzazione e ottimizzazione sui motori di ricerca"
            />
            <x-portfolio-detail 
                title="Tecnologie Utilizzate:"
                par="HTML5, CSS3, JavaScript, Laravel, NGINX, MySQL"
            />
            <x-portfolio-detail-link 
                title="Link:"
                route="https://climassistance.com"
                par="https://climassistance.com"
            />            
        </div>
        <div class="text-xl py-10 space-y-7">
            <p>Climassistance è una ditta di idraulica e riscaldamento e condizionamento della provincia di Varese</p>
            <p>Il clienta aveva necessità di realizzare un nuovo sito web per pubblicizzare la sua attività con possibilità di future implementazioni. Dopo un primo colloquio abbiamo deciso di orientarci verso la creazione di un sito a singola pagina con gallery e form di contatto.</p>
            <p>Ho realizzato un pannello di amministrazione basilare per permettere il caricamento in autonomia delle foto nella gallery.</p>
            <p>Il sito è stato indicizzato sui motori di ricerca e verrà eseguita un'ottimizzazione SEO a 3 e 6 mesi dalla messa online per migliorarne il posizionamento.</p>
        </div>
        <div class="">
            <img src="/images/clima-gtmetrix.png" alt="Perfromace gtmetrix del sito">
        </div>
        <div class="lg:w-6/12 mx-auto py-10">
            <h2 class="text-4xl text-center font-code">Contattami per un preventivo gratuito</h2>
            <x-contact-form page="clima" />
        </div>
    </section>

</x-layout>