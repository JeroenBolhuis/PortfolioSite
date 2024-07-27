/** @type {import('tailwindcss').Config} */
export default {
  content: {
    files: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''),
  },
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('taos/plugin')
  ],
}
