<x-layout 
    :title="'Sviluppatore web php e Javascript | Fabio Angelici Web Developer'"
    :description="'Sono uno sviluppatore web freelance PHP e Javascript. Ti offro servizi per la creazione di siti web professionali e performanti'"
    :ogUrl="'https://fabioangelici.com/chi-sono'"
    :ogDescription="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppatore web freelance | PHP, JavaScript'"
    :canonical="'https://fabioangelici.com/chi-sono'"
>
    <section id="hero" class="bg flex flex-col items-center md:grid md:grid-cols-5 md:items-start">
        <div class="flex items-center justify-center w-full md:col-span-5 h-fit bg-sky-900 py-20 px-3 text-center text-gray-300 font-code font-bold">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Sviluppatore Web</span> Freelance;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
        <div class="w-full items-start md:col-start-2 md:col-span-2 py-5">
            {{ Breadcrumbs::render('about') }}
        </div>
        
        <div class="md:col-start-2 md:col-span-2 md:px-0 space-y-3 text-lg md:text-xl py-10 px-5 flex flex-col items-center text-justify">
            <div class="flex justify-center items-end md:justify-start text-sky-700 w-full mb-5">
                <i class="fa-solid fa-id-card-clip text-6xl "></i>
                <h2 class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg"> Chi sono</h2>
            </div>
            <p class="pb-5">Mi chiamo <strong>Fabio Angelici</strong> e sono uno <strong>Sviluppatore Web Freelance</strong> di Varese con una passione per l'informatica che risale ai primi anni '90. Grazie a internet, ho la possibilità di <strong>lavorare con clienti di tutta Italia</strong>, offrendo soluzioni personalizzate per la creazione di siti web e gestionali. Mi dedico alla creazione di soluzioni <strong>moderne e use-friendly per aiutare le aziende a crescere</strong>.</p>
            <img class="rounded-lg" src="images/laptop.webp" alt="Laptop con codici di programmazione">
            <p class="pt-5">Con l'avvento di internet inizio ad avvicinarmi al mondo della <em>programmazione web</em>, prima da autodidatta poi frequentando un corso organizzato dalla regione Lombardia e dal fondo sociale europeo all'inizio degli anni 2000.</p>
            <p>Terminato il corso trovo impiego in una <strong>web agency</strong> in cui inizio a mettere a frutto ciò che ho imparato e che mi dà la possibilità, nel tempo, di scoprire nuovi linguaggi e tecnologie.</p>
            <p>All'inizio della mia carriera mi appassiono al lato front-end della programmazione poi, prima con <em>PHP e i suoi framework</em> e in seguito con la <em>libreria Node.js</em>, scopro le "meraviglie" del back-end e del poter <strong>realizzare in autonomia interi progetti</strong>.</p>
            <p>Col tempo mi sono tenuto <strong>sempre al passo con le novità</strong> o con la documentazione on-line o frquentando corsi (l'ultimo dei quali nel 2021), in quanto ritengo che il continuo studio e approfondimento siano una parte fondamentale di questo lavoro.</p>
            <div class="flex pt-5 justify-center items-end md:justify-start text-sky-700 w-full">
                <i class="fa-solid fa-laptop-file text-6xl"></i>
                <h2 class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg">Come realizzo siti internet</h2>
            </div>
            <p class="pt-5">Nel corso degli anni mi è capitato di lavorare utilizzando CMS open source come WordPress o Joomla per realizzare siti, questi sono dei buoni strumenti se non si hanno conoscenze di programmazione e se si ha la necessità di creare un sito in relativamente poco tempo.</p>
            <div class="py-5">
                <img class="rounded-lg bg-gradient-to-r from-black/50 to-black/10" src="images/whiteboard.webp" alt="Come realizzo siti internet">
            </div>
            <p>Ritengo tuttavia l'approccio dello scrivere codice superiore sotto molti punti di vista; eccone alcuni:</p>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Personalizzazione</p>
                </div>
                <p class="pl-10 text-left w-full">Quando si crea un sito web dal codice, si ha un maggiore controllo sulla personalizzazione e sulla struttura del sito stesso. Ciò significa che è possibile creare <strong>un sito unico che risponda alle esigenze specifiche del proprio business</strong>.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Prestazioni</p>
                </div>
                <p class="pl-10 text-left w-full">I siti web creati a partire dal codice sono solitamente <strong>più veloci e performanti</strong> rispetto ai siti creati con un CMS. Questo è dovuto al fatto che <strong>il codice è ottimizzato per le prestazioni</strong>, a differenza dei siti sviluppati ad esempio con WordPress, che spesso includono funzionalità inutili.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Sicurezza</p>
                </div>
                <p class="pl-10 text-left w-full">I siti web creati partendo dal codice sono <strong>meno vulnerabili agli attacchi informatici</strong> rispetto a quelli creati con un CSM. Ciò è dovuto al fatto che i primi possono essere progettati e sviluppati con maggiore attenzione alla sicurezza, <strong>rendendoli meno suscettibili a minacce</strong> come malware e gli attacchi DDoS di cui spesso si sente parlare.</p>
            </div>
            <div class="">
                <div class="flex items-center text-left w-full">
                    <i class="fa-solid fa-check text-emerald-600 text-2xl"></i>
                    <p class="pl-3 text-sky-600">Scalabilità</p>
                </div>
                <p class="pl-10 text-left w-full">I siti web creati lato codice sono solitamente più scalabili. Ciò significa che <strong>è più facile far crescere il sito</strong> e aggiungere nuove funzionalità in futuro.</p>
            </div>
            
            <p>Per lo sviluppo dei miei siti, faccio affidamento su <strong>PHP e JavaScript</strong> come linguaggi di programmazione principali. Ricorro a librerie e framework per creare codice efficiente, pulito e facilmente gestibile.; quelli che seguono sono alcuni dei linguaggi, librerie, framework e servizi che utilizzo:</p>
            <div class="pt-5 grid grid-cols-2 gap-5 md:flex md:flex-col">
                <div class="space-y-5 md:flex md:space-x-5 md:space-y-0">
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/HTML5'" :name="'HTML5.svg'" :text="'Logo html 5'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/CSS'" :name="'CSS3.svg'" :text="'Logo css 3'" />
                    <x-tech-image :link="'https://developer.mozilla.org/en-US/docs/Web/JavaScript'" :name="'js.svg'" :text="'Logo JavaScript'" />
                    <x-tech-image :link="'https://tailwindcss.com/'" :name="'Tailwind.svg'" :text="'Logo Tailwind css'" />
                    <x-tech-image :link="'https://laravel.com/'" :name="'Laravel.svg'" :text="'Logo Laravel'" />
                    <x-tech-image :link="'https://it.legacy.reactjs.org/'" :name="'React.svg'" :text="'Logo React'" />
                </div>
                <div class="space-y-5 md:flex md:justify-center md:space-x-5 md:space-y-0">
                    <x-tech-image :link="'https://nodejs.org/en/'" :name="'Node.svg'" :text="'Logo Node.js'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/MySQL'" :name="'MySQL.svg'" :text="'Logo MySql'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/MongoDB'" :name="'mongo.png'" :text="'Logo MongoDB'" />
                    <x-tech-image :link="'https://it.wikipedia.org/wiki/Nginx'" :name="'Nginx.svg'" :text="'Logo NGINX'" />
                    <x-tech-image :link="'https://www.hostinger.it/'" :name="'hostinger.svg'" :text="'Logo Hostinger'" />
                </div>
            </div>
            <div class="flex py-5 justify-center items-end md:justify-start text-sky-700 w-full">
                <i class="fa-solid fa-circle-question text-6xl"></i>
                <p class="ml-2 pr-2 text-2xl md:text-3xl font-sans pl-3 text-left border-b-2 border-r-2 border-sky-700 rounded-br-lg">Richiedi un preventivo per la realizzazione del tuo sito web</p>
            </div>
            <p class="mt-5">Hai bisogno di maggiori informazioni o hai un progetto che vuoi sviluppare?
                <br>
                Compila il form che trovi qui sotto, ti risponderò il prima possibile.
            </p>
            <div class="w-full">
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