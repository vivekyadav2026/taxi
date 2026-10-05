/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ["./*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#FFD700",
        secondary: "#111827",
        accent: "#FBBF24",
        "gray-150": "#EEF1F6",
        "gray-250": "#DDE2EC",
        "gray-650": "#4B5563",
        "gray-655": "#374151",
        "gray-850": "#1E2530",
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
