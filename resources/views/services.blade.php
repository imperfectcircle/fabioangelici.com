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
                    <p class="mt-3">Come web developer freelance, sono specializzato nella creazione di <strong>siti web professionali e personalizzati per soddisfare le esigenze dei miei clienti</strong>. Sia che si tratti di un sito aziendale o istituzionale, di un blog o di un portfolio personale, sarò in grado di trasformare la tua idea in una realtà digitale di successo.</p>
                    <p>Pongo molta attenzione a garantire una solida presenza online per i miei clienti, attraverso la realizzazione di <strong>siti ottimizzati per i motori di ricerca e la user experience</strong>. I servizi che offro includono la registrazione del dominio, lo spazio hosting, il certificato SSL e l'analisi e il monitoraggio del sito una volta messo in produzione.</p>
                    <p>Tutti i siti che sviluppo sono progettati con una modalità mobile first, per garantire <strong>un'esperienza ottimale su tutti i dispositivi</strong> e una navigazione fluida su schermi di qualsiasi dimensione.</p>
                    <div class="pt-3 text-center">
                        <x-button :route="'#form'" :text="'Richiedi il servizio'" />
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 order-first md:order-none">
                <img class="rounded-lg" src="images/web.webp" alt="Siti Internet">
            </div>
            {{-- End first row --}}

            {{-- Second row --}}
            <div class="md:col-span-2 md:col-start-2 md:mt-16">
                <img class="rounded-lg" src="images/ecommerce.webp" alt="E-Commerce">
            </div>
            <div class="mb-5 md:col-span-2 md:mb-0 md:mt-16">
                <h2 class="text-3xl text-center md:text-left text-sky-700">Portali E-Commerce</h2>
                <div class="text-xl space-y-3">
                    <p class="mt-3">Il commercio elettronico è diventato un <strong>elemento fondamentale del mercato</strong> in questi ultimi anni, e se sei alla ricerca di un modo per ampliare la tua attività commerciale o di avviare la vendita dei tuoi prodotti online, <strong>posso offrirti il mio supporto come web developer</strong>.</p>
                    <p>Ti propongo soluzioni complete di e-commerce che soddisfino le tue esigenze, con un <strong>pannello di controllo intuitivo</strong> e personalizzabile, <strong>opzioni di pagamento affidabili</strong> e diffuse e un'interfaccia utente accattivante e facile da navigare.</p>
                    <p>I servizi che offro includono la registrazione del dominio, lo spazio hosting, il certificato SSL e l'analisi e il monitoraggio del sito una volta messo in produzione. Insieme, questi servizi ti garantiranno <strong>un'esperienza di vendita online efficiente e di successo</strong>.</p>
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
                    <p class="mt-3">Se stai cercando un servizio di hosting <strong>affidabile e sicuro</strong> per il tuo sito web, ti offro la soluzione che fa per te. Scegliere un'opzione di hosting a basso costo potrebbe sembrare vantaggioso all'inizio, ma potrebbe causare problemi di velocità di caricamento delle pagine e mancanza di un certificato SSL a lungo termine.</p>
                    <p>Il servizio di hosting che ti propongo garantisce <strong>prestazioni elevate e sicurezza dei dati</strong>, con la possibilità di effettuare regolari backup dei tuoi contenuti.</p>
                    <p>Inclusi nel servizio: registrazione o trasferimento del dominio, configurazione delle caselle email, backup regolari e certificato SSL affidabile.</p>
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