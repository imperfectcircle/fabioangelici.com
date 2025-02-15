import { BreadcrumbComponent } from "@/Components/Public/Breadcrumb";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Cilaver() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img src="/images/portfolio/cilaver.webp" alt="Sito cilaver.it" />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2022" />
          <PortfolioDetail
            title="Settore:"
            text="Prodotti coibenti e fonoassorbenti"
          />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web multilingua, Realizzazione pannello di amministrazione, Indicizzazione e SEO di base"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="Laravel, HTML5, TailwindCSS, JavaScript, MySQL"
          />
          <PortfolioDetail
            title="Link:"
            link="https://cilaver.it"
            text="https://cilaver.it"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Cilaver S.r.l. è un'azienda specializzata nella produzione e vendita
            di materiali coibenti e fonoassorbenti di alta qualità, destinati a
            diversi settori industriali.
          </p>
          <p>
            Per espandere la propria presenza sul mercato estero, il cliente
            aveva la necessità di sviluppare un nuovo sito web multilingua che
            presentasse i suoi prodotti in modo chiaro e professionale. Inoltre,
            era fondamentale integrare un sistema per la gestione e il download
            della documentazione tecnica, offrendo agli utenti un accesso rapido
            a schede tecniche e certificazioni.
          </p>
          <p>
            Il sito e il relativo pannello di amministrazione sono stati
            sviluppati utilizzando Laravel, garantendo un'interfaccia intuitiva
            per la gestione dei documenti e l'aggiornamento delle immagini nella
            gallery. Grazie a un'attenta ottimizzazione SEO, il sito è stato
            indicizzato correttamente sui motori di ricerca, aumentando la sua
            visibilità online.
          </p>
          <p>
            Tutte le immagini sono state ottimizzate per il web, riducendo i
            tempi di caricamento senza compromettere la qualità. Inoltre,
            l'hosting scelto assicura un'esperienza di navigazione veloce e
            fluida sia nella versione italiana che in quella inglese.
          </p>
          <p>
            Con questo nuovo sito, Cilaver S.r.l. può ora presentare i suoi
            prodotti in modo efficace a livello internazionale, offrendo ai
            clienti un'esperienza digitale moderna e funzionale.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/cilaver-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
