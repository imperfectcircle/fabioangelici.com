<x-layout 
    :title="'Fabio Angelici | Sviluppatore web freelance | PHP, JavaScript'"
    :description="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogUrl="'https://fabioangelici.com/aboout'"
    :ogDescription="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppatore web freelance | PHP, JavaScript'"
    :canonical="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-5 md:items-start">
        <div class="md:col-span-5 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h2 class="text-4xl">Sviluppatore Web Freelance</h2>
        </div>
        <div class="md:col-start-2 md:col-span-2 md:px-0 space-y-3 text-lg md:text-xl py-10 px-5 flex flex-col items-center text-justify">
            <div class="flex justify-center items-end md:justify-start text-sky-700 w-full mb-5">
                <i class="fa-solid fa-id-card-clip text-6xl "></i>
                <p class="ml-2 pr-2 text-3xl font-sans pl-3 border-b-2 border-r-2 border-sky-700 rounded-br-lg"> Chi sono</p>
            </div>
            <p class="pb-5">Mi chiamo <strong>Fabio Angelici</strong> e sono uno <strong>Sviluppatore Web Freelance</strong> di Varese che opera in tutta Italia. Nutro una passione per l'informatica sin dai primi anni novanta, quando ho avuto il primo computer.</p>
            <img class="rounded-lg" src="images/laptop.webp" alt="Laptop con codici di programmazione">
            <p class="pt-5">Con l'avvento di internet inizio ad avvicinarmi al mondo della <em>programmazione web</em>, prima da autodidatta poi frequentando il primo corso organizzato dalla regione Lombardia all'inizio degli anni 2000.</p>
            <p>Terminato il corso trovo impiego in una <strong>web agency</strong> di Varese in cui inizio a mettere a frutto ciò che ho imparato e che mi dà la possibilità, nel tempo, di scoprire nuovi linguaggi e tecnologie.</p>
            <p>All'inizio della mia carriera mi appassiono al lato front-end della programmazione poi, prima con <em>PHP e i suoi framework</em> e in seguito con la <em>libreria Node.js</em>, scopro le "meraviglie" del back-end e del poter <strong>realizzare in autonomia interi progetti</strong>.</p>
            <p>Negli anni mi sono tunuto <strong>sempre aggiornato</strong> studiando su manuali o con la documentazione on-line, in quanto ritengo che il continuo studio e approfondimento siano una parte fondamentale di questo lavoro.</p>
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
                    <x-tech-image :name="'html5.svg'" :text="'Logo html 5'" />
                    <x-tech-image :name="'css3.svg'" :text="'Logo css 3'" />
                    <x-tech-image :name="'js.svg'" :text="'Logo JavaScript'" />
                    <x-tech-image :name="'laravel.svg'" :text="'Logo Laravel'" />
                    <x-tech-image :name="'vue.svg'" :text="'Logo Vue'" />
                </div>
                <div class="space-y-5 md:flex md:space-x-5 md:space-y-0">
                    <x-tech-image :name="'node.svg'" :text="'Logo Node.js'" />
                    <x-tech-image :name="'mysql.svg'" :text="'Logo MySql'" />
                    <x-tech-image :name="'mongodb.svg'" :text="'Logo MongoDB'" />
                    <x-tech-image :name="'nginx.svg'" :text="'Logo NGINX'" />
                    <x-tech-image :name="'digitalocean.svg'" :text="'Logo Digitl Ocean'" />
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
                <form class="" action="" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-2 py-5">
                        <label for="service">Scegli il servizio</label>
                        <select class="p-3 border bg-gray-100 border-orange-500 rounded-lg" name="service" id="service">
                            <option value="site">Sito web</option>
                            <option value="restyling">Restyling sito web</option>
                            <option value="ecommerce">Portale E-Commerce</option>
                            <option value="gestionale">Gestionale</option>
                            <option value="domain">Resgistrazione dominio</option>
                            <option value="hosting">Spazio web</option>
                            <option value="other">Altro</option>
                        </select>
                    </div>
                    <div class="flex flex-col space-y-2 pb-5">
                        <label for="name">Nome</label>
                        <input type="text" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="name" id="name" value="{{ old('name') }}" placeholder="Il tuo nome" required>
                    </div>
                    <div class="flex flex-col space-y-2 py-5">
                        <label for="email">Email</label>
                        <input type="email" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="email" id="email" value="{{ old('email') }}" placeholder="La tua mail" required>
                    </div>
                    <div class="flex flex-col space-y-2 pb-5">
                        <label for="phone">Telefono</label>
                        <input type="text" class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Il tuo telefono" required>
                    </div>
                    <div class="flex flex-col space-y-2 pb-5">
                        <label for="message">Il tuo messaggio</label>
                        <textarea class="p-3 border bg-gray-100 border-orange-500 rounded-lg focus:bg-green-300 resize-none" name="message" id="message" rows="10" placeholder="Inserisci qui il tuo messaggio; cerca di essere il più preciso possibile">{{ old('message') }}</textarea>
                    </div>
                    <div class="flex space-y-2 pb-5">
                        <input type="checkbox" class="scale-150" name="privacy" id="privacy">
                        <label for="privacy"><p class="text-sm pl-5">Dichiaro di aver preso visione dell'informativa sulla privacy, pertanto presto il mio consenso al trattamento dei dati per ricevere le informazioni richieste</p></label>
                        
                    </div>
                    <div class="flex justify-center">
                        <button class="py-3 w-9/12 border-2 border-orange-500 rounded-full uppercase hover:bg-orange-500 hover:text-white duration-200">Invia</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="md:sticky md:top-[10rem] md:pl-16 md:pt-16">
            <h2 class="text-2xl text-sky-700 border-b-2 border-sky-700 inline-block">Servizi Internet</h2>
        </div>
    </section>    
</x-layout>