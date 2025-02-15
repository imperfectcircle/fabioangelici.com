import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Chiara() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0 mt-10">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div class="">
          <img
            src="/images/portfolio/chiara.webp"
            alt="Sito chiaratessaro.com"
          />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2024" />
          <PortfolioDetail title="Settore:" text="Graphic Designer" />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, realizzazione pannello di amministrazione, indicizzazione sui motori di ricerca"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="Laravel, InertiaJS, React, TailwindCSS, MySQL"
          />
          <PortfolioDetail
            title="Link:"
            link="https://chiaratessaro.com"
            text="https://chiaratessaro.com"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Chiara Tessaro è una talentuosa graphic designer della provincia di
            Treviso, specializzata nella creazione di progetti visivi originali
            e personalizzati.
          </p>
          <p>
            La cliente aveva l'esigenza di rinnovare il proprio sito web,
            precedentemente realizzato in WordPress e ormai non più aggiornato
            né funzionale alle sue necessità. Durante un'intervista
            approfondita, è emersa la volontà di poter gestire i contenuti in
            autonomia senza le limitazioni imposte da WordPress.
          </p>
          <p>
            Dopo un'attenta analisi, abbiamo deciso di sviluppare un sito
            vetrina moderno ed essenziale, pensato per valorizzare al meglio i
            suoi lavori. Il portfolio è stato organizzato in modo chiaro,
            permettendo agli utenti di navigare facilmente tra i progetti.
            Inoltre, è stato realizzato un pannello di amministrazione
            intuitivo, che consente a Chiara di aggiornare il proprio portfolio
            in totale autonomia, caricando nuovi lavori e modificando i
            contenuti con semplicità.
          </p>
          <p>
            Per migliorare ulteriormente le prestazioni e ridurre i costi, il
            sito è stato migrato su un nuovo servizio di hosting più
            performante, garantendo un caricamento rapido e un'esperienza di
            navigazione fluida su qualsiasi dispositivo.
          </p>
          <p>
            Grazie a questo restyling, Chiara Tessaro dispone ora di una vetrina
            digitale all'altezza del suo talento, con un design moderno e una
            gestione semplice ed efficace.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/chiara-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
