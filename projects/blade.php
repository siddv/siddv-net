<?php 
	$strPage = 'project';
	$title = 'The Blade';
	
	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>
<h1 id="intro">The Blade<br/> <span>Gameboy-driven chiptune keytar</span></h1>

	<article class="artile full"> 
		<div class="outer-yt-wrap">
			<div class="yt-wrap">
				<iframe src="//www.youtube.com/embed/E1az4R__fWQ" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</article>

	<article class="artile full smaller"> 
		<article class="inner_artile">
			<h3>What is The Blade?</a></h3>
			<p>
				The Blade is a musical instrument made up of the following: 
				<ul>
					<li>Two Game Boys
						<ul>
							<li>
								These were acting as the synthesyzers. 
							</li>
						</ul>
					</li>
					<li>Two Guitar Hero necks
						<ul>
							<li>
								The necks, hacked off a couple of old Guitar Hero controllers, were totally rewired to output the button presses to jumper cables.
							</li>
						</ul>
					</li>
					<li>Arduino Mega
						<ul>
							<li>
								All the wiring from the Guitar Hero necks fed into the Mega, which then registered the button presses and output appropriate MIDI signals over USB serial. 
							</li>
						</ul>
					</li>
				</ul>

			</p>
			<p>
				
			</p>

		</article>
	</article>

	<article class="artile full smaller"> 
		<article class="inner_artile">
			<h3>What we did different</a></h3>
			<p>
				We really focused on establishing a presedence. We wanted to make sure that attendees knew what to expect. So we themed and styled our website to give off that casual, jokey vibe through self-parody. In all our emails we made sure to contiune the theme by usung satarical langualge.  
			</p>
			<p>
				
			</p>

		</article>
	</article>


<?php 

	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/footer.php');
	
?>
