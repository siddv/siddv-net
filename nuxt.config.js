module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    titleTemplate: '%s | Siddv.net',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'The personal website of Siddharth Vadgama; A creative technologist based in London, UK.' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.png' }
    ]
  },
  /*
  ** Modules
  */
  modules: [
    // provide path to the file with resources
    ['nuxt-sass-resources-loader', './assets/main.scss']
  ],
  /*
  ** Customize the progress bar color
  */
  loading: { color: '#f78516' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, { isDev, isClient }) {
      if (isDev && isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  },
  plugins: ['~/plugins/custom']
}
