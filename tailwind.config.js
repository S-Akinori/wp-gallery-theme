/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#222222',
      'base-color': '#FCFCFC',
      'base-cont': '#FCFCFC',
      'main': '#222222',
      'main-cont': '#FCFCFC',
      'accent': '#ffff00',
      'accent-cont': '#222222',
    },
    },
  },
  plugins: [],
}
