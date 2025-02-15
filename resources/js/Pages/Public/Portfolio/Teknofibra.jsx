import { BreadcrumbComponent } from "@/Components/Public/Breadcrumb";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Teknofibra() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img src="/images/portfolio/tekno.webp" alt="Sito teknofibra.it" />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2023" />
          <PortfolioDetail
            title="Settore:"
            text="Materiali coibenti ultraleggeri"
          />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, realizzazione pannello di amministrazione, indicizzazione sui motori di ricerca"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="HTML5, TailwindCSS, JavaScript, Laravel, MySQL"
          />
          <PortfolioDetail
            title="Link:"
            link="https://teknofibra.it"
            text="https://teknofibra.it"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Teknofibra è un'azienda della provincia di Varese specializzata
            nella progettazione e vendita di materiali coibenti ultraleggeri,
            utilizzati nel settore aeronautico e nel motorsport per auto e moto
            da gara.
          </p>
          <p>
            Il cliente aveva un sito web realizzato in WordPress, ma non era
            soddisfatto né delle prestazioni, né dell'usabilità e del design.
            Dopo un'analisi approfondita delle problematiche riscontrate e un
            confronto sugli obiettivi da raggiungere, abbiamo deciso di
            abbandonare la piattaforma WP e sviluppare un nuovo sito
            multilingua, progettato da zero per valorizzare i prodotti di punta
            e mostrare casi d'uso reali dei materiali.
          </p>
          <p>
            Il sito è stato completamente ridisegnato con un'interfaccia moderna
            e intuitiva, rispecchiando l'identità aziendale e migliorando
            l'esperienza utente. Inoltre, è stato sviluppato un pannello di
            amministrazione personalizzato che consente al cliente di:
          </p>
          <ul className="list-disc ml-10">
            <li>Gestire ed aggiornare le tabelle dei Materiali</li>
            <li>Caricare schede tecniche, immagini e video in autonomia</li>
            <li>Organizzare i contenuti in modo efficace e strutturato</li>
          </ul>
          <p>
            Per garantire prestazioni elevate, abbiamo anche ottimizzato
            l'hosting, riducendo significativamente i tempi di caricamento e
            migliorando l'accessibilità globale del sito.
          </p>
          <p>
            Grazie a questo nuovo progetto, Teknofibra dispone ora di un sito
            web più veloce, più intuitivo e più efficace, in grado di
            rappresentare al meglio il valore dei suoi prodotti sia a livello
            nazionale che internazionale.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/tekno-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
