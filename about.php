<?php
	$strPage = 'about';
	$title = 'About me';
	
	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>

<h1 id="intro">About me<br/><span>Who I am</span></h1>
			
	<section class="artile full about-panel"> 
		<article class="inner_artile">
			<img src="/resources/images/sidd.jpg" id="sidd-photo"/>
			<h3>Bio</h3>
			<!--<p>
				If you're not really interested in reading this wall of text about me, feel free to scroll down to the next section, it's probably more interesting. If you're still content with reading this and I haven't put you off already, then here we go *ahem*:
			</p>-->
			<p>
				Hello. My name is Siddharth Vadgama, but I generally go by Sidd. I design things, I code things and I also make physical things with electronics and hardware and whatnot. I get a little bit excited when I do projects that combine all three.
			</p>
			<!--<p>
				In my youth, and much to my parents' dismay, I constantly tinkered with anything in the house which was even vaguely mechanical or electronic - finding it interesting to explore the inner-workings and understand how these devices operated. Ocasionally even modifying these to work differently.
			</p>-->
			<!--<p> 
				Not knowing pain or anguish, I blissfully went to university at the ripe age of 18 to study Mechanical Engineering. However, though I was interested in the theory, I found the course uncreative and mildly soul-destroying. That's when I switched to BSc <a href="http://digitalartandtechnology.co.uk" target="_blank">Digital Art &amp; Technology</a>, which I enjoyed greatly and have now graduated in with a first-class honours.
			</p>-->
			<p> 
				I like to think of myself as a pretty competent creator. I love problem-solving, and building systems that really offer a fun and engaging experience to the user. I use OS X, Windows and Linux, with my preference for any given project being determined by what will help me get the task at hand done in the best, most efficient way possible (Hint: It's usually OS X).
			</p>
			<div class="clear"></div>
			<a href="/cv" id="cv-link" target="_blank">
				Click here to take a look at my CV.
			</a>
		</article>
	</section>

	<section class="artile full shadow medium" id="contact-me">
		<article class="inner_artile">
			<h3>Contact me</h3>
				<a href="mailto:me@siddv.net" target="_blank" id="email-link">
					me@siddv.net
				</a>
				<p>You can also catch me on <a href="skype:siddvad?call">Skype (siddvad)</a> ocasionally.</p>
		</article>
	</section>

	<section class="artile full medium"> 
		<article class="inner_artile">
			<h3>Places you can find me on the internet</h3>
			<p>I am a computer person, so I have many online presences. Some I make public, some I do not. Firstly I have a <a href="https://twitter.com/siddvee" class="ext-link" target="_blank" id="twitter-link">Twitter</a> which is probably where I'm most active, and post about things that are related to technology and also things that are not related to technology. I also have a <a href="https://linkedin.com/in/siddv" class="ext-link" target="_blank" id="linkedin-link">LinkedIn</a>. I occasionally post videos relating to projects on my <a href="https://youtube.com/user/siddv" class="ext-link" target="_blank" id="youtube-link">YouTube</a> account.<!-- I sometimes post on Reddit too, if you're into that kinda thing - I posted a picture where <a href="http://www.reddit.com/r/techsupportmacgyver/comments/1to2p1/my_laptop_charger_kept_falling_out_presenting/" target="_blank">I stuck some velcro onto my laptop and charger</a> that a few people seemed to like.--></p>
		</article>
	</section>

<section id="cv-skills" class="artile full medium"> 
				<article class="inner_artile">
					<h3>Skills</h3>
			
					<div id="webskills" class="half firstof">

					<h4>Web Development</h4>
					<div>

							<h5>Things I'm good at:</h5>
								<ul>
									<li>HTML/5</li>
									<li>CSS/3</li>
									<li>JavaScript/JQuery</li>
									<li>MQTT</li>
									<li>PHP</li>
									<li>MySQL</li>
								</ul>
							
						
					</div>
					<div>

							<h5>Things I'm learning:</h5>
								<ul>
									<li>Node.js</li>
									<li>MVC with Sails,js</li>
									<li>AngularJS</li>
									<li>Ionic</li>
									<li>Phonegap</li>
								</ul>
							
						
					</div>
					<!--<div class="third lastof">

							<h5>Things I'm willing to learn:</h5>
								<ul>
									<li>Your technology here</li>
									<p>I have a keen interest in learning new things, and can get comfortable with new technologies quickly.
									</p>
								</ul>
							
						
					</div>-->
					</div>
					
					<div class="half lastof">
						<h4>Physical Computing</h4>
						<p>I'm constantly looking for ways to create fun projects with hardware that interact and communicate with my web applications.</p>
						<ul>
							<li>Intel Edison + Galileo</li>
							<li>Raspberry Pi</li>
							<li>Extensive Arduino</li>
						</ul>
					
						<h4>Design</h4>
						<p>I design things anywhere from flyers and posters, to bespoke web solutions. I have experience in both digital and print design.</p>
						<ul>
							<li>Sketch 3</li>
							<li>Photoshop</li>
							<li>InDesign</li>
							<li>Premiere Pro</li>


						</ul>
					</div>
					<div class="clear"></div>

				</article>
			</section>

	<!--<section class="artile full medium"> 
		<article class="inner_artile">
			<h3>Technical Skills</h3>
			<h4>Design</h4>
			<p>I design things anywhere from flyers and posters to complete branding solutions and bespoke website design. I have experience in both digital and print design.</p>
			<ul>
				<li>Photoshop</li>
				<li>InDesign</li>
				<li>Premiere Pro</li>
			</ul>

			<h4>Web Development</h4>
			<p>I started developing when I was around 18. I'm competent in semantically and logically written HTML, as well as beating CSS until it submits to my will. I have also build my own object-oriented PHP framework/CMS from the ground up.</p>
			<ul>
				<li>Things that I'm pretty good at:
					<ul>
						<li>HTML/5</li>
						<li>CSS/3</li>
						<li>JavsScript/JQuery</li>
						<li>MQTT</li>
						<li>AJAX</li>
						<li>Object oriented PHP</li>
						<li>MySQL</li>
					</ul>
				</li>
			</ul>
			<ul>
				<li>Things that I'm not as good at, but am learning:
					<ul>
						<li>Node.js</li>
						<li>Python/Django with PostgreSQL</li>
					</ul>
				</li>
			</ul>
			<ul>
				<li>Things that I'm willing to learn:
					<ul>
						<li>&lt;Your technology here&gt;</li>
						<p>I have a pretty keen interest in learning new things, and like to think that I pick up and get comfortable with new technologies relative quickly.
						</p>
						<p>"Input! More Input!" - 'Johnny' Number 5</p>
					</ul>
				</li>
			</ul>
			<h4>Physical Computing</h4>
			<p>Having a background in web, and ever since discovering the wonderful world of Raspberry Pi and Arduino, I've been constantly looking for ways to create fun projects with hardware that interact and communicate with web applications.</p>
			<ul>
				<li>Raspberry Pi</li>
				<li>Arduino + shields
					<ul>
						<li>Ethernet/Wifi</li>
						<li>MQTT</li>
						<li>433MHz Radio Frequency</li>
					</ul>
				</li>
			</ul>
		</article>
	</section>-->

<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/footer.php');
?>