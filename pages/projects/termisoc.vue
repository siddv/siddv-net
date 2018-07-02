<template>
  <div>

    <page-title
      title="Termisoc"
      subtitle="The Plymouth University Computing Society"/>

    <section class="section">
      <div class="container">
        <img alt="TermiSoc banner" src="~/assets/images/portfolio/termisoc/banner.jpg" />
      </div>
    </section>

    <section class="section">
      <div class="container content sv__copy-block">
        <p>
          Established in 1992 <a href="http://termisoc.org/" target="_blank">TermiSoc</a> is the Plymouth University computing society. I was the chairman for the society for two and a half years between 2011 and 2013. During these years we organized and ran numerous events scaling from small weekend projects to 50+ person LAN parties. Alongside these non-regular events we also ran fortnightly tutorials where we'd organize someone to come in and talk/teach about their area of expertise - I myself hosting some tutorials on web development. Being a designer, I also produced all of the TermiSoc promotional material, with the color scheme and logo based on that produced by the previous chairmen of the society.
        </p>
      </div>
    </section>

    <section class="section">
      <div class="container poster-container">
        <img class="third" alt="TermiSoc poster 1" src="~/assets/images/portfolio/termisoc/bullets-poster.jpg" />
        <img class="third" alt="TermiSoc poster 2" src="~/assets/images/portfolio/termisoc/lan-poster.jpg" />
        <img class="third" alt="TermiSoc poster 3" src="~/assets/images/portfolio/termisoc/propaganda-poster.jpg" />
      </div>
    </section>

    <section class="section">
      <div class="container content sv__copy-block">
        <p>
          Above are a few example of the posters I produced for the society. The first is one I made for promoting TermiSoc to freshers. The second, using a couple of images from <a href="http://www.escapistmagazine.com/videos/view/zero-punctuation" target="_blank">Zero Punctuation</a>, is one I designed to promote one of our LAN events. Finally the third is one I designed and illustrated from scratch as somewhat of a pet project, aiming to create a propaganda-style poster.
        </p>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  head () {
    return {
      title: 'Termisoc'
    }
  }
}
</script>

<style lang="scss" scoped>
.poster-container img {
  width: 33.33%
}
</style>

