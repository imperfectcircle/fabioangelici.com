import { Link } from "@inertiajs/react";

export default function NavbarLink({ active = false, children, ...props }) {
  return (
    <>
      <Link
        {...props}
        className={`uppercase block py-2 pl-3 pr-4 font-bold text-white transition-colors hover:text-gray-400 md:p-0 md:text-lg ${
          active
            ? "bg-[#008297] font-bold text-white md:bg-transparent md:text-[#008297] "
            : ""
        }`}
      >
        {children}
      </Link>
    </>
  );
}
