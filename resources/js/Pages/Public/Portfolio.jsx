import { BreadcrumbComponent } from "@/Components/Public/Breadcrumb";
import Header from "@/Components/Public/Header";
import PortfolioCard from "@/Components/Public/PortfolioCard";
import { PORTFOLIO_CAROUSEL_ITEMS } from "@/Constants";
import PublicLayout from "@/Layouts/PublicLayout";
import { Head } from "@inertiajs/react";

export default function Portfolio() {
  return (
    <>
      <Head>
        <title>Portfolio | Fabio Angelici Web Developer</title>
        <meta
          name="description"
          content="Portfolio clienti Fabio Angelici - Sviluppatore web freelance. Siti web e gestionali online"
        />
        <meta
          property="og:title"
          content="Portfolio | Fabio Angelici Web Developer"
        />
        <meta
          property="og:description"
          content="Portfolio clienti Fabio Angelici - Sviluppatore web freelance. Siti web e gestionali online"
        />
        <meta property="og:url" content="https://fabioangelici.com/portfolio" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com/portfolio" />
      </Head>
      <PublicLayout>
        <Header
          title="Portfolio"
          description="In questa pagina puoi trovare degli esempi dei lavori che ho
              eseguito come freelance. Si tratta di lavori eterogenei al cui
              interno si trovano siti a singola pagina, siti multilingua,
              e-commerce e siti dinamici."
          className="bg-[url(/images/portfolio.webp)]"
        />
        <div className="my-10 md:w-9/12 md:mx-auto pl-5 md:pl-0">
          <BreadcrumbComponent />
        </div>

        <section className="grid grid-cols-1 md:grid-cols-3 gap-10 p-5 md:w-8/12 mx-auto mt-10">
          <PortfolioCard data={PORTFOLIO_CAROUSEL_ITEMS} />
        </section>
      </PublicLayout>
    </>
  );
}
