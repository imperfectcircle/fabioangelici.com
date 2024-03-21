<x-layout :title="'Fabio Angelici | Portali ecommerce'"
    :description="'Vuoi iniziare a vendere i tuoi prodotti o servizi online? Contattami per sviluppare il tuo portale di ecommerce'"
    :ogUrl="'https://www.fabioangelici.com/realizzazione-portali-ecommerce'"
    ogImage=''
    :ogDescription="'Vuoi iniziare a vendere i tuoi prodotti o servizi online? Contattami per sviluppare il tuo portale di ecommerce'"
    :ogTitle="'Fabio Angelici | Portali ecommerce'"
    :canonical="'https://fabioangelici.com/realizzazione-portali-ecommerce'"
>
    <section id="hero" class="bg flex flex-col items-center lg:grid lg:grid-cols-6 lg:items-start mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Portali Ecommerce</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
        <div class="my-5 w-full items-start lg:col-start-2">
            {{ Breadcrumbs::render('ecommerce') }}
        </div>
        <div class="lg:h-full lg:flex lg:flex-col lg:justify-center space-y-5 p-5 lg:col-span-2 lg:col-start-2 text-xl lg:p-0 lg:pr-5 lg:space-y-5 ">
            <p>L'ecommerce sta crescendo rapidamente come una delle principali forme di commercio e di acquisto di prodotti e servizi. Con l'aiuto della tecnologia digitale, le aziende e i consumatori possono facilmente eseguire transazioni commerciali in tutto il mondo. </p>
            <p>Negli ecommerce che sviluppo vengono implementate le principali funzioni tipiche dei negozi online: schede dettagliate dei singoli prodotti, iscrizione dei nuovi utenti, carrello virtuale e metodi di pagamento maggiormente utilizzati.</p>
            <p>Il tutto facilmente gestibile attraverso un pannello di amministrazione di facile navigazione e da cui è possibile gestire qualsiasi aspetto del portale.</p>
        </div>
        <div class="lg:mt-10 lg:col-span-2 lg:col-start-4">
            <img class="rounded-lg" src="images/ecommerce-development.webp" alt="Ecommerce">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="lg:w-6/12 lg:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'ecommerce'"></x-contact-form>
        </div>
    </section>
</x-layout>