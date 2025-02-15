import { motion } from "motion/react";

export default function Card({
  title,
  description,
  icon: Icon,
  children,
  top = true,
}) {
  return (
    <div
      className={`relative p-5 bg-black/10 shadow-sm shadow-white/20 flex flex-grow min-h-full ${
        top
          ? "border-t-8 border-t-dark border-b-2 border-b-gray-400 rounded-bl-md rounded-br-md"
          : "border-b-8 border-b-dark border-t-2 border-t-gray-400 rounded-tl-md rounded-tr-md"
      }`}
    >
      <motion.div
        className={`absolute rounded w-[50%] h-[8px] bg-gradient-to-r from-transparent via-light to-transparent left-0 ${
          top ? "-top-[8px]" : "-bottom-[8px]"
        } `}
        initial={{ x: "0%" }}
        animate={{ x: "100%" }}
        transition={{
          duration: 1,
          repeat: Infinity,
          repeatType: "reverse",
          ease: "easeInOut",
        }}
      />
      <div className="flex flex-col justify-between items-center space-y-5 w-full">
        <div className="bg-black/30 w-full flex flex-col justify-center items-center space-y-5 rounded-md shadow-sm shadow-white/20 p-5">
          {Icon && <Icon className="text-8xl text-dark" />}
          <h3 className="text-responsive-2xl ml-5 uppercase">{title}</h3>
        </div>
        {description && (
          <p className="text-responsive-lg text-center">{description}</p>
        )}
        {!description && <>{children}</>}
      </div>
    </div>
  );
}
