<x-layout
    :title="'Fabio Angelici | Contatti'"
    :description="'Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito.'"
    :ogUrl="'https://fabioangelici.com/contacts'"
    :ogDescription="'Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito.'"
    :ogTitle="'Fabio Angelici | Contatti'"
    :canonical="'https://fabioangelici.com/contatti'"
>
    <section id="hero" class="">
        <div class="h-fit flex items-center justify-center py-20 bg-sky-900 px-3 font-bold">
            <p class="text-sm md:text-2xl lg:text-4xl text-slate-400">1</p>
            <h1 class="text-4xl pl-5"><span class="text-yellow-500">Contatti <span class="text-white">;</span></h1>
            <p class=" text-4xl animate-pulse text-white pl-3">|</p>
        </div>
        {{-- Breadcrumb --}}
        <div class="md:col-start-2 md:grid md:grid-cols-6 md:gap-5">
            <div class="md:col-start-2 md:col-span-2">
                {{ Breadcrumbs::render('contacts') }}
            </div>
        </div>
        <h2 class="font-code font-bold text-2xl md:text-5xl text-center py-5"><span class="text-cyan-500">Vuoi discutere</span> del tuo <span class="text-yellow-500">progetto web</span><span class="text-pink-400">?</span><br> <span class="text-cyan-500">Contattami per un preventivo gratuito</span><span class="text-pink-400">!</span></h2>
        <div class="md:grid md:grid-cols-4 md:items-center md:justify-items-center space-y-10 md:space-y-0 p-5">
            <div class="col-start-2">
                <h2 class="text-xl font-bold font-code">Fabio Angelici - Web Developer</h2>
                <div class="text-xl font-code">
                    <p>Via P.F. Calvi, 19</p>
                    <p>21100 Varese (Va)</p>
                    <p>P.I. 03929520124</p>
                </div>
            </div>
            <div class="col-start-3 text-xl font-code">
                <h2 class="font-bold">Telefono:<a class="font-normal" href="tel:+393515749172"> +39 351 5749172</a></h2>
                <h2 class="font-bold">Email:<a class="font-normal" href="mailto:info@fabioangelici.com"> info@fabioangelici.com</a></h2>
                <h2 class="font-bold">Orari: <p class="font-normal inline-block"> Lun - Ven 09:<sup>00</sup> - 19:<sup>00</sup></p></h2>
            </div>
        </div>
        <div class="md:col-span-2 md:col-start-2 text-center p-5">
            <div class="md:inline-block">
                <a href="https://wa.me/+393515749172" target="_blank">
                    <i class="fa-brands fa-whatsapp text-6xl p-2 text-green-600 hover:text-green-700"></i>
                </a>
                <a href="skype:live:.cid.8ae67683138ca1aa?chat">
                    <i class="fa-brands fa-skype text-6xl p-2 text-sky-600 hover:text-sky-700"></i>
                </a>
                <a href="https://twitter.com/messages/compose?recipient_id=1618668571000725505" target="_blank">
                    <i class="fa-brands fa-twitter text-6xl p-2 text-sky-500 hover:text-sky-600"></i>
                </a>
            </div>
            </div>
            <div id="contatti" class="md:w-6/12 mx-auto p-5">
                <h2 class="text-3xl text-sky-700">Compila il form sottostante e ti ricontatterò il prima possibile.</h2>
                <x-contact-form :page="'contact'"/>
            </div>
        </div>
        
    </section>
</x-layout>