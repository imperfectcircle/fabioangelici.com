import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Remida() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img src="/images/portfolio/remida.webp" alt="Sito remidavarese.it" />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2024" />
          <PortfolioDetail
            title="Settore:"
            text="Associazione di Promozione Sociale"
          />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, indicizzazione sui motori di ricerca"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="Laravel, InertiaJS, React, TailwindCSS, MySQL"
          />
          <PortfolioDetail
            title="Link:"
            link="https://remidavarese.it"
            text="https://remidavarese.it"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Remida Varese è un centro di ricerca creativa con finalità
            educative, ambientali e artistiche, nato per promuovere il riuso e
            la sostenibilità attraverso l’arte e la didattica. Il progetto si
            ispira alla filosofia dell'economia circolare, trasformando
            materiali di scarto in risorse per laboratori e attività creative.
          </p>
          <p>
            Il cliente aveva l'esigenza di realizzare un sito web moderno e
            funzionale per aumentare la propria visibilità online e promuovere
            le iniziative proposte. Dopo un primo incontro per definire
            obiettivi e aspettative, ho sviluppato diverse proposte grafiche e
            strutturali, permettendo al cliente di scegliere la soluzione più
            adatta alle proprie necessità.
          </p>
          <p>
            Il sito è stato progettato con un design intuitivo e accattivante,
            garantendo una navigazione semplice e immediata per gli utenti.
            Inoltre, è stata eseguita un'attività di indicizzazione sui motori
            di ricerca e un'ottimizzazione SEO di base per migliorare la
            visibilità online e facilitare il raggiungimento di un pubblico più
            ampio.
          </p>
          <p>
            Grazie a questo nuovo sito, Remida Varese può ora comunicare in modo
            più efficace la propria missione, coinvolgere nuovi utenti e
            diffondere con maggiore impatto i valori della creatività
            sostenibile.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/remida-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
