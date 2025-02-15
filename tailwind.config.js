import forms from "@tailwindcss/forms";
import flowbite from "flowbite-react/tailwind";

const {
  default: flattenColorPalette,
} = require("tailwindcss/lib/util/flattenColorPalette");

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: ["class"],
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.jsx",
    flowbite.content(),
  ],

  theme: {
    colors: {
      background: "#1d1d1d",
      dark: "#01435A",
      light: "#189BA3",
    },
    extend: {
      fontSize: {
        xxs: [
          "0.625rem",
          {
            lineHeight: "1rem",
          },
        ],
        xs: [
          "0.75rem",
          {
            lineHeight: "1rem",
          },
        ],
        sm: [
          "0.875rem",
          {
            lineHeight: "1.25rem",
          },
        ],
        base: [
          "1rem",
          {
            lineHeight: "1.5rem",
          },
        ],
        lg: [
          "1.125rem",
          {
            lineHeight: "1.75rem",
          },
        ],
        xl: [
          "1.25rem",
          {
            lineHeight: "1.75rem",
          },
        ],
        "2xl": [
          "1.5rem",
          {
            lineHeight: "2rem",
          },
        ],
        "3xl": [
          "1.875rem",
          {
            lineHeight: "2.25rem",
          },
        ],
        "4xl": [
          "2.25rem",
          {
            lineHeight: "2.5rem",
          },
        ],
        "5xl": [
          "3rem",
          {
            lineHeight: "1",
          },
        ],
        "6xl": [
          "3.75rem",
          {
            lineHeight: "1",
          },
        ],
        "7xl": [
          "4.5rem",
          {
            lineHeight: "1",
          },
        ],
        "8xl": [
          "6rem",
          {
            lineHeight: "1",
          },
        ],
        "9xl": [
          "8rem",
          {
            lineHeight: "1",
          },
        ],
      },
      fontFamily: {
        josefin: ["Josefin Sans", "sans-serif"],
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
      colors: {},
      boxShadow: {
        input: `0px 2px 3px -1px rgba(0,0,0,0.1), 0px 1px 0px 0px rgba(25,28,33,0.02), 0px 0px 0px 1px rgba(25,28,33,0.08)`,
      },
    },
  },

  plugins: [
    function ({ addUtilities, theme }) {
      const fontSizes = theme("fontSize");

      const remToPx = (rem) => parseFloat(rem) * 16;
      const keys = Object.keys(fontSizes);
      keys.sort((a, b) => remToPx(fontSizes[a][0]) - remToPx(fontSizes[b][0]));
      const responsiveFontSizes = {};

      for (let i = 0; i < keys.length; i++) {
        const key = keys[i];
        const value = fontSizes[key];
        const prevValue = fontSizes[keys[i - 1]] || value;
        responsiveFontSizes[`.text-responsive-${key}`] = {
          fontSize: prevValue[0],
          lineHeight: prevValue[1].lineHeight,
          [`@screen lg`]: {
            fontSize: value[0],
            lineHeight: value[1].lineHeight,
          },
        };
      }
      addUtilities(responsiveFontSizes, ["responsive"]);
    },
    forms,
    flowbite.plugin(),
    require("tailwind-scrollbar"),
    require("tailwindcss-animate"),
    addVariablesForColors,
  ],
};

function addVariablesForColors({ addBase, theme }) {
  let allColors = flattenColorPalette(theme("colors"));
  let newVars = Object.fromEntries(
    Object.entries(allColors).map(([key, val]) => [`--${key}`, val])
  );

  addBase({
    ":root": newVars,
  });
}
