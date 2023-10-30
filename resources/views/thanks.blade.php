<x-layout
    :title="'Fabio Angelici | Grazie per avermi contattato!'"
    :description="'Grazie per avermi contattato'"
    :ogUrl="'https://fabioangelici.com/thank-you'"
    ogImage=''
    :ogDescription="'Grazie per avermi contattato'"
    :ogTitle="'Fabio Angelici | Grazie per avermi contattato!'"
    :canonical="'https://fabioangelici.com/thank-you'"
>
    <section id="hero" class="thanks flex flex-col justify-center text-white">
        <div class="text-center md:text-left md:ml-24">
            <h1 class="text-6xl">Ciao {{ $name }}</h1>
            <p class="text-5xl">grazie per avermi contattato.</p>
            <p class="text-4xl mt-5">Ti risponderò il prima possibile!</p>
            <p class="text-4xl mt-7" id="backParagraph"></p>
        </div>
    </section>
</x-layout>