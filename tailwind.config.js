/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "poppins": ["Plus Jakarta Sans", "sans-serif"],
      },
      colors: {
        "primary": "#3986a3",
        "primary-alt": "#75badb",
      }
    },
  },
  plugins: [],
}

