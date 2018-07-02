<template>
  <section class="section">
    <div class="container sv__copy-block">
      <div class="yt">
        <div class="yt__inner">
          <iframe :src="`//www.youtube.com/embed/${vid}`" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
	</section>
</template>

<script>
export default {
  props: {
    vid: String
  }
}
</script>


<style lang="scss" scoped>

.section {
  padding-top: 0;
}

.yt{
  margin: 0 auto;
  max-width: 820px;
  width: 100%;
}

.yt__inner {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 30px;
  height: 0;
  overflow: hidden;

  iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}

</style>

