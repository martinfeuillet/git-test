module.exports = {
  content: ["./**/*.php"],
  theme: {
    fontFamily: {
      'firasans': ['Fira Sans', 'system-ui' ],
      'barlow': ['Barlow', 'Georgia'],
      'poppins': ['Poppins', 'SFMono-Regular'],
    },
    extend: {
      spacing: {
        '128': '32rem',
      },
      colors:{
        'theme-red':'#db322b',
        'theme-darkblue':'#384b5a',
        'theme-whiteblue':'#9db5c7',
      }
    },
  },
  plugins: [],
}

