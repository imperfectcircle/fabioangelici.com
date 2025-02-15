import { useForm, usePage } from "@inertiajs/react";
import InputError from "@/Components/InputError";
import LabelInputContainer from "@/Components/Public/LabelInputContainer";
import { Label } from "@/Components/Public/Label";
import { Input } from "@/Components/Public/Input";
import { Select } from "@/Components/Public/Select";
import { Textarea } from "@/Components/Public/Textarea";
import BottomGradient from "@/Components/Public/BottomGradient";
import { cn } from "@/lib/utils";

export default function ContactForm({
  className,
  title,
  route,
  select = true,
}) {
  const { flash } = usePage().props;
  const { honeypot } = usePage().props;
  const {
    data,
    setData,
    post,
    processing,
    errors,
    wasSuccessful,
    reset,
    clearErrors,
  } = useForm({
    service: select ? "" : title,
    name: "",
    email: "",
    phone: "",
    message: "",
    privacy: false,
    [honeypot.nameFieldName]: "",
    [honeypot.validFromFieldName]: honeypot.encryptedValidFrom,
  });

  const submit = (e) => {
    e.preventDefault();

    post(route, {
      preserveScroll: true,
      onSuccess: () => {
        reset("name", "email", "phone", "message");
        clearErrors();
      },
    });
  };

  return (
    <section className={cn("bg-dark/70 p-5 md:p-10", className)}>
      <div className="md:w-8/12 md:mx-auto">
        <h2 className="text-3xl text-center mb-10">{title}</h2>
        {wasSuccessful && (
          <div className="my-5 w-full rounded-lg bg-light p-5 text-center text-xl text-white">
            {flash.message}
          </div>
        )}
        <form
          onSubmit={submit}
          className="space-y-3 rounded-xl bg-black/50 p-10 text-white shadow-lg"
        >
          {honeypot.enabled && (
            <div
              style={{ display: "none" }}
              name={`${honeypot.nameFieldName}_wrap`}
            >
              <input
                type="text"
                name={honeypot.nameFieldName}
                id={honeypot.nameFieldName}
                value={data[honeypot.nameFieldName]}
                onChange={(e) =>
                  setData(honeypot.nameFieldName, e.target.value)
                }
              />
              <input
                type="text"
                name={honeypot.validFromFieldName}
                value={data[honeypot.validFromFieldName]}
                readOnly
              />
            </div>
          )}
          {select && (
            <LabelInputContainer>
              <Label className="text-white text-lg flex">
                Scegli il Servizio<p className="text-light">*</p>
              </Label>
              <Select
                id="service"
                name="service"
                required
                value={data.service}
                onChange={(e) => setData("service", e.target.value)}
                className="bg-gray-700 text-white placeholder:text-white/40"
                options={[
                  { value: "", label: "--Seleziona il servizio--" },
                  { value: "web_site", label: "Sito Web" },
                  { value: "landing_page", label: "Landing Page" },
                  { value: "ecommerce", label: "E-commerce" },
                  { value: "hosting", label: "Hosting" },
                  { value: "management", label: "Gestionale" },
                  { value: "other", label: "Altro" },
                ]}
              />
              {errors.service && <InputError message={errors.service} />}
            </LabelInputContainer>
          )}
          <LabelInputContainer className="pb-5">
            <Label className="text-white text-lg flex" htmlFor="name">
              Nome<p className="text-light">*</p>
            </Label>
            <Input
              className="bg-gray-700 placeholder:text-white/40"
              id="name"
              name="name"
              type="text"
              value={data.name}
              onChange={(e) => setData("name", e.target.value)}
              placeholder="Linus Torvalds"
              required
            />
            {errors.name && <InputError message={errors.name} />}
          </LabelInputContainer>
          <LabelInputContainer className="pb-5">
            <Label className="text-white text-lg flex" htmlFor="email">
              Indirizzo Email<p className="text-light">*</p>
            </Label>
            <Input
              className="bg-gray-700 placeholder:text-white/40"
              id="email"
              name="email"
              type="email"
              placeholder="linus@torvalds.com"
              value={data.email}
              onChange={(e) => setData("email", e.target.value)}
              required
            />
            {errors.email && <InputError message={errors.email} />}
          </LabelInputContainer>
          <LabelInputContainer className="pb-5">
            <Label className="text-white text-lg flex" htmlFor="phone">
              Numero di Telefono<p className="text-light">*</p>
            </Label>
            <Input
              className="bg-gray-700 placeholder:text-white/40"
              id="phone"
              name="phone"
              type="text"
              placeholder="+39012345678"
              value={data.phone}
              onChange={(e) => setData("phone", e.target.value)}
              required
            />
            {errors.phone && <InputError message={errors.phone} />}
          </LabelInputContainer>
          <LabelInputContainer className="pb-5">
            <Label className="text-white text-lg flex" htmlFor="message">
              Il tuo Messaggio<p className="text-light">*</p>
            </Label>
            <Textarea
              className="bg-gray-700 text-white placeholder:text-white/40 resize-none"
              rows="5"
              id="message"
              name="message"
              value={data.message}
              onChange={(e) => setData("message", e.target.value)}
              placeholder="Inserisci qui il tuo messaggio; ti chiedo di includere quante più informazioni possibili riguardo il progetto che vuoi realizzare."
            />
            {errors.message && <InputError message={errors.message} />}
          </LabelInputContainer>
          <LabelInputContainer className="pb-5">
            <div className="space-x-3">
              <input
                className="bg-gray-700 placeholder:text-white/40 -mt-1"
                id="privacy"
                name="privacy"
                type="checkbox"
                value={data.privacy}
                onChange={(e) => setData("privacy", e.target.checked)}
                required
              />
              <Label className="text-white text-base" htmlFor="privacy">
                Dichiaro di aver preso visione della{" "}
                <a
                  href="https://www.iubenda.com/privacy-policy/71101442"
                  target="_blank"
                  className="inline text-light underline"
                >
                  Privacy Policy
                </a>
                , pertanto presto il mio consenso al trattamento dei dati per
                ricevere le informazioni richieste.
                <span className="text-light">*</span>
              </Label>
            </div>
            {errors.privacy && <InputError message={errors.privacy} />}
          </LabelInputContainer>

          <button
            className="mt-10 bg-gradient-to-br relative group/btn from-light to-dark block w-full text-white rounded-full h-10 font-medium shadow-[0px_1px_0px_0px_#ffffff80_inset,0px_-1px_0px_0px_#ffffff80_inset]"
            type="submit"
            disabled={processing}
          >
            Invia
            <BottomGradient />
          </button>
        </form>
      </div>
    </section>
  );
}
