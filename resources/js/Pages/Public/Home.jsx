import { useState } from "react";
import Card from "@/Components/Public/Card";
import { Carousel } from "@/Components/Public/Carousel";
import { FlipWords } from "@/Components/Public/FlipWords";
import Modal from "@/Components/Public/Modal";
import PrimaryButton from "@/Components/Public/PrimaryButton";
import { PORTFOLIO_CAROUSEL_ITEMS, WORDS } from "@/Constants";
import PublicLayout from "@/Layouts/PublicLayout";
import { Head, Link } from "@inertiajs/react";
import { motion } from "motion/react";
import { FaCode, FaCartArrowDown, FaServer } from "react-icons/fa";
import { FaListCheck } from "react-icons/fa6";
import HoverCardComponent from "@/Components/Public/HoverCardComponent";
import usePreloadImages from "@/Hooks/usePreloadImages";

export default function Home({ articles }) {
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [modalTitle, setModalTitle] = useState("");

  const openModal = (title) => {
    setModalTitle(title);
    setIsModalOpen(true);
  };

  usePreloadImages([
    "/images/fabio_angelici.webp",
    "/images/Laravel.svg",
    "/images/Inertia.png",
    "/images/React.svg",
    "/images/Tailwind.svg",
    "/images/MySQL.svg",
  ]);

  return (
    <>
      <Head>
        <title>Creazione siti web | Fabio Angelici Web Developer</title>
        <meta
          name="description"
          content="Vuoi creare il tuo sito internet in modo professionale? Ho esperienza pluriennale e metto la mia professionalità al tuo servizio."
        />
        <meta
          property="og:title"
          content="Creazione siti web | Fabio Angelici Web Developer"
        />
        <meta
          property="og:description"
          content="Vuoi creare il tuo sito internet in modo professionale? Ho esperienza pluriennale e metto la mia professionalità al tuo servizio."
        />
        <meta property="og:url" content="https://fabioangelici.com" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com" />
        <link
          rel="preload"
          as="image"
          href="/images/fabio_angelici.webp"
          type="image/webp"
        />
      </Head>
      <PublicLayout>
        <section className="relative grid grid-cols-1 lg:grid-cols-4 min-h-screen overflow-hidden gap-5">
          <div className="relative p-5 md:p-0 lg:col-span-3 border-r-2 border-r-dark lg:ml-28 flex flex-col justify-center space-y-5">
            <motion.div
              className="hidden lg:block absolute left-full top-0 w-1 h-full bg-gradient-to-b from-transparent via-light to-transparent"
              initial={{ y: "-100%" }}
              animate={{ y: "100%" }}
              transition={{
                duration: 2,
                repeat: Infinity,
                repeatType: "reverse",
                ease: "easeInOut",
              }}
            />

            <div className="flex lg:block flex-col items-center space-y-5">
              <p className="text-responsive-lg">Ciao, mi chiamo</p>
              <h2 className="text-responsive-8xl text-light">
                Fabio Angelici.
              </h2>
              <h2 className="text-responsive-7xl p-5 lg:p-0">
                <FlipWords words={WORDS} />
              </h2>
              <h1 className="lg:w-6/12 md:w-8/12 text-responsive-xl">
                Sviluppo soluzioni web su misura per aziende e professionisti.
                <br /> Creo siti web, e-commerce e gestionali che non sono solo
                esteticamente accattivanti, ma anche funzionali e intuitivi. Il
                mio obiettivo è aiutarti a far crescere il tuo business online
                con strumenti digitali efficaci e su misura per le tue esigenze.
              </h1>
            </div>
            <div className="pt-10">
              <ul className="flex items-center justify-start flex-grow flex-wrap gap-5">
                <li>
                  <HoverCardComponent
                    customTrigger={
                      <img
                        className="h-[100px] w-[100px] bg-white/20 p-2"
                        src="/images/Laravel.svg"
                        alt="Logo Laravel"
                        title="Laravel"
                      />
                    }
                    content="Laravel è un framework PHP che permette di creare siti web ed e-commerce in modo veloce, sicuro e scalabile. Grazie alla sua struttura avanzata, semplifica lo sviluppo, migliorando prestazioni e sicurezza. Perfetto per chi vuole un sito personalizzato, affidabile e facile da gestire."
                  />
                </li>
                <li>
                  <HoverCardComponent
                    customTrigger={
                      <img
                        className="h-[100px] w-[100px] bg-white/20 p-2"
                        src="/images/Inertia.png"
                        alt="Logo Inertia"
                        title="Inertia.JS"
                      />
                    }
                    content="InertiaJS collega frontend e backend senza bisogno di API complesse, rendendo le Single Page Application più facili da sviluppare con Laravel e React."
                  />
                </li>
                <li>
                  <HoverCardComponent
                    customTrigger={
                      <img
                        className="h-[100px] w-[100px] bg-white/20 p-2"
                        src="/images/React.svg"
                        alt="Logo React"
                        title="React"
                      />
                    }
                    content="React è una libreria JavaScript per creare interfacce utente dinamiche e veloci, ideale per siti moderni e performanti."
                  />
                </li>
                <li>
                  <HoverCardComponent
                    customTrigger={
                      <img
                        className="h-[100px] w-[100px] bg-white/40 p-2"
                        src="/images/Tailwind.svg"
                        alt="Logo TailwindCSS"
                        title="TailwindCSS"
                      />
                    }
                    content="TailwindCSS è un framework CSS che permette di creare design personalizzati in modo rapido e flessibile, senza scrivere codice CSS manualmente."
                  />
                </li>
                <li>
                  <HoverCardComponent
                    customTrigger={
                      <img
                        className="h-[100px] w-[100px] bg-white/40 p-2"
                        src="/images/MySQL.svg"
                        alt="Logo MySQL"
                        title="MySQL"
                      />
                    }
                    content="MySQL è un database veloce e affidabile, perfetto per gestire in sicurezza i dati di siti web ed e-commerce."
                  />
                </li>
              </ul>
            </div>
          </div>
          <div className="hidden lg:block lg:col-span-1"></div>
          <motion.div
            animate={{
              backgroundColor: ["#1d1d1d", "#01435A", "#189BA3"],
            }}
            transition={{
              duration: 6,
              repeat: Infinity,
              repeatType: "reverse",
              ease: "easeInOut",
            }}
            className="home hidden md:block mx-auto mt-5 lg:mt-0 bg-[url(/images/fabio_angelici.webp)] bg-cover bg-center md:w-48 md:h-48 lg:w-72 lg:h-72 xl:w-96 xl:h-96 border-2 border-dark shadow-lg shadow-light lg:absolute lg:top-1/2 lg:left-3/4 lg:-translate-y-1/2 lg:-translate-x-1/2"
          ></motion.div>
        </section>
        <section className="py-10 px-5 md:w-9/12 md:mx-auto space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">Servizi che Offro</h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <Card
              title="Sito Web"
              description="Il servizio consiste nella realizzazione di siti web veloci, affidabili e altamente performanti. Responsive e ottimizzati per garantire una user experience ottimale."
              icon={FaCode}
            />
            <Card
              title="E-commerce"
              description="Portali e-commerce personalizzabili e gestibili dal cliente in ogni loro aspetto, dall'inserimento di nuovi prodotti e/o servizi, alla creazione di offerte e tanto altro."
              icon={FaCartArrowDown}
            />
            <Card
              title="Gestionali Web"
              description="Creazione di applicazioni web per la gestione di attività aziendali, dalla gestione dei clienti, ai pagamenti, alla gestione dei prodotti e molto altro."
              icon={FaListCheck}
            />
            <Card
              title="Hosting"
              description="Registrazione del dominio, creazione delle caselle email associate e spazio web per ospitare il tuo sito. Anche questi servizi fanno parte di quello che posso offrirti."
              icon={FaServer}
            />
          </div>
          <div className="pt-10 flex justify-center">
            <PrimaryButton href={route("public.services")}>
              Scopri di Più
            </PrimaryButton>
          </div>
        </section>

        <section className="py-10 px-5 md:w-9/12 md:mx-auto space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">Offerte</h2>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-10">
            <Card title="E-Commerce standard">
              <p className="text-responsive-xl">
                L'offerta prevede la realizzazione di un e-commerce a prezzo
                scontato con le seguenti caratteristiche:
              </p>
              <ul className="list-disc list-inside text-responsive-xl">
                <li>Storefront con template standard realizzato a codice</li>
                <li>
                  Pannello di amministrazione per la:
                  <ul className="list-disc list-inside pl-3">
                    <li>Gestione dei prodotti</li>
                    <li>Creazione di Categorie</li>
                    <li>Gestione degli ordini</li>
                    <li>Gestione dei clienti</li>
                    <li>Creazione Codici di Sconto</li>
                    <li>Gestione paesi</li>
                    <li>Gestione delle spese di spedizione in base ai paesi</li>
                    <li>Modifica meta tag per la SEO</li>
                  </ul>
                </li>
                <li>Pagamenti con Stripe</li>
                <li>Privacy & Cookie Policy per un anno</li>
              </ul>
              <p className="text-responsive-3xl px-6 py-3 bg-light w-full text-center">
                € 3500*
              </p>

              <PrimaryButton onClick={() => openModal("Offerta E-Commerce")}>
                Contattami
              </PrimaryButton>

              <p className="text-responsive-lg">
                *Sono esclusi il costo del dominio, dell'hosting e dei Termini e
                Condizioni.
              </p>
            </Card>
            <Card title="Sito Web Dinamico Standard">
              <p className="text-responsive-xl">
                L'offerta prevede la realizzazione di un Sito Web Dinamico a 3
                pagine a prezzo scontato con le seguenti caratteristiche:
              </p>
              <ul className="list-disc list-inside text-responsive-xl md:w-11/12">
                <li>Sviluppo di un sito web statico composto da 3 pagine.</li>
                <li>
                  Grafica standard con un design moderno e responsive,
                  adattabile a tutti i dispositivi.
                </li>
                <li>Sito Completamente modificabile dal cliente</li>
                <li>Form di contatto integrato</li>
                <li>Integrazione di Google Maps</li>
                <li>Codice ottimizzato per la velocità di caricamento</li>
                <li>
                  Pannello di amministrazione per la:
                  <ul className="list-disc list-inside pl-3">
                    <li>Modifica dei Titoli</li>
                    <li>Modifica delle immagini di background</li>
                    <li>Modifica dei testi</li>
                    <li>Modifica meta tag SEO</li>
                    <li>Sostituzione Logo</li>
                  </ul>
                </li>
                <li>Privacy & Cookie Policy per un anno</li>
              </ul>
              <p className="text-responsive-3xl px-6 py-3 bg-light w-full text-center">
                € 1750*
              </p>
              <PrimaryButton
                onClick={() => openModal("Offerta Sito Web Dinamico Standard")}
              >
                Contattami
              </PrimaryButton>
              <p className="text-responsive-lg">
                *Sono esclusi il costo del dominio, dell'hosting e l'assistenza
                post vendita.
              </p>
            </Card>
            <Card title="Sito Web Statico Standard +" top={false}>
              <p className="text-responsive-xl">
                L'offerta prevede la realizzazione di un Sito Web Statico a 5
                pagine a prezzo scontato con le seguenti caratteristiche:
              </p>
              <ul className="list-disc list-inside text-responsive-xl w-11/12">
                <li>Sviluppo di un sito web statico composto da 5 pagine.</li>
                <li>
                  Grafica standard con un design moderno e responsive,
                  adattabile a tutti i dispositivi.
                </li>
                <li>Form di contatto integrato</li>
                <li>SEO Base</li>
                <li>Integrazione di Google Maps</li>
                <li>Codice ottimizzato per la velocità di caricamento</li>
                <li>Privacy & Cookie Policy per un anno</li>
              </ul>
              <p className="text-responsive-3xl px-6 py-3 bg-light w-full text-center">
                € 1500*
              </p>
              <PrimaryButton
                onClick={() => openModal("Offerta Sito Web Statico Standard +")}
              >
                Contattami
              </PrimaryButton>
              <p className="text-responsive-lg">
                *Sono esclusi il costo del dominio, dell'hosting e l'assistenza
                post vendita.
              </p>
            </Card>
            <Card title="Sito Web Statico Standard" top={false}>
              <p className="text-responsive-xl">
                L'offerta prevede la realizzazione di un Sito Web Statico a 3
                pagine a prezzo scontato con le seguenti caratteristiche:
              </p>
              <ul className="list-disc list-inside text-responsive-xl w-11/12">
                <li>Sviluppo di un sito web statico composto da 3 pagine.</li>
                <li>
                  Grafica standard con un design moderno e responsive,
                  adattabile a tutti i dispositivi.
                </li>
                <li>Form di contatto integrato</li>
                <li>SEO Base</li>
                <li>Integrazione di Google Maps</li>
                <li>Codice ottimizzato per la velocità di caricamento</li>
                <li>Privacy & Cookie Policy per un anno</li>
              </ul>
              <p className="text-responsive-3xl px-6 py-3 bg-light w-full text-center">
                € 1250*
              </p>
              <PrimaryButton
                onClick={() => openModal("Offerta Sito Web Statico Standard")}
              >
                Contattami
              </PrimaryButton>
              <p className="text-responsive-lg">
                *Sono esclusi il costo del dominio, dell'hosting e l'assistenza
                post vendita..
              </p>
            </Card>
          </div>
        </section>

        <section className="py-20 px-5 md:w-9/12 md:mx-auto space-y-10 mt-10 overflow-hidden">
          <h2 className="text-responsive-7xl text-center">I Miei Lavori</h2>
          <Carousel slides={PORTFOLIO_CAROUSEL_ITEMS} />
        </section>

        <section className="py-10 px-5 md:w-9/12 md:mx-auto space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">
            Ultimi articoli sul Blog
          </h2>
          <div className="mx-auto w-8/12">
            <div className="grid grid-cols-1 px-5 lg:grid-cols-3 lg:px-0 gap-10">
              {articles &&
                articles.map((article) => (
                  <Link
                    key={article.id}
                    href={route("public.article.show", article.slug)}
                  >
                    <div className="flex flex-col mb-10">
                      <img
                        className="mb-5 rounded-lg h-44 object-cover"
                        src={article.image_url}
                        alt={article.title}
                      />
                      <p className="text-center font-bold text-2xl">
                        {article.title}
                      </p>
                    </div>
                  </Link>
                ))}
            </div>
          </div>
        </section>

        <Modal
          isOpen={isModalOpen}
          onClose={() => setIsModalOpen(false)}
          title={modalTitle}
        />
      </PublicLayout>
    </>
  );
}
