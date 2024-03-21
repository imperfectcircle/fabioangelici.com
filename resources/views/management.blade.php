<x-layout :title="'Fabio Angelici | Gestionali web'"
    :description="'Hai bisogno di un gestionale personalizzato e raggiungibile da qualsiasi device? contattami per richiedere info'"
    :ogUrl="'https://www.fabioangelici.com/gestionali-web'"
    ogImage=''
    :ogDescription="'Hai bisogno di un gestionale personalizzato e raggiungibile da qualsiasi device? contattami per richiedere info'"
    :ogTitle="'Fabio Angelici | Gestionali web'"
    :canonical="'https://fabioangelici.com/gestionali-web'"
>
    <section id="hero" class="flex flex-col items-center lg:grid lg:grid-cols-6 lg:items-start mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Sviluppo gestionali web</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
        <div class="w-full items-start lg:col-start-2">
            {{ Breadcrumbs::render('gestionali') }}
        </div>
        <div class="lg:h-full lg:flex lg:flex-col lg:justify-center space-y-5 p-5 lg:mt-5 lg:col-span-2 lg:col-start-2 text-xl lg:p-0 lg:pr-5">
            <p>Un gestionale non è altro che un software che permette di gestire e automatizzare determinati processi all'interno di un'azienda</p>
            <p>A differenza dei normali programmi gestionali, un gestionale web based offre diversi vantaggi come il fatto di poter essere utilizzato da qualsiasi dispositivo che disponga di una connessione a internet e di un browser, di essere facilmente aggiornabile o di poter essere personalizzato in base alle reali necessità del cliente.</p>
            <p>Sia che tu abbia bisongno di gestire il tuo magazino, o che ti serva un programma per la contabilità un gestionale web può essere la soluzione che fa per te.</p>
        </div>
        <div class="lg:mt-10 lg:col-span-2 lg:col-start-4 p-5">
            <img class="rounded-lg" src="images/management.webp" alt="Gestionale web">
        </div>
        <div class="lg:col-span-4 lg:col-start-2 text-center mt-5">
            <h2 class="text-4xl mb-4">Prova la demo</h2>
            <p class="text-xl">Se vuoi testare alcune caratteristiche di un gestionale web, ho realizzato una web app dimostrativa con delle funzioni base.</p>
            <p class="text-xl mb-10">Per provarla ti basterà cliccare sul pulsante qui sotto e inserire i dati di accesso.</p>
            <p class="text-xl">Username: demo</p>
            <p class="text-xl mb-10">Password: demo</p>
            <a target="_blank" class="py-3 px-6 border-2 border-orange-500 rounded-full uppercase hover:bg-orange-500 hover:text-white duration-200 text-base lg:text-xl" href="https://gestionale.fabioangelici.com">Prova la demo</a>
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="lg:w-6/12 lg:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'management'"></x-contact-form>
        </div>
    </section>
</x-layout>