import { Link } from "@inertiajs/react";
import { Navbar } from "flowbite-react";
import NavbarLink from "./NavbarLink";
import { useMediaQuery } from "react-responsive";
import PrimaryButton from "./PrimaryButton";

export function NavbarComponent() {
  const isMobile = useMediaQuery({ query: "(max-width: 768px)" });
  return (
    <Navbar fluid rounded className="bg-[#1d1d1d]">
      <Navbar.Brand as={Link} href="https://flowbite-react.com">
        <img
          src="/images/logo.webp"
          className="mr-3 h-32"
          alt="Fabio Angelici Logo"
        />
      </Navbar.Brand>
      <Navbar.Toggle />
      <Navbar.Collapse>
        <div className="md:flex md:items-center md:space-x-10">
          <NavbarLink
            href={route("public.home")}
            active={route().current("public.home")}
          >
            Home
          </NavbarLink>
          <NavbarLink
            href={route("public.about")}
            active={route().current("public.about")}
          >
            Chi sono
          </NavbarLink>
          <NavbarLink
            href={route("public.services")}
            active={route().current("public.services")}
          >
            servizi
          </NavbarLink>
          <NavbarLink
            href={route("public.portfolio")}
            active={route().current("public.portfolio")}
          >
            portfolio
          </NavbarLink>
          <NavbarLink
            href={route("public.blog")}
            active={route().current("public.blog")}
          >
            blog
          </NavbarLink>
          {isMobile && (
            <NavbarLink
              href={route("public.contact")}
              active={route().current("public.contact")}
            >
              contatti
            </NavbarLink>
          )}
          {!isMobile && <PrimaryButton>contatti</PrimaryButton>}
        </div>
      </Navbar.Collapse>
    </Navbar>
  );
}
