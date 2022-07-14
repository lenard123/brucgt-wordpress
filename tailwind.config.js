/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/**.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#699429'
      }
    },
  },
  plugins: [
    require("daisyui")
  ],
}
