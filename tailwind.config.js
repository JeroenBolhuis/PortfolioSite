// tailwind.config.js
module.exports = {
  content: [
    './resources/views/**/*.blade.php',  // Adjust the path if necessary
    './resources/css/**/*.css',          // Adjust the path if necessary
    // Add other paths if you have components or JS files using Tailwind classes
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
