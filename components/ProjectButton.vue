<template>
  <div>
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
        class="external-link-img"
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

  .sv__project-button {
    font-size: 14px;
    line-height: 2.4em;
    padding: 0 1em;
    display: inline-block;
    background-color: #f78516;
    color: #fff;
    border: 1px solid #f78516;
    border-radius: 4px;
    box-shadow: 0 1px 0 rgba(255,255,255,0)
  }

  .sv__external-link-img {
    display: inline;
  }

</style>
