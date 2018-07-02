<template>

  <div>
    <section class="hero">
      
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-2">
            Siddharth Vadgama
          </h1>
          <h2 class="subtitle">
            I make things
          </h2>
        </div>
      </div>

      <div class="hero-body content sv__hero">
        <blockquote class="container has-text-centered blockquote sv__hero-blurb">
          <h2 class="title is-3">Who I am</h2>
          <p>
            I'm Sidd; a creative technologist. I like creating both virtual and physical experiences, being versatile enough to tackle any part of a project, be it design, development or hardware. Focusing on bringing all elements together to create a streamlined user experience.
          </p>
          <p>
            Currently, I'm based in London working as a Senior Frontend Developer at <a href="http://www.tribalworldwide.co.uk/" target="_blank">Tribal&nbsp;Worldwide</a>. Previously an Angular Developer at <a href="http://www.tribalworldwide.co.uk/" target="_blank">British&nbsp;Airways</a>.
          </p>
        </blockquote>
      </div>
    </section>

    <section class="section"> 

      <div class="container">

        <h2 class="title is-3">Some things I've done</h2>

        <figure
          class="columns"
          v-for="project in projects"
          :key="project.name">

          <div class="column">
            <img :src="project.img">
          </div>

          <figcaption class="column is-two-thirds content">
            <h3 class="title is-4">{{project.title}}</h3>

            <p v-html="project.description"></p>

            <project-button
              :to="project.cta.link"
              :external="project.cta.external">
            </project-button>
          </figcaption>
        </figure>

      </div>
    </section>
  </div>
</template>


<script>
import ProjectData from '~/static/data.js'

import ProjectButton from '~/components/ProjectButton'


export default {
  data() {
    return {
      projects: ProjectData.projects
    }
  },
  components: {
    ProjectButton
  }
}
</script>

<style lang="scss">
@import "~bulma/sass/utilities/_all.sass";

.sv__hero {
  background: url('~/assets/images/hackbox.jpg');
  background-size: cover;
  background-position: center;
  padding: 0 !important;

  blockquote.sv__hero-blurb {
    background: rgba(0,0,0,0.75);
    border-left: 0;
    color: white;
    max-width: 600px;
    padding: 2em 2em;

    p {
      text-align: left !important;
    }

    .title {
      color: white;
    }
  }
}

@include tablet {

  .sv__hero {
    padding: 0 1.5rem !important;

    blockquote.sv__hero-blurb {
      padding: 3em 4em;
    }
  }
}
</style>
