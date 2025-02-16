import Footer from "@/Components/Public/Footer";
import { NavbarComponent } from "@/Components/Public/NavbarComponent";
import ScrollToTopButton from "@/Components/Public/ScrollToTopButton";
import { useEffect, useState } from "react";

export default function PublicLayout({ children }) {
  const [isVisible, setIsVisible] = useState(window.innerWidth >= 768);

  useEffect(() => {
    const handleResize = () => {
      setIsVisible(window.innerWidth >= 768);
    };

    window.addEventListener("resize", handleResize);

    return () => {
      window.removeEventListener("resize", handleResize);
    };
  }, []);
  return (
    <>
      <NavbarComponent />
      <main>{children}</main>
      {isVisible && <ScrollToTopButton />}
      <Footer />
    </>
  );
}
