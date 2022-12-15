<x-layout :title="'Fabio Angelici | Web Developer Freelance | Sviluppo siti web, ecommerce, gestionali web'"
    :description="'Sviluppo siti web, ecommerce, blog e gestionali web per privati e aziende. Per un lavoro professionale e affidabile non esitare a contattarmi'"
    :ogUrl="'https://www.fabioangelici.com/'"
    :ogDescription="'Sviluppo siti web, ecommerce e gestionali web. Per maggiori info visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppo siti web ecommerce e gestionali'"
    :canonical="'https://fabioangelici.com'"
>
    {{-- Hero Section --}}
    <section class="hero flex items-center justify-center" id="hero">
        <div class="bg-gray-400/40 mx-2 py-5 md:w-6/12 md:h-fit flex flex-col items-center justify-center text-gray-200 rounded-lg">
            <h2 class=" text-xl p-5 md:text-6xl uppercase text-center">
                per lo sviluppo di
                <br>
                siti web
                <br>
                ed ecommerce
                <br>
                affidati alle competenze
                <br>
                di un professionista.
            </h2>
            <x-button :route="route('public.contacts')" :text="'contattami'" />
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Intro Section --}}
    <section id="intro" class="bg-sky-600 h-fit flex justify-center">
        <div class="md:w-6/12 my-5 p-5 text-lg md:my-10 md:text-2xl text-gray-300">
            <h1 class="text-3xl font-bold text-center mb-3 md:text-5xl">Creazione e restyling di siti web e ecommerce </h1>
            <p class="font-alata">Mi chiamo Fabio Angelici, sono uno sviluppatore freelance e mi occupo della <strong>creazione e del restyling di siti ed ecommerce e dello sviluppo di gestionali web</strong> per aziende, liberi professionisti e privati.</p>
            <p class="font-alata mt-5">Nello sviluppo mi dedico sia alla parte front-end, cioè ciò che l'utente vede, sia alla parte back-end, vale a dire il "motore" vero e proprio del sito, rendendo il risultato finale <strong>unico, affidabile e di facile gestione</strong>.</p>
            <p class="font-alata mt-5">Anche lavorando da solo cerco di ispirare il mio flusso lavorativo alle metodologie <em>AGILE</em>, la collaborazione con il cliente è quindi <strong>fondamentale</strong> per la buona riuscita del progetto e per eliminare gli sprechi di tempo; verrai coinvolto a più riprese nel processo di creazione del sito, dal primo incontro alle diverse fasi della lavorazione.</p>
            <div class="mt-10 w-full text-center">
                <x-button :route="route('public.about')" :text="'Come lavoro'" />
            </div>
        </div>
    </section>
    {{-- End Intro Section --}}

    {{-- Offer Section --}}
    <section id="offer" class="bg-gray-200 h-fit flex justify-center">
        <div class="md:w-8/12 my-5 p-5 text-lg md:my-10 md:text-2xl text-black">
            <h2 class="text-3xl font-bold text-center mb-3 md:text-5xl">Cosa posso offrirti</h2>
            <div class="mt-5  md:mt-10 grid grid-cols-1 md:grid-cols-3 justify-items-center">
                <x-card
                    :route="route('public.websites')"
                    :icon="'fa-solid fa-code'" 
                    :title="'sviluppo siti web'"
                    :body="'Il servizio consiste nella realizzazione di siti internet veloci, affidabili e altamente performanti. Responsive e ottimizzati per garantire una user exprience ottimale.'"    
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
                    :body="'Hai già un sito web ma non sei soddisfatto del look o delle prestazioni? Attraverso un attendo studio posso offrirti una nuova versione del tuo sito in modo SEO friendly'"    
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
    <section id="contact" class="h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 flex flex-col items-center text-gray-300">
        <h2 class="text-3xl px-2 font-bold text-center mb-2 md:text-5xl">Realizza ora il tuo sito web!</h2>
        <p class="font-alata text-lg mb-5  px-3 text-center md:text-xl">Il risultato sarà un perfetto biglietto da visita on-line per la tua azienda o la tua attività. Richiedi un consulto gratuito.</p>
        <div class="flex flex-col items-center md:flex-row space-y-5 md:space-y-0 md:space-x-5">
            <x-button :route="route('public.contacts')" :text="'Contattami on-line'" />
            <x-button :route="'tel:+393515749172'" :text="'+393515749172'" />
        </div>
    </section>
    {{-- End Contact Section --}}

    {{-- Articles Section --}}
    <section id="articles">
        <h2 class="text-2xl text-center mt-10">To do sezione articoli</h2>
    </section>
    {{-- End Articles Section --}}
</x-layout>