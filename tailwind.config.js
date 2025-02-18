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
    },
  },
  plugins: [],
}
