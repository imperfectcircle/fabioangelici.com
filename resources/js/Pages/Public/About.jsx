import PublicLayout from "@/Layouts/PublicLayout";
import Card from "@/Components/Public/Card";
import { FaCheck } from "react-icons/fa";
import Header from "@/Components/Public/Header";
import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import { Head } from "@inertiajs/react";

export default function About() {
  return (
    <>
      <Head>
        <title>
          Sviluppatore web PHP e Javascript | Fabio Angelici Web Developer
        </title>
        <meta
          name="description"
          content="Sono uno sviluppatore web freelance PHP e Javascript. Ti offro servizi per la creazione di siti web professionali e performanti"
        />
        <meta
          property="og:title"
          content="Sviluppatore web PHP e Javascript | Fabio Angelici Web Developer"
        />
        <meta
          property="og:description"
          content="Sono uno sviluppatore web freelance PHP e Javascript. Ti offro servizi per la creazione di siti web professionali e performanti"
        />
        <meta property="og:url" content="https://fabioangelici.com/about" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com/about" />
      </Head>
      <PublicLayout>
        <Header
          title="Chi Sono"
          description="Mi chiamo <strong>Fabio Angelici</strong> e sono uno
              <strong>Sviluppatore Web Freelance</strong> di Varese con una
              passione per l'informatica che risale ai primi anni '90. Grazie a
              internet, ho la possibilità di
              <strong>lavorare con clienti di tutta Italia</strong>, offrendo
              soluzioni personalizzate per la creazione di siti web e
              gestionali. Mi dedico alla creazione di soluzioni
              <strong>
                moderne e use-friendly per aiutare le aziende a crescere
              </strong>
              ."
          className="bg-[url(/images/laptop.webp)]"
        />
        <div className="my-10 md:w-9/12 md:mx-auto pl-5 md:pl-0">
          <BreadcrumbComponent />
        </div>
        <section className="py-10 px-5 space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">Il Mio Percorso</h2>
          <div className="md:w-7/12 md:mx-auto p-5 space-y-5 text-xl">
            <p>
              Con l'avvento di internet inizio ad avvicinarmi al mondo della
              programmazione web, prima da autodidatta poi frequentando un corso
              organizzato dalla regione Lombardia e dal fondo sociale europeo
              all'inizio degli anni 2000.
            </p>
            <p>
              Terminato il corso trovo impiego in una{" "}
              <strong>web agency</strong> in cui inizio a mettere a frutto ciò
              che ho imparato e che mi dà la possibilità, nel tempo, di scoprire
              nuovi linguaggi e tecnologie.
            </p>
            <p>
              All'inizio della mia carriera mi appassiono al lato front-end
              della programmazione poi, prima con PHP e i suoi framework e in
              seguito con la libreria Node.js, scopro le "meraviglie" del
              back-end e del poter{" "}
              <strong>realizzare in autonomia interi progetti.</strong>
            </p>
            <p>
              Col tempo mi sono tenuto{" "}
              <strong>sempre al passo con le novità</strong> o con la
              documentazione on-line o frequentando corsi (gli ultimi dei quali
              nel 2021 e 2023), in quanto ritengo che il continuo studio e
              approfondimento siano una parte fondamentale di questo lavoro.
            </p>
          </div>
        </section>

        <section className="py-10 px-5 space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">Come Sviluppo</h2>
          <div className="md:w-7/12 md:mx-auto p-5 space-y-5 text-xl">
            <p>
              L’approccio che adotto nello sviluppo web è basato sulla{" "}
              <strong>scrittura diretta del codice</strong>, una scelta che
              considero superiore e più performante rispetto all’utilizzo di CMS
              come WordPress, soprattutto per progetti che richiedono{" "}
              <strong>elevata personalizzazione, velocità e sicurezza</strong>.
            </p>

            <p>
              Optare per uno sviluppo <strong>interamente a codice</strong>{" "}
              consente di ottenere siti web più leggeri, ottimizzati e privi di
              tutte quelle limitazioni tipiche delle piattaforme
              preconfezionate. Inoltre, garantisce{" "}
              <strong>maggiore controllo sul codice sorgente</strong>, evitando
              la dipendenza da plugin di terze parti che spesso appesantiscono
              il sito e introducono vulnerabilità.
            </p>
            <p>
              Di seguito, alcuni dei principali vantaggi di questo approccio:
            </p>
            <div>
              <div className="flex space-x-5">
                <FaCheck className="text-green-500 text-2xl" />
                <p className="font-bold">Personalizzazione</p>
              </div>
              <p className="pl-10">
                Quando si crea un sito web dal codice, si ha un maggiore
                controllo sulla personalizzazione e sulla struttura del sito
                stesso. Ciò significa che è possibile creare un{" "}
                <strong>
                  sito unico che risponda alle esigenze specifiche del proprio
                  business
                </strong>
                .
              </p>
            </div>
            <div>
              <div className="flex space-x-5">
                <FaCheck className="text-green-500 text-2xl" />
                <p className="font-bold">Prestazioni</p>
              </div>
              <p className="pl-10">
                I siti web creati a partire dal codice sono solitamente{" "}
                <strong>più veloci e performanti</strong> rispetto ai siti
                creati con un CMS. Questo è dovuto al fatto che{" "}
                <strong>il codice è ottimizzato per le prestazioni</strong>, a
                differenza dei siti sviluppati ad esempio con WordPress, che
                spesso includono funzionalità inutili.
              </p>
            </div>

            <div>
              <div className="flex space-x-5">
                <FaCheck className="text-green-500 text-2xl" />
                <p className="font-bold">Sicurezza</p>
              </div>
              <p className="pl-10">
                I siti web creati partendo dal codice sono{" "}
                <strong>meno vulnerabili agli attacchi informatici</strong>{" "}
                rispetto a quelli creati con un CSM. Ciò è dovuto al fatto che i
                primi possono essere progettati e sviluppati con maggiore
                attenzione alla sicurezza,{" "}
                <strong>rendendoli meno suscettibili a minacce</strong> come
                malware e gli attacchi DDoS di cui spesso si sente parlare.
              </p>
            </div>
            <div>
              <div className="flex space-x-5">
                <FaCheck className="text-green-500 text-2xl" />
                <p className="font-bold">Scalabilità</p>
              </div>
              <p className="pl-10">
                I siti web creati lato codice sono solitamente più scalabili.
                Ciò significa che{" "}
                <strong>è più facile far crescere il sito</strong> e aggiungere
                nuove funzionalità in futuro.
              </p>
            </div>
          </div>
        </section>

        <section className="py-10 px-5 space-y-10 mt-10">
          <h2 className="text-responsive-7xl text-center">Tecnologie</h2>
          <div className="md:w-7/12 md:mx-auto p-5 space-y-5 text-xl">
            <p>
              Per lo sviluppo dei miei siti, faccio affidamento su PHP e
              JavaScript come linguaggi di programmazione principali. Ricorro a
              librerie e framework per creare codice efficiente, pulito e
              facilmente gestibile.; quelli che seguono sono alcuni dei
              linguaggi, librerie, framework e servizi che utilizzo:
            </p>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-10">
              <Card title="Frontend">
                <ul className="flex items-center justify-center flex-wrap gap-5">
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/HTML5.svg"
                      alt="Logo HTML5"
                      title="HTML 5"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/CSS3.svg"
                      alt="Logo CSS3"
                      title="CSS 3"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/js.svg"
                      alt="Logo JavaScript"
                      title="JavaScript"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/Tailwind.svg"
                      alt="Logo Tailwind CSS"
                      title="Tailwind CSS"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/React.svg"
                      alt="Logo React"
                      title="React"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/Motion.png"
                      alt="Logo Motion"
                      title="Motion"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/shadcn.png"
                      alt="Logo Shadcn"
                      title="Shadcn UI"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/aceternity.png"
                      alt="Logo Aceternity"
                      title="Aceternity UI"
                    />
                  </li>
                </ul>
              </Card>
              <Card title="Backend">
                <ul className="flex items-center justify-center flex-grow flex-wrap gap-5">
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/Laravel.svg"
                      alt="Logo Laravel"
                      title="Laravel"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/Node.svg"
                      alt="Logo Node"
                      title="Node.js"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/20 p-2"
                      src="/images/Inertia.png"
                      alt="Logo Inertia"
                      title="Inertia.JS"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/40 p-2"
                      src="/images/MYSQL.svg"
                      alt="Logo MySQL"
                      title="MySQL"
                    />
                  </li>
                  <li>
                    <img
                      className="h-[100px] w-[100px] bg-white/30 p-2"
                      src="/images/mongo.png"
                      alt="Logo Mongo DB"
                      title="Mongo DB"
                    />
                  </li>
                </ul>
              </Card>
            </div>
          </div>
        </section>
      </PublicLayout>
    </>
  );
}
