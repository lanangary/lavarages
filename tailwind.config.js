/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./api/pages/*.php", "./api/module/*.php"],
  theme: {
    extend: {
      screens: {
        xs: "375px",
        xxs: "320px",
        // => @media (min-width: 375px) { ... }
      },
    },
  },
  plugins: [],
};
