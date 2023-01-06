<x-layout
    :title="'Fabio Angelici | Contatti'"
    :description="'Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito.'"
    :ogUrl="'https://fabioangelici.com/contacts'"
    :ogDescription="'Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito.'"
    :ogTitle="'Fabio Angelici | Contatti'"
    :canonical="'https://fabioangelici.com/contacts'"
>
    <section id="hero" class="">
        <div class="flex flex-col items-center mt-10 md:grid md:grid-cols-4 md:mt-0">
            <div class="md:col-span-2 md:col-start-2">
                <img src="images/contatti.webp" alt="">
                <h1 class="text-4xl p-5 text-justify md:text-center text-sky-700">Contattami per info o per un preventivo gratuito</h1>
            </div>
            <div class="md:col-span-2 md:col-start-2 p-5">
                <h2 class="text-xl font-bold">Fabio Angelici - Web Developer</h2>
                <div class="space-y-10">
                    <div class="text-xl">
                        <p>Via P.F. Calvi, 19</p>
                        <p>21100 Varese (Va)</p>
                        <p>P.I. 00000000000</p>
                    </div>
                    <div class="text-xl">
                        <h2 class="font-bold">Telefono:<a class="font-normal" href="tel:+393515749172"> +39 351 5749172</a></h2>
                        <h2 class="font-bold">Email:<a class="font-normal" href="mailto:info@fabioangelici.com"> info@fabioangelici.com</a></h2>
                        <h2 class="font-bold">Orari: <p class="font-normal inline-block"> Lun - Ven 09:00 - 12:30 / 14:00 - 18:30</p></h2>
                    </div>
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
                    <a href="https://twitter.com/messages/compose?recipient_id=1596495346452103170" target="_blank">
                        <i class="fa-brands fa-twitter text-6xl p-2 text-sky-500 hover:text-sky-600"></i>
                    </a>
                </div>
            </div>
            <div class="md:col-span-2 md:col-start-2 p-5">
                <h2 class="text-3xl text-sky-700">Compila il form sottostante e ti ricontatterò il prima possibile.</h2>
                <x-contact-form :page="'contact'"/>
            </div>
        </div>
        
    </section>
</x-layout>