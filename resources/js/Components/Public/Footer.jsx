import { IoIosMail } from "react-icons/io";
import { FaPhoneAlt } from "react-icons/fa";
import { FaBuilding } from "react-icons/fa6";
import { motion } from "motion/react";

export default function Footer() {
  const year = new Date();

  return (
    <>
      <div className="relative grid grid-cols-1 md:grid-cols-3 p-10 border-t-2 border-dark space-y-10 md:space-y-0">
        <motion.div
          className="absolute left-0 -top-[2px] w-[50%] h-[2px] bg-gradient-to-r from-transparent via-light to-transparent rounded"
          initial={{ x: "0%" }}
          animate={{ x: "100%" }}
          transition={{
            duration: 1,
            repeat: Infinity,
            repeatType: "reverse",
            ease: "easeInOut",
          }}
        />
        <div className="flex items-center justify-center">
          <img className="w-48 h-48" src="/images/Logo_Kyo_Sito.webp" alt="" />
        </div>
        <div className="text-responsive-2xl flex flex-col justify-center items-center">
          <p className="pb-3">Contatti</p>
          <div className="space-y-3">
            <div className="flex items-center justify-center space-x-2">
              <IoIosMail />
              <a href="mailto:info@fabioangelici.com">info@fabioangelici.com</a>
            </div>
            <div className="flex items-center justify-center space-x-2">
              <FaPhoneAlt />
              <a href="tel:+393514698047">+393514698047</a>
            </div>
            <div className="flex items-center justify-center space-x-2">
              <FaBuilding />
              <p>Varese</p>
            </div>
          </div>
        </div>
        <div className="grid place-items-center">
          <div className="text-responsive-2xl flex flex-col  space-y-3">
            <p className="pb-3">Menù</p>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.home")}
            >
              Home
            </a>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.about")}
            >
              Chi Sono
            </a>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.services")}
            >
              Servizi
            </a>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.portfolio")}
            >
              Portfolio
            </a>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.blog")}
            >
              Blog
            </a>
            <a
              className="hover:underline transition-all hover:text-gray-300 w-fit"
              href={route("public.contact")}
            >
              Contatti
            </a>
          </div>
        </div>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-4 p-5 bg-gray-500 text-center">
        <p>{year.getFullYear()}© Fabio Angelici</p>
        <p>P.I. 03929520124</p>
        <a
          href="https://www.iubenda.com/privacy-policy/71101442"
          target="_blank"
        >
          Privacy Policy
        </a>
        <a
          href="https://www.iubenda.com/privacy-policy/71101442/cookie-policy"
          target="_blank"
        >
          Cookie Policy
        </a>
      </div>
    </>
  );
}
