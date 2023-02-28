<x-layout :title="'Fabio Angelici | Sviluppo siti web'"
    :description="'Sei interessato alla creazione di un tuo sito web? contattami per richiedere info'"
    :ogUrl="'https://www.fabioangelici.com/web-sites'"
    :ogDescription="'Sei interessato alla creazione di un tuo sito web? contattami per richiedere info'"
    :ogTitle="'Fabio Angelici | Sviluppo siti web'"
    :canonical="'https://fabioangelici.com/web-sites'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-6 md:items-start mb-10">
        <div class="w-full md:col-span-6 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Sviluppo siti web</h1>
        </div>
        {{-- Breadcrumb --}}
        <div class="w-full items-start md:col-start-2">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('websites') }}
            </div>
        </div>
        <div class="p-5 mt-10 md:col-span-2 md:col-start-2 text-xl md:p-0 md:pr-5">
            <p>I siti web sono una parte importante dell'era digitale. Con l'aumento della domanda di siti web, sono state sviluppate e migliorate tecniche e processi che consentono agli sviluppatori di creare siti web di alta qualità.</p>
            <p>In primo luogo, è necessario acquisire le informazioni necessarie per creare un sito adatto alle esigenze dei clienti. Questo processo richiede una ricerca approfondita su qualsiasi argomento relativo al sito.</p>
            <p>Una volta che tutte le informazioni sono state raccolte, è possibile iniziare a progettare il sito. Nel processo di progettazione, verrà creato un layout, si sceglieranno i colori, le immagini, i caratteri, e si definirà l'architettura del sito.</p>
            <p>Sviluppare un sito web può essere un processo complesso, ma se eseguito correttamente, può offrire una grande quantità di valore e portare una presenza online di successo.</p>
            <p>Per questo motivo è importante rivolgersi ad un professionista che possa garantirti un buon risultato al giusto costo.</p>
        </div>
        <div class="md:mt-10 md:col-span-2 md:col-start-4">
            <img class="rounded-lg" src="images/websites.webp" alt="Web sites">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="md:w-6/12 md:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'websites'"/>
        </div>
    </section>
</x-layout>