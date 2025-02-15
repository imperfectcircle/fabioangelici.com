import ContactForm from "@/Components/Public/ContactForm";
import Header from "@/Components/Public/Header";
import PublicLayout from "@/Layouts/PublicLayout";
import { Head } from "@inertiajs/react";
import { FaWhatsapp, FaSkype } from "react-icons/fa6";

export default function Contact() {
  return (
    <>
      <Head>
        <title>Fabio Angelici | Contatti</title>
        <meta
          name="description"
          content="Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito."
        />
        <meta property="og:title" content="Fabio Angelici | Contatti" />
        <meta
          property="og:description"
          content="Se hai bisogno di portare il tuo progetto sul web, contattami per un preventivo gratuito."
        />
        <meta property="og:url" content="https://fabioangelici.com/contact" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com/contact" />
      </Head>
      <PublicLayout>
        <Header
          title="Contatti"
          description="Hai un progetto in mente o vuoi semplicemente fare una domanda? Compila il form o utilizza i recapiti disponibili per metterti in contatto con me. Sarò felice di rispondere nel più breve tempo possibile e trovare insieme la soluzione più adatta alle tue esigenze."
          className="bg-[url(/images/contact.webp)]"
        />
        <section className="my-10">
          <div class="lg:grid lg:grid-cols-4 lg:items-center lg:justify-items-center space-y-10 lg:space-y-0 p-5">
            <div class="col-start-2">
              <h2 class="text-xl font-bold font-code">
                Fabio Angelici - Web Developer
              </h2>
              <div class="text-xl font-code">
                <p>Via R.Pilo, 14A</p>
                <p>21100 Varese (Va)</p>
                <p>P.I. 03929520124</p>
              </div>
            </div>
            <div class="col-start-3 text-xl font-code">
              <h2 class="font-bold">
                Telefono:
                <a class="font-normal" href="tel:+393514698047">
                  {" "}
                  +39 351 4698047
                </a>
              </h2>
              <h2 class="font-bold">
                Email:
                <a class="font-normal" href="mailto:info@fabioangelici.com">
                  {" "}
                  info@fabioangelici.com
                </a>
              </h2>
              <h2 class="font-bold">
                Orari:{" "}
                <p class="font-normal inline-block">
                  {" "}
                  Lun - Ven 09:<sup>00</sup> - 19:<sup>00</sup>
                </p>
              </h2>
            </div>
          </div>
          <div class="lg:col-span-2 lg:col-start-2 text-center p-5">
            <div class="flex justify-center gap-5">
              <a href="https://wa.me/+393514698047" target="_blank">
                <FaWhatsapp className="text-6xl p-2 text-[#25d366] hover:text-[#25d366]/70" />
              </a>
              <a href="skype:live:.cid.8ae67683138ca1aa?chat">
                <FaSkype className="text-6xl p-2 text-[#00AFF0] hover:text-[#00AFF0]/70" />
              </a>
            </div>

            <div id="contatti" class="p-5 mt-10">
              <ContactForm
                title="Compila il form sottostante e ti ricontatterò il prima possibile."
                route={route("public.contact.generic")}
                select={false}
                className="bg-black/30"
              />
            </div>
          </div>
        </section>
      </PublicLayout>
    </>
  );
}
