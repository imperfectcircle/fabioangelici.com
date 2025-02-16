import { useState, useEffect } from "react";
import { ArrowUpFromLine } from "lucide-react";

const ScrollToTopButton = () => {
  const [isVisible, setIsVisible] = useState(false);
  const [clipPath, setClipPath] = useState("inset(0% 100% 0% 0%)");

  useEffect(() => {
    const toggleVisibility = () => {
      const scrollTop = window.scrollY;
      const docHeight =
        document.documentElement.scrollHeight - window.innerHeight;
      const scrollPercentage =
        docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

      setIsVisible(window.scrollY > 300);

      document.documentElement.style.setProperty(
        "--clip-path",
        `inset(0% ${100 - scrollPercentage}% 0% 0%)`
      );
    };

    window.addEventListener("scroll", toggleVisibility);
    return () => window.removeEventListener("scroll", toggleVisibility);
  }, []);

  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <div
      onClick={scrollToTop}
      className={`z-20 fixed bottom-5 right-5 md:bottom-10 md:right-10 rounded-full opacity-0 bg-white p-2 shadow transition-all duration-200 ${
        isVisible ? "opacity-100" : "opacity-0 pointer-events-none"
      }`}
      style={{ clipPath: "var(--clip-path)" }}
    >
      <ArrowUpFromLine className="w-[30px] h-[30px] text-black" />
    </div>
  );
};

export default ScrollToTopButton;
