/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
  ],
  theme: {
    extend: {    
      fontFamily: {
      'Raleway' : ['Raleway', 'sans-serif'],
    },
  },
    colors:{
      'MyPurpel': "#7759F3",
      'White': '#FFFFFF',
      'Black': '#000000',
    }
  },
  plugins: [],
}
