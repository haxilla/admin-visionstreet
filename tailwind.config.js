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
        testcolor: '#0f172a'
        accent: '#3b82f6'

      },
    },
  }

  plugins: [],
}


