import { BreadcrumbComponent } from "@/Components/Public/Breadcrumb";
import PortfolioDetail from "@/Components/Public/Portfolio/PortfolioDetail";
import PublicLayout from "@/Layouts/PublicLayout";

export default function ShopTeknofibra() {
  return (
    <PublicLayout>
      <section className="lg:w-8/12 mx-auto p-5 lg:p-0">
        <div className="my-10">
          <BreadcrumbComponent />
        </div>
        <div className="">
          <img
            src="/images/portfolio/shop.webp"
            alt="Sito shop.teknofibra.it"
          />
        </div>
        <h2 className="text-4xl py-10 font-bold">Dettagli</h2>
        <div className="space-y-3">
          <PortfolioDetail title="Anno di realizzazione:" text="2024" />
          <PortfolioDetail
            title="Settore:"
            text="Vendita materiali coibenti ultraleggeri"
          />
          <PortfolioDetail
            title="Servizi:"
            text="Progettazione e realizzazione sito web, indicizzazione sui motori di ricerca, creazione profili social, creazione campagne ADS"
          />
          <PortfolioDetail
            title="Tecnologie Utilizzate:"
            text="Laravel, Vue, TailwindCSS, MySQL"
          />
          <PortfolioDetail
            title="Link:"
            link="https://shop.teknofibra.it"
            text="https://shop.teknofibra.it"
          />
        </div>
        <div className="text-xl py-10 space-y-7">
          <p>
            Teknofibra è un'azienda della provincia di Varese specializzata
            nella progettazione e vendita di materiali coibenti ultraleggeri per
            veicoli, auto e moto da competizione.
          </p>
          <p>
            Visto il buon riscontro ottenuto dal sito istituzionale, il cliente
            ha espresso la necessità di sviluppare un e-commerce dedicato alla
            vendita diretta dei prodotti. L'obiettivo principale era creare una
            piattaforma intuitiva, performante e facilmente gestibile per
            consentire agli utenti di acquistare materiali in modo rapido e
            sicuro.
          </p>
          <p>
            Il nuovo Teknofibra Shop è stato sviluppato con un'interfaccia
            moderna e user-friendly, ottimizzata sia per desktop che per
            dispositivi mobili. Il sistema di gestione degli ordini è stato
            pensato per semplificare il processo di acquisto, offrendo
            un'esperienza fluida e intuitiva.
          </p>
          <p>
            Per garantire prestazioni elevate, il sito è stato ospitato su un
            server performante, riducendo al minimo i tempi di caricamento.
            Inoltre, è stata implementata una prima ottimizzazione SEO per
            migliorare la visibilità del negozio online sui motori di ricerca.
          </p>
          <p>
            Oltre alla realizzazione dell'e-commerce, mi sono occupato anche
            della creazione dei profili social di Teknofibra Shop, . Per
            incrementare il traffico e le vendite, sono state avviate campagne
            pubblicitarie mirate (ADS) su Google, ottimizzate per raggiungere il
            target ideale del brand.
          </p>
          <p>
            Grazie a questo progetto, Teknofibra dispone ora di uno strumento
            efficace e scalabile per la vendita dei suoi prodotti, con una
            presenza digitale più forte e una strategia di marketing che ne
            valorizza la crescita.
          </p>
        </div>
        <div className="mb-10">
          <img
            src="/images/portfolio/shop-gtmetrix.png"
            alt="Perfromace gtmetrix del sito"
          />
        </div>
      </section>
    </PublicLayout>
  );
}
