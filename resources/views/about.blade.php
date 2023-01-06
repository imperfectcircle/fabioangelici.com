<x-layout 
    :title="'Fabio Angelici | Sviluppatore web freelance | PHP e JavaScript'"
    :description="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogUrl="'https://fabioangelici.com/aboout'"
    :ogDescription="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppatore web freelance | PHP, JavaScript'"
    :canonical="'https://fabioangelici.com/about'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-5 md:items-start">
        <div class="md:col-span-5 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Sviluppatore Web Freelance</h1>
        </div>
        <div class="md:col-start-2 md:col-span-2 md:px-0 space-y-3 text-lg md:text-xl py-10 px-5 flex flex-col items-center text-justify">
            <div class="flex justify-center items-end md:justify-start text-sky-700 w-full mb-5">
                <i class="fa-solid fa-id-card-clip text-6xl "></i>
                <p class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg"> Chi sono</p>
            </div>
            <p class="pb-5">Mi chiamo <strong>Fabio Angelici</strong> e sono uno <strong>Sviluppatore Web Freelance</strong> di Varese ma, grazie alle moderne tecnologie di comunicazione, posso operare in tutta Italia. Nutro una passione per l'informatica sin dai primi anni novanta, quando ho avuto il primo computer.</p>
            <img class="rounded-lg" src="images/laptop.webp" alt="Laptop con codici di programmazione">
            <p class="pt-5">Con l'avvento di internet inizio ad avvicinarmi al mondo della <em>programmazione web</em>, prima da autodidatta poi frequentando un corso organizzato dalla regione Lombardia e dal fondo sociale europeo all'inizio degli anni 2000.</p>
            <p>Terminato il corso trovo impiego in una <strong>web agency</strong> in cui inizio a mettere a frutto ciò che ho imparato e che mi dà la possibilità, nel tempo, di scoprire nuovi linguaggi e tecnologie.</p>
            <p>All'inizio della mia carriera mi appassiono al lato front-end della programmazione poi, prima con <em>PHP e i suoi framework</em> e in seguito con la <em>libreria Node.js</em>, scopro le "meraviglie" del back-end e del poter <strong>realizzare in autonomia interi progetti</strong>.</p>
            <p>Col tempo mi sono tenuto <strong>sempre al passo con le novità</strong> o con la documentazione on-line o frquentando corsi (l'ultimo dei quali nel 2021), in quanto ritengo che il continuo studio e approfondimento siano una parte fondamentale di questo lavoro.</p>
            <div class="flex pt-5 justify-center items-end md:justify-start text-sky-700 w-full">
                <i class="fa-solid fa-laptop-file text-6xl"></i>
                <p class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg">Come lavoro</p>
            </div>
            <p class="pt-5">Nel corso degli anni mi è capitato di lavorare utilizzando CMS open source come WordPress o Joomla per realizzare siti, questi sono dei buoni strumenti se non si hanno conoscenze di programmazione e se si ha la necessità di creare un sito in relativamente poco tempo.</p>
            <div class="py-5">
                <img class="rounded-lg bg-gradient-to-r from-black/50 to-black/10" src="images/whiteboard.webp" alt="Lavagna con programmazione lavoro">
            </div>
            <p>Ritengo tuttavia l'approccio dello scrivere codice superiore sotto molti punti di vista; eccone alcuni:</p>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Maggiore pulizia del codice</p>
                </div>
                <p class="pl-10 text-left w-full">Un sito con codice pulito, senza parti ridondanti o inutili e che segue le principali <strong>best practice</strong> della programmazione, <strong>è più veloce e facilmente manutenibile</strong>.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Altamente personalizzabile</p>
                </div>
                <p class="pl-10 text-left w-full">Per realizzare un sito con il codice non c'è necessità di affidarsi a temi per il design o a plugin per le varie funzionalità. <strong>Tutto viene realizzato in base alle reali necessità e gusti del cliente</strong>.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Facilmente modificabile</p>
                </div>
                <p class="pl-10 text-left w-full">Gli interventi di modifica sul sito rimangono, anche a distanza di mesi o anni, <strong>facili e decisamente più rapidi</strong> rispetto ai siti realizzati con un CMS.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Sicurezza innanzitutto</p>
                </div>
                <p class="pl-10 text-left w-full">Con un sito creato con il codice non devi preoccuparti di aggiornare plugin per evitare bug o eventuali falle nella sicurezza. Un sito <strong>ben costruito</strong> non ha di queste problematiche.</p>
            </div>
            <p>Nello sviluppo dei siti utilizzo principalmente <strong>PHP e JavaScript</strong> come linguaggi di programmazione e mi avvalgo di librerie e framework per scrivere più velocemente un codice pulito, e facilmente manutenibile; quelli che seguono sono alcuni dei linguaggi, librerie e framework che utilizzo:</p>
            <div class="pt-5 grid grid-cols-2 gap-5 md:flex md:flex-col">
                <div class="space-y-5 md:flex md:space-x-5 md:space-y-0">
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/HTML5'" :name="'HTML5.svg'" :text="'Logo html 5'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/CSS'" :name="'CSS3.svg'" :text="'Logo css 3'" />
                    <x-tech-image :link="'https://developer.mozilla.org/en-US/docs/Web/JavaScript'" :name="'js.svg'" :text="'Logo JavaScript'" />
                    <x-tech-image :link="'https://tailwindcss.com/'" :name="'Tailwind.svg'" :text="'Logo Tailwind css'" />
                    <x-tech-image :link="'https://laravel.com/'" :name="'Laravel.svg'" :text="'Logo Laravel'" />
                    <x-tech-image :link="'https://vuejs.org/'" :name="'Vue.svg'" :text="'Logo Vue'" />
                </div>
                <div class="space-y-5 md:flex md:justify-center md:space-x-5 md:space-y-0">
                    <x-tech-image :link="'https://nodejs.org/en/'" :name="'Node.svg'" :text="'Logo Node.js'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/MySQL'" :name="'MySQL.svg'" :text="'Logo MySql'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/MongoDB'" :name="'mongo.png'" :text="'Logo MongoDB'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/Nginx'" :name="'Nginx.svg'" :text="'Logo NGINX'" />
                    <x-tech-image :link="'https://www.digitalocean.com/'" :name="'DigitalOcean.svg'" :text="'Logo Digitl Ocean'" />
                </div>
            </div>
            <div class="flex py-5 justify-center items-end md:justify-start text-sky-700 w-full">
                <i class="fa-solid fa-circle-question text-6xl"></i>
                <p class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg">Richiedi un preventivo</p>
            </div>
            <p class="mt-5">Hai bisogno di maggiori informazioni o hai un progetto che vuoi sviluppare?
                <br>
                Compila il form che trovi qui sotto, ti risponderò il prima possibile.
            </p>
            <div class="w-full md:w-9/12">
                <x-contact-form :page="'about'"/>
            </div>
        </div>
        <div class="w-full pl-5 pr-5 mb-5 md:sticky md:top-[10rem] md:pl-24 md:pt-16 md:mb-48">
            <h2 class="text-2xl text-sky-700 border-b-2 border-sky-700 inline-block mb-5">Servizi Internet</h2>
            <x-service-list :route="route('public.websites')" :icon="'globe'" :text="'Siti web'" />
            <x-service-list :route="route('public.ecommerce')" :icon="'cart-shopping'" :text="'E-Commerce'" />
            <x-service-list :route="route('public.management')" :icon="'list-check'" :text="'Gestionali web'" />
            <x-service-list :route="route('public.restyling')" :icon="'arrows-rotate'" :text="'Restyling siti'" />
            <x-service-list :route="route('public.services')" :icon="'server'" :text="'Hosting'" />
        </div>
    </section>    
</x-layout>