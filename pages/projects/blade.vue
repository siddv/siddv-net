<template>
  <div class="">

  <page-title
    title="The Blade"
    subtitle="Gameboy-driven chiptune keytar"/>

  <Youtube vid="E1az4R__fWQ"/>

	<section class="section">
    <div class="container sv__copy-block content">
			<h3>What is The Blade?</h3>
			<p>
				A chiptune keytar built by <a href="http://www.thereminhero.com/" target="_blank">Greig Stewart</a>, <a href="http://wray.pro/" target="_blank">Sam Wray</a>, and myself. It comprised of hacked Guitar Hero guitars, a Rock Band keytar, two Game Boys, an Arduino Mega, and a Raspberry Pi, and a Leap Motion.     
			</p>
			<p>
				We built the thing at <a href="http://buzz-jam.com/" target="_blank">BuzzJam</a>, a 32-hour hackathon held at <a href="http://www.redbullstudios.com/london" target="_blank">Red Bull Studios</a> in London. It was presented and run by <a href="https://twitter.com/ygn" target="_blank">Young&nbsp;Guns&nbsp;Network</a>, <a href="http://www.sonymusic.co.uk/" target="_blank">Sony&nbsp;Music</a>, <a href="http://wma.agency/">WMA</a>, and <a href="http://wemakeawesomesh.it/" target="_blank">We&nbsp;Make&nbsp;Awesome&nbsp;Sh</a>.
			</p>
			<p>
				The hackathon and project was super fun, and we managed to finish building it just in time for <a href="http://www.themandusofficial.com/" target="_blank">Them&nbsp;&amp;&nbsp;Us</a> to play it live! We ended up getting media coverage from the <a href="http://www.bbc.co.uk/newsbeat/article/34310120/six-emerging-music-acts-spend-two-days-making-six-new-instruments" target="_blank">BBC</a> and <a href="http://noisey.vice.com/en_uk/blog/buzz-jam-lets-artists-invent-their-own-musical-instrument" target="_blank">Vice</a>.
			</p>
		</div>
	</section>

  <section class="section">
    <div class="container">
			<img src="~/assets/images/portfolio/blade/blade-bbc.jpg">
		</div>
  </section>

  <section class="section">
    <div class="container sv__copy-block content">
			<h3>What makes up The Blade?</h3>
				<ul>
					<li><h4>3D printed housing</h4>
						<ul>
							<li>
								We custom modeled and printed a housing for the instrument to ensure it would be ergonomic to wield, hold together with all the components, and also look badass.
							</li>
						</ul>
					</li>
					<li><h4>Two Guitar Hero necks</h4>
						<ul>
							<li>
								The necks, hacked off a couple of old Guitar Hero controllers, were totally rewired to output the button presses to jumper cables.
							</li>
						</ul>
					</li>
					<li><h4>Arduino Mega</h4>
						<ul>
							<li>
								All the wiring from the Guitar Hero necks fed into the Mega, which then registered the button presses and output appropriate MIDI signals over USB serial into the Raspberry PI.
							</li>
						</ul>
					</li>
					<li><h4>Rock Band keytar</h4>
						<ul>
							<li>
								We stripped this down to the bare keyboard and had the MIDI also going into the PI.
							</li>
						</ul>
					</li>
					<li><h4>Raspberry Pi</h4>
						<ul>
							<li>
								Taking in all the MIDI, and running PD Extended we got this to manage and re-map all the button presses we needed. This then output to a MIDI thru box.
							</li>
						</ul>
					</li>
					<li><h4>Arduino Boy</h4>
						<ul>
							<li>
								This fed the MIDI signals from the thru box into the Game Boy.
							</li>
						</ul>
					</li>
					<li><h4>Game Boy</h4>
						<ul>
							<li>
								These were heart. With MIDI fed in from a multitude of sources, the Game Boy, running mGB, was the synthesizing the signals into sound, output via a standard 3.5mm jack. 
							</li>
						</ul>
					</li>
					<li><h4>Leap Motion</h4>
						<ul>
							<li>
								The Leap Motion was used for further sound modulation. 
							</li>
						</ul>
					</li>
				</ul>
		</div>
  </section>

  <section class="section">
    <div class="container">
      <img src="~/assets/images/portfolio/blade/blade-wip.jpg">
		</div>
  </section>

  </div>    
</template>

<script>
import Youtube from '~/components/Youtube.vue'

export default {
  components:{
    Youtube
  }
}
</script>
