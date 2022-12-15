<x-layout :title="'Fabio Angelici | Gestionali web'"
    :description="'Hai bisogno di un gestionale personalizzato e raggiungibile da qualsiasi device? contattami per richiedere info'"
    :ogUrl="'https://www.fabioangelici.com/management'"
    :ogDescription="'Hai bisogno di un gestionale personalizzato e raggiungibile da qualsiasi device? contattami per richiedere info'"
    :ogTitle="'Fabio Angelici | Gestionali web'"
    :canonical="'https://fabioangelici.com/management'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-6 md:items-start mb-10">
        <div class="w-full md:col-span-6 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Sviluppo gestionali web</h1>
        </div>
        <div class="md:h-full md:flex md:flex-col md:justify-center space-y-5 p-5 mt-10 md:col-span-2 md:col-start-2 text-xl md:p-0 md:pr-5">
            <p>Un gestionale non è altro che un software che permette di gestire e automatizzare determinati processi all'interno di un'azienda</p>
            <p>A differenza dei normali programmi gestionali, un gestionale web based offre diversi vantaggi come il fatto di poter essere utilizzato da qualsiasi dispositivo che disponga di una connessione a internet e di un browser, di essere facilmente aggiornabile o di poter essere personalizzato in base alle reali necessità del cliente.</p>
            <p>Sia che tu abbia bisongno di gestire il tuo magazino, o che ti serva un programma per la contabilità un gestionale web può essere la soluzione che fa per te.</p>
        </div>
        <div class="md:mt-10 md:col-span-2 md:col-start-4 p-5">
            <img class="rounded-lg" src="images/management.webp" alt="Gestionale web">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="md:w-6/12 md:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form></x-contact-form>
        </div>
    </section>
</x-layout>