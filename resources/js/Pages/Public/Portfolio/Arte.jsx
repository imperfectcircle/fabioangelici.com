import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function Arte() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img
            src="/images/portfolio/oro.webp"
            alt="Sito oroeargentovarese.it"
          />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2023" />
          <PortfolioDetail title="Settore:" text="Compro oro e gioielleria" />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, indicizzazione sui motori di ricerca"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="HTML5, TailwindCSS, JavaScript, Laravel"
          />
          <PortfolioDetail
            title="Link:"
            link="https://oroeargentovarese.it"
            text="https://oroeargentovarese.it"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Arte e Preziosi è una gioielleria e compro oro di Varese, da sempre
            sinonimo di qualità e affidabilità nel settore orafo.
          </p>
          <p>
            Il cliente disponeva già di un sito web, ma il layout standard e le
            prestazioni limitate non rispecchiavano al meglio l’identità del
            brand. Dopo un'analisi approfondita delle esigenze, abbiamo deciso
            di migliorare le performance del sito spostando sia il dominio che
            l'hosting, garantendo così maggiore velocità e stabilità.
          </p>
          <p>
            Il sito è stato completamente ridisegnato, mantenendo le sezioni
            esistenti e integrando nuovi contenuti per offrire agli utenti
            un'esperienza più completa e coinvolgente.
          </p>
          <p>
            Per massimizzare la visibilità online, è stata effettuata una
            corretta indicizzazione sui motori di ricerca, accompagnata da
            un'ottimizzazione SEO di base, rendendo il sito più facile da
            trovare per i potenziali clienti.
          </p>
          <p>
            Grazie a questo restyling, Arte e Preziosi dispone ora di un sito
            moderno, veloce e personalizzato, capace di valorizzare la propria
            attività e attirare nuovi clienti.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/oro-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
