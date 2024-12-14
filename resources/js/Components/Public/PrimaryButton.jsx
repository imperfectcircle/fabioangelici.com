import { Link } from "@inertiajs/react";

export default function PrimaryButton({ children }) {
  return (
    <Link
      href={route("public.contact")}
      className="px-6 py-3 rounded-3xl border-white border-2 uppercase hover:bg-gradient-to-r hover:from-[#189BA3] hover:to-[#01435A] transition-colors"
    >
      {children}
    </Link>
  );
}
