<template>
  <div class="sv__project-button-wrap">
    <nuxt-link 
      v-if="!external"
      class="sv__project-button"
      :to="to">

      view more
    </nuxt-link>

    <a 
      v-if="external"
      class="sv__project-button"
      :href="to"
      target="_blank"
      rel="noopener">

      view more
      <img
        class="sv__external-link-img"
        src="~/assets/images/external-link.png">
    </a>
  </div>
</template>

<script>
export default {
  props: {
    to: {
      type: String,
      default: '/'
    },
    external: {
      type: Boolean
    }
  }
}
</script>

<style lang="scss">

  .sv__project-button-wrap {
      display: block;
      float: right;
  }

  .sv__project-button {
    background-color: #f78516;
    border: 1px solid #f78516;
    border-radius: 4px;
    box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    line-height: 2.4em;
    padding: 0 1em;
    transition: all 0.1s ease-in-out;

    &:hover {
      background-color: #ff9c00;
      border: 1px solid #ff9c00;
      color: #fff;
      text-decoration: none;
    }

    &:active {
      background-color: #B46212;
      border: 1px solid #B46212;
      box-shadow: 0 0 0 rgba(255,255,255,0.5) inset;
    }
  }

  .sv__external-link-img {
    display: inline;
  }

</style>
