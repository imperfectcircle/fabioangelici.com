import { motion } from "motion/react";
import DOMPurify from "dompurify";

export default function Header({ title, description, className }) {
  return (
    <section className="relative grid grid-cols-1 lg:grid-cols-4 md:min-h-screen overflow-hidden">
      <div className="relative p-5 md:p-0 lg:col-span-3 border-r-2 border-r-dark lg:ml-28 flex flex-col justify-center space-y-5">
        <motion.div
          className="hidden lg:block absolute left-full top-0 w-1 h-full bg-gradient-to-b from-transparent via-light to-transparent"
          initial={{ y: "-100%" }}
          animate={{ y: "100%" }}
          transition={{
            duration: 2,
            repeat: Infinity,
            repeatType: "reverse",
            ease: "easeInOut",
          }}
        />
        <div className="flex lg:block flex-col items-center space-y-5">
          <h1 className="text-responsive-8xl text-light">{title}</h1>
          <p
            className="lg:w-8/12 text-responsive-lg"
            dangerouslySetInnerHTML={{
              __html: DOMPurify.sanitize(description),
            }}
          ></p>
        </div>
      </div>
      <div className="hidden lg:block lg:col-span-1"></div>
      <div
        className={`hidden lg:block mx-auto mt-5 lg:mt-0 bg-cover bg-center w-96 h-96 border-2 border-dark shadow-lg shadow-light lg:absolute lg:top-1/2 lg:left-3/4 lg:-translate-y-1/2 lg:-translate-x-1/2 ${className}`}
      ></div>
    </section>
  );
}
