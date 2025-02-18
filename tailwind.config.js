// tailwind.config.js
module.exports = {
  content: [
    './resources/views/**/*.blade.php',  // Adjust the path if necessary
    './resources/css/**/*.css',          // Adjust the path if necessary
  ],
  theme: {
    extend: {
      colors: {
        main: '#0f0214',  // Define your custom color here
      },
      gridTemplateColumns: {
        '13': 'repeat(13, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '15': 'repeat(15, minmax(0, 1fr))',
      }
    },
  },
  plugins: [],
}
