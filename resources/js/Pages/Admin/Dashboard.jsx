import ButtonLink from "@/Components/Admin/ButtonLink";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Dashboard() {
  return (
    <AuthenticatedLayout
      header={
        <h2 className="text-xl font-semibold leading-tight text-gray-800">
          Dashboard
        </h2>
      }
    >
      <Head title="Dashboard" />

      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="grid place-items-center overflow-hidden bg-white p-5 shadow-sm sm:rounded-lg">
            <div className="space-y-5 rounded-lg border border-gray-400 bg-gray-300 p-6 text-center text-gray-900 shadow-lg">
              <h2 className="text-2xl">Articoli</h2>
              <p>Crea, Aggiorna ed Elimina Articoli</p>
              <ButtonLink href={route("articles.index")}>Vai</ButtonLink>
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}
