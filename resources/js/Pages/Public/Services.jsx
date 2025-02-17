import PublicLayout from "@/Layouts/PublicLayout";
import Header from "@/Components/Public/Header";
import ContactForm from "@/Components/Public/ContactForm";
import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import { Head } from "@inertiajs/react";

export default function Services() {
  return (
    <>
      <Head>
        <title>
          Fabio Angelici | Servizi internet per aziende, professionisti e
          privati
        </title>
        <meta
          name="description"
          content="Servizi web per la tua attività: Siti internet, portali e-commerce, gestionali web e servizio di hosting"
        />
        <meta
          property="og:title"
          content="Fabio Angelici | Servizi internet per aziende, professionisti e privati"
        />
        <meta
          property="og:description"
          content="Servizi web per la tua attività: Siti internet, portali e-commerce, gestionali web e servizio di hosting"
        />
        <meta property="og:url" content="https://fabioangelici.com/services" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com/services"></link>
      </Head>
      <PublicLayout>
        <Header
          title="Servizi"
          description="Offro soluzioni digitali su misura per aziende e professionisti,
              dalla creazione di <strong>siti web ed e-commerce</strong> alla
              realizzazione di <strong>gestionali web-based</strong> intuitivi
              ed efficienti. Inoltre, fornisco
              <strong>servizi di hosting affidabili</strong> per garantire
              performance e sicurezza ottimali. Scopri nel dettaglio come posso
              aiutarti a sviluppare la tua presenza online."
          className="services"
        />
        <div className="my-10 md:w-9/12 md:mx-auto pl-5 md:pl-0">
          <BreadcrumbComponent />
        </div>
        <section className="grid grid-cols-1 md:grid-cols-2 gap-10 p-5 md:w-8/12 mx-auto mt-10">
          <div className="text-xl space-y-5 order-2 md:order-none">
            <h2 className="text-3xl text-center md:text-left">
              Progettazione e Sviluppo siti web
            </h2>
            <p>
              Come web developer freelance, sono specializzato nella creazione
              di{" "}
              <strong>
                siti web professionali e personalizzati per soddisfare le
                esigenze dei miei clienti
              </strong>
              . Sia che si tratti di un sito aziendale o istituzionale, di un
              blog o di un portfolio personale, sarò in grado di trasformare la
              tua idea in una realtà digitale di successo.
            </p>
            <p>
              Pongo molta attenzione a garantire una solida presenza online per
              i miei clienti, attraverso la realizzazione di{" "}
              <strong>
                siti ottimizzati per i motori di ricerca e la user experience
              </strong>
              . I servizi che offro includono la registrazione del dominio, lo
              spazio hosting, il certificato SSL e l'analisi e il monitoraggio
              del sito una volta messo in produzione.
            </p>
            <p>
              Tutti i siti che sviluppo sono progettati con una modalità mobile
              first, per garantire{" "}
              <strong>un'esperienza ottimale su tutti i dispositivi</strong> e
              una navigazione fluida su schermi di qualsiasi dimensione.
            </p>
          </div>
          <div className="order-1 md:order-none flex items-center">
            <img
              className="rounded-lg shadow-md shadow-white"
              src="/images/web.webp"
              alt="Immagine sviluppo siti web"
            />
          </div>

          <div className="flex items-center mt-10 order-3 md:order-none">
            <img
              className="rounded-lg shadow-md shadow-white"
              src="/images/ecommerce.webp"
              alt="Immagine sviluppo e-commerce"
            />
          </div>
          <div className="text-xl space-y-5 md:mt-10 order-4 md:order-none">
            <h2 className="text-3xl text-center md:text-left">
              Portali E-commerce
            </h2>
            <p>
              Il commercio elettronico è diventato un{" "}
              <strong>elemento fondamentale del mercato</strong> in questi
              ultimi anni, e se sei alla ricerca di un modo per ampliare la tua
              attività commerciale o di avviare la vendita dei tuoi prodotti
              online,{" "}
              <strong>posso offrirti il mio supporto come web developer</strong>
              .
            </p>
            <p>
              Ti propongo soluzioni complete di e-commerce che soddisfino le tue
              esigenze, con un <strong>pannello di controllo intuitivo</strong>{" "}
              e personalizzabile,{" "}
              <strong>opzioni di pagamento affidabili</strong> e diffuse e
              un'interfaccia utente accattivante e facile da navigare.
            </p>
          </div>

          <div className="text-xl space-y-5 order-6 md:order-none md:mt-10">
            <h2 className="text-3xl text-center md:text-left">
              Servizio di hosting
            </h2>
            <p>
              Se stai cercando un servizio di hosting{" "}
              <strong>affidabile e sicuro</strong> per il tuo sito web, ti offro
              la soluzione che fa per te. Scegliere un'opzione di hosting a
              basso costo potrebbe sembrare vantaggioso all'inizio, ma potrebbe
              causare problemi di velocità di caricamento delle pagine e
              mancanza di un certificato SSL a lungo termine.
            </p>
            <p>
              Il servizio di hosting che ti propongo garantisce{" "}
              <strong>prestazioni elevate e sicurezza dei dati</strong>, con la
              possibilità di effettuare regolari backup dei tuoi contenuti.
            </p>
            <p>
              Inclusi nel servizio: registrazione o trasferimento del dominio,
              configurazione delle caselle email, backup regolari e certificato
              SSL affidabile.
            </p>
          </div>
          <div className="order-5 md:order-none flex items-center mt-10">
            <img
              className="rounded-lg shadow-md shadow-white"
              src="/images/server.webp"
              alt="Immagine servizio hosting"
            />
          </div>

          <div className="flex items-center mt-10 order-7 md:order-none">
            <img
              className="rounded-lg shadow-md shadow-white"
              src="/images/management.webp"
              alt="Immagine sviluppo gestionale"
            />
          </div>
          <div className="text-xl space-y-5 md:mt-10 order-8 md:order-none">
            <h2 className="text-3xl text-center md:text-left">
              Gestionali web-based
            </h2>
            <p>
              Un gestionale non è altro che un software che permette di gestire
              e automatizzare determinati processi all'interno di un'azienda
            </p>
            <p>
              A differenza dei normali programmi gestionali, un gestionale web
              based offre diversi vantaggi come il fatto di poter essere
              utilizzato da qualsiasi dispositivo che disponga di una
              connessione a internet e di un browser, di essere facilmente
              aggiornabile o di poter essere personalizzato in base alle reali
              necessità del cliente.
            </p>
            <p>
              Sia che tu abbia bisogno di gestire il tuo magazzino, o che ti
              serva un programma per la contabilità un gestionale web può essere
              la soluzione che fa per te.
            </p>
          </div>
        </section>
        <section className="md:w-8/12 mx-auto mt-10 text-xl p-5">
          <p>
            Se vuoi testare alcune caratteristiche di un gestionale web, ho
            realizzato una web app dimostrativa con delle funzioni base. Per
            provarla ti basterà cliccare sul pulsante qui sotto e inserire i
            dati di accesso.
          </p>
          <p className="mt-10 text-center">
            Username: demo <br />
            Password: demo
          </p>
          <div className="my-10 text-center">
            <a
              className="px-6 py-3 rounded-3xl border-white border-2 uppercase hover:bg-gradient-to-r hover:from-light hover:to-dark transition-colors"
              href="https://gestionale.fabioangelici.com"
              target="_blank"
            >
              Prova la Demo
            </a>
          </div>
        </section>
        <ContactForm
          route={route("public.contact.services")}
          title="Richiedi un Servizio"
        />
      </PublicLayout>
    </>
  );
}
