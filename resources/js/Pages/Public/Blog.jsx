import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import Card from "@/Components/Public/Card";
import Header from "@/Components/Public/Header";
import PrimaryButton from "@/Components/Public/PrimaryButton";
import PublicLayout from "@/Layouts/PublicLayout";
import { Head } from "@inertiajs/react";
import DOMPurify from "dompurify";

export default function Blog({ articles }) {
  return (
    <>
      <Head>
        <title>Fabio Angelici | Blog di articoli sulla programmazione</title>
        <meta
          name="description"
          content="Sei interessato alla programmazione? Leggi i miei articoli per trovare consigli e informazioni"
        />
        <meta
          property="og:title"
          content="Fabio Angelici | Blog di articoli sulla programmazione"
        />
        <meta
          property="og:description"
          content="Sei interessato alla programmazione? Leggi i miei articoli per trovare consigli e informazioni"
        />
        <meta property="og:url" content="https://fabioangelici.com/blog" />
        <meta property="og:type" content="website" />
        <link rel="canonical" href="https://fabioangelici.com/blog" />
      </Head>
      <PublicLayout>
        <Header
          title="Blog"
          description="Benvenuto nel mio blog! Qui troverai articoli tecnici su sviluppo web, programmazione e best practices. Condivido guide, approfondimenti e soluzioni pratiche su Laravel, React, Inertia.js e molto altro. Se sei un developer in cerca di consigli o vuoi rimanere aggiornato sulle ultime tecnologie, sei nel posto giusto!"
          className="bg-[url(/images/blog.webp)]"
        />
        <section>
          <div className="my-10 md:w-9/12 md:mx-auto pl-5 md:pl-0">
            <BreadcrumbComponent />
          </div>
          <div class="mx-auto lg:w-7/12 my-10">
            <div class="grid grid-cols-1 px-5 lg:grid-cols-3 lg:px-0 gap-10">
              {articles &&
                articles.map((article) => (
                  <Card key={article.id} title={article.title}>
                    <img
                      class="mb-5 rounded-lg lg:h-44 shadow-lg"
                      src={article.image_url}
                      alt={article.title}
                    />
                    <p
                      class="prose"
                      dangerouslySetInnerHTML={{
                        __html: DOMPurify.sanitize(
                          `${article.body.substring(0, 100)} ...`
                        ),
                      }}
                    ></p>
                    <PrimaryButton
                      href={route("public.article.show", article.slug)}
                      className="text-center mt-5"
                    >
                      Leggi l'articolo
                    </PrimaryButton>
                  </Card>
                ))}
            </div>
          </div>
        </section>
      </PublicLayout>
    </>
  );
}
