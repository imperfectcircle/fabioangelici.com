<x-layout :title="'Fabio Angelici | Restyling siti'"
    :description="'Hai già un sito ma non sei soddisfatto del suo aspetto o delle sue performance? Contattami per valutare come poterlo rendere ciò che vuoi'"
    :ogUrl="'https://www.fabioangelici.com/restyling'"
    ogImage=''
    :ogDescription="'Hai già un sito ma non sei soddisfatto del suo aspetto o delle sue performance? Contattami per valutare come poterlo rendere ciò che vuoi'"
    :ogTitle="'Fabio Angelici | Restyling siti'"
    :canonical="'https://fabioangelici.com/restyling'"
>
    <section id="hero" class="flex flex-col items-center lg:grid lg:grid-cols-6 lg:items-start mb-10">
        <div class="w-full flex items-center justify-center lg:col-span-6 h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Restyling dei siti</span>;</h1>
            <p class=" text-4xl animate-pulse">|</p>
        </div>
        <div class="w-full items-start lg:col-start-2">
            {{ Breadcrumbs::render('restyling') }}
        </div>
        <div class="lg:h-full lg:flex lg:flex-col lg:justify-center space-y-5 p-5 lg:mt-10 lg:col-span-2 lg:col-start-2 text-xl lg:p-0 lg:pr-5 lg:space-y-5 ">
            <p>Il restyling di un sito non riguarda solo l'aspetto grafico che rimane certamente una parte molto importante del sito.</p>
            <p>Con il termine restyling si intende tutta una serie di operazioni che vanno a migliorare le performance, la parte grafica, la user experience e tanti altri fattori.</p>
            <p>Contattami se hai un sito di cui non sei pienamente soddisfatto!</p>
        </div>
        <div class="lg:mt-10 lg:col-span-2 lg:col-start-4">
            <img class="rounded-lg" src="images/restyling.webp" alt="Restyling sito web">
        </div>
    </section>
    <section class="p-5  bg-gradient-to-br from-sky-900 to-sky-400 py-20">
        <div class="lg:w-6/12 lg:mx-auto text-white">
            <h2 class="text-4xl">Richiedi il servizio</h2>
            <x-contact-form :page="'restyling'"></x-contact-form>
        </div>
    </section>
</x-layout>