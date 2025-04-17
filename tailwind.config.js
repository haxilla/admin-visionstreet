export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/**/*.php', // optional fallback
  ],
  safelist: ['bg-sidebar'],
  theme: {
    extend: {
      colors: {
        sidebar: '#0f172a',
      },
    },
  },

  plugins: [],
}


