<x-layout :title="'Fabio Angelici | Restyling siti'"
    :description="'Hai già un sito ma non sei soddisfatto del suo aspetto o delle sue performance? Contattami per valutare come poterlo rendere ciò che vuoi'"
    :ogUrl="'https://www.fabioangelici.com/restyling'"
    :ogDescription="'Hai già un sito ma non sei soddisfatto del suo aspetto o delle sue performance? Contattami per valutare come poterlo rendere ciò che vuoi'"
    :ogTitle="'Fabio Angelici | Restyling siti'"
    :canonical="'https://fabioangelici.com/restyling'"
>
    <section id="hero" class="flex flex-col items-center md:grid md:grid-cols-6 md:items-start mb-10">
        <div class="w-full md:col-span-6 h-fit bg-gradient-to-br from-blue-900 to-sky-600 py-20 px-3 text-center text-gray-300">
            <h1 class="text-4xl">Restyling dei siti</h1>
        </div>
        <div class="w-full items-start md:col-start-2">
            {{ Breadcrumbs::render('restyling') }}
        </div>
        <div class="md:h-full md:flex md:flex-col md:justify-center space-y-5 p-5 md:mt-10 md:col-span-2 md:col-start-2 text-xl md:p-0 md:pr-5 md:space-y-5 ">
            <p>Il restyling di un sito non riguarda solo l'aspetto grafico che rimane certamente una parte molto importante del sito.</p>
            <p>Con il termine restyling si intende tutta una serie di operazioni che vanno a migliorare le performance, la parte grafica, la user experience e tanti altri fattori.</p>
            <p>Contattami se hai un sito di cui non sei pienamente soddisfatto!</p>
        </div>
        <div class="md:mt-10 md:col-span-2 md:col-start-4">
            <img class="rounded-lg" src="images/restyling.webp" alt="Restyling sito web">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="md:w-6/12 md:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'restyling'"></x-contact-form>
        </div>
    </section>
</x-layout>