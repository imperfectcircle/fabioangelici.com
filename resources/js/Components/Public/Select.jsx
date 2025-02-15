import * as React from "react";
import { cn } from "@/lib/utils";
import { useMotionTemplate, useMotionValue, motion } from "framer-motion";

const Select = React.forwardRef(
  ({ className, type, value, label, options, ...props }, ref) => {
    const radius = 300; // change this to increase the rdaius of the hover effect
    const [visible, setVisible] = React.useState(false);

    let mouseX = useMotionValue(0);
    let mouseY = useMotionValue(0);

    function handleMouseMove({ currentTarget, clientX, clientY }) {
      let { left, top } = currentTarget.getBoundingClientRect();

      mouseX.set(clientX - left);
      mouseY.set(clientY - top);
    }
    return (
      <motion.div
        style={{
          background: useMotionTemplate`
      radial-gradient(
        ${visible ? radius + "px" : "0px"} circle at ${mouseX}px ${mouseY}px,
        var(--light),
        transparent 80%
      )
    `,
        }}
        onMouseMove={handleMouseMove}
        onMouseEnter={() => setVisible(true)}
        onMouseLeave={() => setVisible(false)}
        className="p-[2px] rounded-lg transition duration-300 group/input"
      >
        <select
          className={cn(
            `flex h-10 w-full border-none bg-gray-50 dark:bg-zinc-800 text-black shadow-input rounded-md px-3 py-2 text-sm  file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-neutral-400 disabled:cursor-not-allowed disabled:opacity-50 group-hover/input:shadow-none transition duration-400
          `,
            className
          )}
          ref={ref}
          {...props}
        >
          {options.map((option, _) => (
            <option key={_} value={option.value}>
              {option.label}
            </option>
          ))}
        </select>
      </motion.div>
    );
  }
);
Select.displayName = "Select";

export { Select };
