import Pagination from "@/Components/Admin/Pagination";
import THead from "@/Components/Admin/THead";
import { ARTICLE_STATUS_CLASS_MAP, ARTICLE_STATUS_TEXT_MAP } from "@/Constants";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, router, usePage } from "@inertiajs/react";

export default function Index({ auth, articles }) {
  const { flash } = usePage().props;
  const deleteArticle = (article) => {
    if (!confirm("Sei sicuro di voler eliminare questo articolo?")) {
      return;
    }
    router.delete(route("articles.destroy", article.id));
  };

  return (
    <AuthenticatedLayout
      user={auth.user}
      header={
        <div className="flex items-center justify-between">
          <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Articoli
          </h2>
          <Link
            href={route("articles.create")}
            className="rounded bg-green-500 px-3 py-2 text-white shadow transition-all hover:bg-green-600"
          >
            Crea Nuovo Articolo
          </Link>
        </div>
      }
    >
      <Head title="Eventi" />
      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg ">
            {flash.message && (
              <div className="m-5 rounded-lg bg-green-500 p-5 text-center text-white">
                {flash.message}
              </div>
            )}
            <div className="p-6 text-gray-900 dark:text-gray-100">
              <div className="overflow-auto">
                <table className="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                  <thead className="border-b-2 border-gray-500 bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr className="text-nowrap">
                      <THead>ID</THead>
                      <THead>IMMAGINE</THead>
                      <THead>TITOLO</THead>
                      <THead>CORPO</THead>
                      <THead>AUTORE</THead>
                      <THead>STATO</THead>
                      <THead>CREATO IL</THead>
                      <THead>AZIONI</THead>
                    </tr>
                  </thead>
                  {articles.data.length === 0 && (
                    <tbody>
                      <tr>
                        <td colSpan={7} className="text-center py-5 text-xl">
                          Nessun articolo trovato
                        </td>
                      </tr>
                    </tbody>
                  )}
                  {articles && (
                    <tbody>
                      {articles.data.map((article) => (
                        <tr
                          key={article.id}
                          className="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
                        >
                          <td className="px-3 py-3">{article.id}</td>
                          <td className="px-3 py-3">
                            <img
                              className="w-[40px]"
                              src={article.image_url}
                              alt={article.title}
                            />
                          </td>
                          <td className="px-3 py-3">{article.title}</td>
                          <td className="px-3 py-3">
                            {article.body.substring(0, 50)} ...
                          </td>
                          <td className="px-3 py-3">{article.author}</td>
                          <td className="px-3 py-3">
                            {
                              <span
                                className={`rounded px-2 py-1 text-white ${
                                  ARTICLE_STATUS_CLASS_MAP[article.is_published]
                                }`}
                              >
                                {ARTICLE_STATUS_TEXT_MAP[article.is_published]}
                              </span>
                            }
                          </td>
                          <td className="px-3 py-3">{article.created_at}</td>
                          <td className="text-nowrap px-3 py-3">
                            <Link
                              href={route("articles.edit", article.id)}
                              className="mx-1 font-medium text-blue-600 hover:underline dark:text-blue-500"
                            >
                              Modifica
                            </Link>
                            <button
                              onClick={(ev) => deleteArticle(article)}
                              className="mx-1 font-medium text-red-600 hover:underline dark:text-red-500"
                            >
                              Elimina
                            </button>
                          </td>
                        </tr>
                      ))}
                    </tbody>
                  )}
                </table>
              </div>
              <Pagination links={articles.meta.links} />
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}
