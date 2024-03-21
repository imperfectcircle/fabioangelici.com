<x-layout :title="'Fabio Angelici | Sviluppo siti web'"
    :description="'Sei interessato alla creazione di un tuo sito web? contattami per richiedere info'"
    :ogUrl="'https://www.fabioangelici.com/realizzazione-siti-internet'"
    ogImage=''
    :ogDescription="'Sei interessato alla creazione di un tuo sito web? contattami per richiedere info'"
    :ogTitle="'Fabio Angelici | Sviluppo siti web'"
    :canonical="'https://fabioangelici.com/realizzazione-siti-internet'"
>
    <section id="hero" class="bg flex flex-col items-center lg:grid lg:grid-cols-6 lg:items-start mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Sviluppo siti web</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
        {{-- Breadcrumb --}}
        <div class="w-full items-start lg:col-start-2">
            <div class="lg:col-start-2 lg:col-span-2">
                {{ Breadcrumbs::render('websites') }}
            </div>
        </div>
        <div class="p-5 mt-10 lg:col-span-2 lg:col-start-2 text-xl lg:p-0 lg:pr-5">
            <p>I siti web sono una parte importante dell'era digitale. Con l'aumento della domanda di siti web, sono state sviluppate e migliorate tecniche e processi che consentono agli sviluppatori di creare siti web di alta qualità.</p>
            <p>In primo luogo, è necessario acquisire le informazioni necessarie per creare un sito adatto alle esigenze dei clienti. Questo processo richiede una ricerca approfondita su qualsiasi argomento relativo al sito.</p>
            <p>Una volta che tutte le informazioni sono state raccolte, è possibile iniziare a progettare il sito. Nel processo di progettazione, verrà creato un layout, si sceglieranno i colori, le immagini, i caratteri, e si definirà l'architettura del sito.</p>
            <p>Sviluppare un sito web può essere un processo complesso, ma se eseguito correttamente, può offrire una grande quantità di valore e portare una presenza online di successo.</p>
            <p>Per questo motivo è importante rivolgersi ad un professionista che possa garantirti un buon risultato al giusto costo.</p>
        </div>
        <div class="lg:mt-10 lg:col-span-2 lg:col-start-4">
            <img class="rounded-lg" src="images/websites.webp" alt="Web sites">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="lg:w-6/12 lg:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'websites'"/>
        </div>
    </section>
</x-layout>