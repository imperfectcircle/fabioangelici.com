<x-layout :title="'Fabio Angelici | Blog di articoli sulla programmazione'"
    :description="'Sei interessato alla programmazione? Leggi i miei articoli per trovare consigli e informazioni'"
    :ogUrl="'https://www.fabioangelici.com/blog'"
    :ogDescription="'Leggi i miei articoli sulla programmazione'"
    :ogTitle="'Fabio Angelici | Blog di articoli sulla programmazione'"
    :canonical="'https://fabioangelici.com/blog'"
>

<section id="hero" class="bg">
    <div class="grid grid-cols-1 lg:grid-cols-4 justify-center h-fit bg-sky-900 font-code font-bold py-20 px-3 text-center text-gray-300">
        <div class="flex col-start-2 col-span-2">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Blog<span class="text-white">;</span></h1>
        </div>
        <div class="flex col-start-2 col-span-2">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">2</p>
            <h2 class="text-4xl pl-5"><span class="text-yellow-500">Articoli sullo sviluppo web<span class="text-white">;</span></h1>
            <p class=" text-4xl animate-pulse text-white pl-3">|</p>
        </div>
    </div>
    
    <div class="mx-auto md:w-7/12 my-10">
        {{ Breadcrumbs::render('blog') }}
        <div class="grid grid-cols-1 px-5 md:grid-cols-3 md:px-0 gap-10">
            @foreach ($articles as $article)
                
                <div class="flex flex-col justify-between mb-10 border-2 p-3 border-gray-300 shadow-lg rounded-lg">
                    <img class="mb-5 rounded-lg md:h-44 shadow-lg" src="{{ Storage::url($article->picture->image) }}" alt="{{ $article->title }}">
                    <p class="text-center font-bold text-2xl">{{ $article->title }}</p>
                    <p class="prose">{!! Str::limit($article->body, 100) !!}</p>
                    <a class="m-2 px-6 py-3 bg-sky-700 hover:bg-sky-800 duration-150 rounded-full text-center w-10/12 mx-auto text-white" href="{{ route('article.show', $article->slug) }}">Leggi l'articolo</a>
                </div>
                
            @endforeach
        </div>
    </div>
</section>

</x-layout>