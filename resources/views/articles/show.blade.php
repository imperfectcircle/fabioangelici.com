<x-layout 
    :title="$article->title"
    :description="$article->description"
    ogUrl="https://fabioangelici.com/article/{{ $article->slug }}"
    :ogDescription="$article->description"
    :ogTitle="$article->title"
    canonical="https://fabioangelici.com/article/{{ $article->slug }}"
>
    <section id="hero">
        <div class="py-12">
            <div class="mx-auto max-w-7xl">
                {{ Breadcrumbs::render('article', $article) }}
            </div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <img class="mx-auto rounded-lg shadow-xl mb-10" src="{{ Storage::url($article->picture->image) }}" alt="{{ $article->title }}">
                            <h1 class="text-4xl md:text-6xl text-center mb-10">{{ $article->title }}</h1>
                            <div class=" max-w-5xl mx-auto prose md:prose-xl">{!! $article->body !!}</div>
                        </div>
    
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-center mb-3 md:text-[40px] font-code pt-10">Se vuoi creare il tuo sito web contattami per un preventivo gratuito</h2>
                <div class="md:w-6/12 mx-auto">
                    <x-contact-form page="{{ $article->title }}"/>
                </div>
            </div>
        </div>
    </section>
</x-layout>