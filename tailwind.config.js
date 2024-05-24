/** @type {import('tailwindcss').Config} */
import theme from "tailwindcss/defaultTheme.js";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            theme: '#273c75',
            theme_dark: '#192a56',
        }
    },
  },
  plugins: [],
    mode: process.env.NODE_ENV ? 'jit' : undefined,
}

