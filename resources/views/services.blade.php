<x-layout
    :title="'Fabio Angelici | Servizi internet per aziende, professionisti e privati'"
    :description="'Servizi web per la tua attività: Siti internet, portali e-commerce, gestionali web e servizio di hosting'"
    :ogUrl="'https://fabioangelici.com/services'"
    :ogDescription="'Servizi web per la tua attività: Siti web, portali e-commerce, gestionali web e servizio di hosting'"
    :ogTitle="'Fabio Angelici | Servizi internet per aziende, professionisti e privati'"
    :canonical="'https://fabioangelici.com/services'"
>
    <section id="hero">
        <div class="h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Servizi Web</h1>
        </div>
        <div class="mt-10 flex flex-col space-y-10 p-5 md:grid md:grid-cols-6 md:gap-5">
            {{-- First row --}}
            <div class="mb-5 md:col-start-2 md:col-span-2 md:mb-0">
                <h2 class="text-3xl text-center md:text-left text-sky-700">Progettazione e sviluppo siti web</h2>
                <div class="text-xl space-y-2">
                    <p class="mt-3">Sia che tu abbia bisogno di un sito aziendale o istituzionale , di un blog o di un sito portfilio, posso sviluppare la tua idea e renderla realtà.</p>
                    <p><strong>Realizzo siti professionali e in linea con le richieste del cliente</strong>, ponendo attenzione a tutto ciò che è importante per un <em>buon posizionamento nei principali motori di ricerca e alla <strong>user experience</strong></em>.</p>
                    <p>Tra i servizi inclusi: registrazione del dominio, spazio hosting, certificato SSL, analisi e monitoraggio post messa in produzione.</p>
                    <p>Tutti i siti che realizzo sono <strong>responsive</strong> e creati in modalità mobile first.</p>
                    <div class="pt-3 text-center">
                        <x-button :route="'#form'" :text="'Richiedi il servizio'" />
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 order-first md:order-none">
                <img class="rounded-lg" src="images/web.webp" alt="">
            </div>
            {{-- End first row --}}

            {{-- Second row --}}
            <div class="md:col-span-2 md:col-start-2 md:mt-16">
                <img class="rounded-lg" src="images/ecommerce.webp" alt="">
            </div>
            <div class="mb-5 md:col-span-2 md:mb-0 md:mt-16">
                <h2 class="text-3xl text-center md:text-left text-sky-700">Portali E-Commerce</h2>
                <div class="text-xl space-y-3">
                    <p class="mt-3">Negli ultimi anni il commercio online è diventato predominante; se la tua intenzione è quella di ampliare il tuo bisness o di iniziare vendendo i tuoi prodotti online, questo è il servizio che fa per te.</p>
                    <p>Gli E-Commerce che ti propongo sono <strong>completi di tutte le funzionalità</strong>: un <strong>pannello di controllo intuitivo e personabilizzabile</strong> in base alle tue esigenze, pagamenti con i metodi di pagamento più utilizzati e <strong>un'interfaccia utente accattivante e facile da navigare</strong>.</p>
                    <p>Tra i servizi inclusi: registrazione del dominio, spazio hosting, certificato SSL, analisi e monitoraggio post messa in produzione.</p>
                    <div class="pt-3 text-center">
                        <x-button :route="'#form'" :text="'Richiedi il servizio'" />
                    </div>
                </div>
            </div>
            {{-- End second row --}}

            {{-- Third row --}}
            <div class="mb-5 md:col-span-2 order-2 md:order-none md:col-start-2 md:mb-0 md:mt-16">
                <h2 class="text-3xl text-center md:text-left text-sky-700">Servizio di hosting</h2>
                <div class="text-xl space-y-3">
                    <p class="mt-3">Tra le cose più importanti quando si decide di mettere online un sito c'è <strong>la scelta dello spazio web</strong>. Un servizio di hosting a poco prezzo può sembrare conveniente ad un occhio poco esperto ma alla lunga può portare a problematiche come la scarsa velocità nel caricamento delle pagine o la mancanza di un certificato SSL.</p>
                    <p>Quello che ti propongo è un servizio hosting su una piattaforma <strong>veloce e sicura</strong> con possibilità di effettuare backup dei tuoi contenuti ad un <strong>prezzo comunque concorrenziale</strong>.</p>
                    <p>Tra i servizi inclusi: registrazione o trasferimento del dominio, registrazione delle caselle email, backup giornalieri e certificato SSL.</p>
                    <div class="pt-3 text-center">
                        <x-button :route="'#form'" :text="'Richiedi il servizio'" />
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 order-1 md:order-none md:mt-16">
                <img class="rounded-lg" src="images/server.webp" alt="">
            </div>
            
            {{-- End Third row --}}

            

        </div>
        {{-- Contact form --}}
        <div id="form" class="mt-10 h-fit bg-gradient-to-br from-sky-900 to-sky-400 py-20">
            <div class="">
                <h2 class="text-4xl text-gray-200 text-center mb-5">Richiedi informazioni</h2>
            </div>
            <div class="p-5 md:p-0 md:w-6/12 mx-auto text-gray-200">
                <x-contact-form :page="'services'"/>
            </div>
        </div>
    </section>
</x-layout>