<x-layout 
    :title="'Fabio Angelici | Sviluppatore web freelance | PHP e JavaScript'"
    :description="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogUrl="'https://fabioangelici.com/aboout'"
    :ogDescription="'Sono uno sviluppatore web freelance PHP e Javascript. Se vuoi saperne di più visita il mio sito'"
    :ogTitle="'Fabio Angelici | Sviluppatore web freelance | PHP, JavaScript'"
    :canonical="'https://fabioangelici.com/about'"
>
    <section id="hero">
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <img class="mx-auto rounded-lg shadow-xl mb-10" src="{{ Storage::url($article->picture->image) }}" alt="{{ $article->title }}">
                            <h1 class="text-6xl text-center">{{ $article->title }}</h1>
                            <div class="prose lg:prose-xl">{!! $article->body !!}</div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>