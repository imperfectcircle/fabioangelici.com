import { BreadcrumbComponent } from "@/Components/Public/BreadcrumbComponent";
import CodeBlockWithCopy from "@/Components/Public/CodeBlockWithCopy";
import PublicLayout from "@/Layouts/PublicLayout";
import { Head } from "@inertiajs/react";
import DOMPurify from "dompurify";

export default function ArticleShow({ article }) {
  return (
    <>
      <Head>
        <title>{`Fabio Angelici | ${article.title}`}</title>
        <meta name="description" content={`${article.body.slice(0, 100)}`} />
        <meta
          property="og:title"
          content={`Fabio Angelici | ${article.title}`}
        />
        <meta
          property="og:description"
          content={`${article.body.slice(0, 100)}`}
        />
        <meta
          property="og:url"
          content={`https://fabioangelici.com/${article.slug}`}
        />
        <meta property="og:type" content="article" />
        <link
          rel="canonical"
          href={`https://fabioangelici.com/${article.slug}`}
        />
      </Head>
      <PublicLayout>
        <div className="my-10 md:w-9/12 md:mx-auto">
          <BreadcrumbComponent />
        </div>
        <div className="py-12">
          <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div className="overflow-hidden shadow-sm sm:rounded-lg">
              <div className="p-6 bg-black/30 border-b border-gray-200">
                <div>
                  <img
                    className="mx-auto rounded-lg shadow-xl mb-10"
                    src={article.image_url}
                    alt={article.title}
                  />

                  <h1 className="text-4xl md:text-6xl">{article.title}</h1>
                  <p className="mb-10">
                    Di {article.author} - {article.created_at}
                  </p>
                  <div
                    className=" max-w-6xl mx-auto prose md:prose-xl"
                    dangerouslySetInnerHTML={{
                      __html: DOMPurify.sanitize(article.body),
                    }}
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <CodeBlockWithCopy />
      </PublicLayout>
    </>
  );
}
