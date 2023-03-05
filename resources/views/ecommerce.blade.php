<x-layout :title="'Fabio Angelici | Portali ecommerce'"
    :description="'Vuoi iniziare a vendere i tuoi prodotti o servizi online? Contattami per sviluppare il tuo portale di ecommerce'"
    :ogUrl="'https://www.fabioangelici.com/ecommerce'"
    :ogDescription="'Vuoi iniziare a vendere i tuoi prodotti o servizi online? Contattami per sviluppare il tuo portale di ecommerce'"
    :ogTitle="'Fabio Angelici | Portali ecommerce'"
    :canonical="'https://fabioangelici.com/realizzazione-portali-ecommerce'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-6 md:items-start mb-10">
        <div class="w-full md:col-span-6 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Portali ecommerce</h1>
        </div>
        <div class="my-5 w-full items-start md:col-start-2">
            {{ Breadcrumbs::render('ecommerce') }}
        </div>
        <div class="md:h-full md:flex md:flex-col md:justify-center space-y-5 p-5 md:col-span-2 md:col-start-2 text-xl md:p-0 md:pr-5 md:space-y-5 ">
            <p>L'ecommerce sta crescendo rapidamente come una delle principali forme di commercio e di acquisto di prodotti e servizi. Con l'aiuto della tecnologia digitale, le aziende e i consumatori possono facilmente eseguire transazioni commerciali in tutto il mondo. </p>
            <p>Negli ecommerce che sviluppo vengono implementate le principali funzioni tipiche dei negozi online: schede dettagliate dei singoli prodotti, iscrizione dei nuovi utenti, carrello virtuale e metodi di pagamento maggiormente utilizzati.</p>
            <p>Il tutto facilmente gestibile attraverso un pannello di amministrazione di facile navigazione e da cui è possibile gestire qualsiasi aspetto del portale.</p>
        </div>
        <div class="md:mt-10 md:col-span-2 md:col-start-4">
            <img class="rounded-lg" src="images/ecommerce-development.webp" alt="Ecommerce">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="md:w-6/12 md:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'ecommerce'"></x-contact-form>
        </div>
    </section>
</x-layout>