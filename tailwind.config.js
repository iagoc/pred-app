module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        btn: '#4EB3DA',
        blueMenu: '#8698BC',
        grayBack: '#EBEBEB'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
