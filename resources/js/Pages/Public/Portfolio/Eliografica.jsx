import { BreadcrumbComponent } from "@/Components/Public/Breadcrumb";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Eliografica() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0 mt-10">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img
            src="/images/portfolio/eliografica.webp"
            alt="Sito eliograficavaresina.org"
          />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2021" />
          <PortfolioDetail title="Settore:" text="Eliografica, Copisteria" />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, Indicizzazione e SEO base"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="HTML5, CSS3, JavaScript, Laravel"
          />
          <PortfolioDetail
            title="Link:"
            link="https://eliograficavaresina.org"
            text="https://eliograficavaresina.org"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Eliografica Varesina è una storica copisteria di Varese,
            specializzata nella stampa digitale di alta qualità, offrendo
            servizi per privati e aziende.
          </p>
          <p>
            Il cliente aveva la necessità di rinnovare il proprio sito web,
            ormai datato e realizzato nei primi anni 2000. Per comprendere al
            meglio le esigenze e gli obiettivi, abbiamo svolto un'intervista
            approfondita e un questionario dettagliato, così da definire una
            strategia efficace.
          </p>
          <p>
            Dopo un'attenta analisi, è stata scelta la realizzazione di un sito
            one-page, una soluzione moderna ed essenziale che permette di
            presentare in modo chiaro e diretto i principali servizi offerti. Il
            sito include anche un form di contatto intuitivo, pensato per
            facilitare la comunicazione con i clienti e rendere più immediata la
            richiesta di informazioni o preventivi.
          </p>
          <p>
            Per garantire massime prestazioni, il sito è stato ottimizzato per i
            motori di ricerca (SEO) e ospitato su un server ad alte prestazioni,
            assicurando tempi di caricamento rapidi e un’esperienza di
            navigazione fluida su tutti i dispositivi.
          </p>
          <p>
            Grazie a questo restyling, Eliografica Varesina dispone ora di una
            vetrina digitale moderna ed efficace, perfettamente in linea con le
            esigenze del mercato attuale.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/eliografica-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
