import { Link } from "@inertiajs/react";

export default function PrimaryButton({
  href = "",
  className = "",
  children,
  ...props
}) {
  return href ? (
    <Link
      {...props}
      href={href}
      className={`px-6 py-3 rounded-3xl border-white border-2 uppercase hover:bg-gradient-to-r hover:from-light hover:to-dark transition-colors ${className}`}
    >
      {children}
    </Link>
  ) : (
    <button
      {...props}
      className={`px-6 py-3 rounded-3xl border-white border-2 uppercase hover:bg-gradient-to-r hover:from-light hover:to-dark transition-colors ${className}`}
    >
      {children}
    </button>
  );
}
