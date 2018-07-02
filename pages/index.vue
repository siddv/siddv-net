<template>

  <section class="hero">
    
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          Siddharth Vadgama
        </h1>
        <h2 class="subtitle">
          I make things
        </h2>
      </div>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered content sv__hero-blurb">
        <h2 class="title is-4">Title 1</h2>
        <p>
          I'm Sidd; a creative technologist. I like creating both virtual and physical experiences, being versatile enough to tackle any part of a project, be it design, development or hardware. Focusing on bringing all elements together to create a streamlined user experience.
        </p>
        <p>
          Currently, I'm based in London working as a Senior Frontend Developer at <a href="http://www.tribalworldwide.co.uk/" target="_blank">Tribal&nbsp;Worldwide</a>. Previously an Angular Developer at <a href="http://www.tribalworldwide.co.uk/" target="_blank">British&nbsp;Airways</a>.
        </p>
      </div>
    </div>
  </section>
  
</template>


<script>
import AppLogo from '~/components/AppLogo.vue'

export default {
  components: {
    AppLogo
  }
}
</script>

<style lang="scss">
.sv__hero-blurb {
  background: rgba(0,0,0,0.2);
  color: white;
  max-width: 600px;
}
</style>
