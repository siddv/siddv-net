<template>
  <div>
    <div class="hero-head">
      <nav class="navbar">
        <div class="container sv__navigation-container">
          <div class="navbar-brand">
            <a class="navbar-item">
              Siddv.net
            </a>
          </div>
          <div class="navbar-tabs">
            <nuxt-link
              to="/"
              exact-active-class="is-active"
              class="navbar-item">
              Home
            </nuxt-link>
            <nuxt-link
              to="/about"
              exact-active-class="is-active"
              class="navbar-item">
              About
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
    </div>

    <nuxt/>
  </div>
</template>

<style lang="scss">
  .sv__navigation-container {
    display: flex !important;
    justify-content: space-between; 
  }
</style>
