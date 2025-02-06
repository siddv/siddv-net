<template>

  <div>
    <section class="hero">
      
      <page-title
        title="Siddharth Vadgama"
        subtitle="I make things"/>

      <div class="hero-body content sv__hero">
        <blockquote class="container has-text-centered blockquote sv__hero-blurb">
          <h2 class="title is-4">Who I am</h2>
          <p>
            I'm Sidd, a technologist. I lead fast-paced projects creating both digital and physical MVPs. Being versatile enough to bring all elements together to create fun, effective, and useful products for people.
          </p>
          <p>
            Currently, I'm based in London working as a Technology Director at <a class="sv__light-link" href="https://www.frog.co/" target="_blank" rel="noopener">frog</a>. Previously at <a class="sv__light-link" href="http://www.tribalworldwide.co.uk/" target="_blank"  rel="noopener">Tribal&nbsp;Worldwide</a>, and <a class="sv__light-link" href="http://www.ba.com/" target="_blank">British&nbsp;Airways</a>.
          </p>
        </blockquote>
      </div>
    </section>

    <section class="section"> 

      <div class="container">

        <h2 class="title is-4 sv__title">Some things I've done</h2>

        <figure
          class="columns sv__project-list-item"
          v-for="project in projects"
          :key="project.name">

          <div class="column">
            <img :src="project.img">
          </div>

          <figcaption class="column is-two-thirds content is-clearfix">
            <h3 class="title is-5">{{project.title}}</h3>

            <p v-html="project.description"></p>

            <project-button
              :to="project.cta.link"
              :external="project.cta.external"
              :disabled="project.cta.disabled"/>
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
    ProjectButton,
  },
  head() {
    return {
      title: 'Home'
    }
  }
}
</script>

<style lang="scss">
@import "~bulma/sass/utilities/_all.sass";

a.sv__light-link {
  color: $cyan;

  &:hover{
    color: $blue;
  }
}

.sv__hero {
  background: url('~/assets/images/hackbox.jpg');
  background-size: cover;
  background-position: center;
  padding: 0 !important;

  blockquote.sv__hero-blurb {
    background: rgba($dark ,0.9);
    border-left: 0;
    color: white;
    max-width: 640px;
    padding: 2em 2em;

    p {
      text-align: left !important;
    }

    .title {
      color: $white;
    }
  }
}

.sv__project-list-item {
  border-bottom: 1px solid $light;
  flex-direction: row;
  padding-bottom: 2rem;
  padding-top: 2rem;
  
  &:nth-child(odd) {
    flex-direction: row-reverse;
  }

  &:last-of-type{ 
    border-bottom: 0;
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
