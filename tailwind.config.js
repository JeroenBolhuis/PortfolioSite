module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        paper: '#D9C6A5',
        lift: '#EFE4CF',
        tile: '#D1BF9F',
        ink: '#1C1410',
        mute: '#53463A',
        rule: '#B59A74',
        oxide: '#6B2A10',
        ember: '#8A3514',
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
