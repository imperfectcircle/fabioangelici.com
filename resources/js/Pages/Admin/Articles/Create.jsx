import CKEditorComponent from "@/Components/Admin/CKEditorComponent";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, useForm } from "@inertiajs/react";

export default function Create({ auth }) {
  const { data, setData, post, errors, processing } = useForm({
    title: "",
    body: "",
    image: "",
    is_published: false,
  });

  const submit = (e) => {
    e.preventDefault();
    post(route("articles.store"));
  };
  return (
    <AuthenticatedLayout
      user={auth.user}
      header={
        <div className="flex items-center justify-between">
          <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Crea un Nuovo Articolo
          </h2>
        </div>
      }
    >
      <Head title="Crea un Nuovo Articolo" />

      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
            <form
              onSubmit={submit}
              className="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
              encType="multipart/form-data"
            >
              <div>
                <InputLabel htmlFor="title" value="Titolo" />
                <TextInput
                  id="title"
                  name="title"
                  type="text"
                  className="mt-1 block w-full"
                  autoComplete="title"
                  onChange={(e) => setData("title", e.target.value)}
                />
                <InputError message={errors.title} className="mt-2" />
              </div>
              <div className="mt-4">
                <InputLabel htmlFor="body" value="Corpo" />
                <CKEditorComponent
                  data={data.body}
                  onChange={(event, editor) => {
                    const data = editor.getData();
                    setData("body", data);
                  }}
                />
                <InputError message={errors.body} className="mt-2" />
              </div>
              <div className="mt-4">
                <InputLabel htmlFor="image" value="Immagine di Copertina" />
                <TextInput
                  id="image"
                  name="image"
                  type="file"
                  className="mt-1 block w-full"
                  onChange={(e) => setData("image", e.target.files[0])}
                />
                <InputError message={errors.image} className="mt-2" />
              </div>
              <div className="mt-4">
                <InputLabel htmlFor="is_published" value="Pubblicato" />
                <TextInput
                  id="is_published"
                  name="is_published"
                  type="checkbox"
                  onChange={(e) => setData("is_published", e.target.checked)}
                />
                <InputError message={errors.is_published} className="mt-2" />
              </div>
              <div className="mt-4 text-right">
                <Link
                  href={route("articles.index")}
                  className="mr-2 rounded bg-gray-100 px-3 py-1 text-gray-800 shadow transition-all hover:bg-gray-200"
                >
                  Annulla
                </Link>
                <button
                  disabled={processing}
                  className="rounded bg-green-500 px-3 py-1 text-white shadow transition-all hover:bg-green-600"
                >
                  Crea
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}
