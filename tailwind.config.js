module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      blue: {
        400: '#0D6EF0',
        450: '#0D6EF0',
        550: '#0547A0'
      },
      red: {
        DEFAULT: '#ef0f10'
      },
      gray: {
        50: '#E5E5E5',
        250: '#E8E8E8',
        600: '#E8E8E8',
        150: '#F2F2F2',
        850: '#4B4B4B',
        950: '#444444'
      },
      white: {
        DEFAULT: '#ffffff',
      },

    },
    extend: {
      fontFamily: {
        bungee: ['Bungee', 'cursive'],
        raleway: ['Raleway', 'sans-serif'],
        roboto: ['Roboto', 'Slab', 'serif'],
      },
      fontStyle: ['hover', 'focus']
    },
  },
  plugins: [],
}
