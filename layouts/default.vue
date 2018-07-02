<template>
  <div>
    <nav class="navbar is-fixed-top is-dark">
      <div class="container sv__navigation-container">
        <div class="navbar-brand">
          <a
            href="/"
            class="navbar-item">
            Siddv.net
          </a>
        </div>
        <div class="navbar-brand">
          <nuxt-link
            to="/"
            exact-active-class="is-active"
            class="navbar-item">
            Home
          </nuxt-link>
          <nuxt-link
            to="/cv"
            exact-active-class="is-active"
            class="navbar-item">
            CV
          </nuxt-link>
          <a 
            href="https://blog.siddv.net"
            target="_blank"
            rel="noopener"
            class="navbar-item">
            Blog
          </a>
        </div>
      </div>
    </nav>

    <nuxt class="sv__site-wrap"/>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          Built using 
          <a
            href="https://nuxtjs.org"
            target="_blank"
            rel="noopener">
            Nuxt</a>
          and 
          <a
            href="htps://bulma.io"
            target="_blank"
            rel="noopener">
            Bulma</a>.

          Source 
          <a
            href="https://github.com/siddv/siddv-net"
            target="_blank"
            rel="noopener">
            here</a>.
        </p>

        <div class="sv__social-images">
          <a 
            v-for="link in social"
            class="sv__social-image"
            :key="link.href"
            :href="link.href"
            target="_blank"
            rel="noopener">
            <img 
              :src="link.image"
              :alt="link.alt">
          </a>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import SiteData from '~/static/data.js' 
export default {
  data () {
    return {
      social: SiteData.social
    }
  }
}
</script>

<style lang="scss">
  .sv__title {
    text-align: center;
  }

  .sv__site-wrap {
    padding-top: 52px
  }

  .sv__navigation-container {
    display: flex !important;
    justify-content: space-between; 
  }

  .sv__social-image {
    margin: 5px;
  }
</style>
