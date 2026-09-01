module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        paper: '#ded1ba',
        lift: '#ede4d3',
        tile: '#D1BF9F',
        ink: '#1C1410',
        mute: '#53463A',
        navi: '#212c70',
      },
      fontFamily: {
        sans: ['Archivo', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        mono: ['Azeret Mono', 'ui-monospace', 'monospace'],
      },
      screens: {
        xs: '480px',
      },
    },
  },
  plugins: [],
}
