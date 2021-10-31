module.exports = {
  mode: 'jit',
  purge: ['./admin/', './src/**/*.vue'],
  // mode: '',
  // purge: '',
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend:
    {
      colors:
      {
        primary:
        {
          '50': '#fef4f8',
          '100': '#fde9f0',
          '200': '#f9c8da',
          '300': '#f5a7c3',
          '400': '#ee6497',
          '500': '#e6226a',
          '600': '#cf1f5f',
          '700': '#ad1a50',
          '800': '#8a1440',
          '900': '#711134'
        },
        secondary: {
          '50': '#f2f3f5',
          '100': '#e6e7eb',
          '200': '#bfc2cd',
          '300': '#999eaf',
          '400': '#4d5572',
          '500': '#000c36',
          '600': '#000b31',
          '700': '#000929',
          '800': '#000720',
          '900': '#00061a'
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
