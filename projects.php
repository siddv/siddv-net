<?php 
	$strPage = 'home';
	if(isset($_GET['noinc'])){
		include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
	}
?>
			
			<h1 id="intro">Siddharth Vadgama<br/><span>I make things</span></h1>
			
			<section class="artile full smaller shadow" id="who-am-i"> 
				<article class="inner_artile">
					<h2>Who I am</h2>
					<p>
						So yeah, welcome to my website. I'm Sidd; a designer, developer and general all-round maker. I'm based in Plymouth, UK and am currently in my final year studying <a href="http://digitalartandtechnology.co.uk">Digital Art &amp; Techology</a>. I'm a fairly easy going person, with a relaxed attitude. When I have a project at hand, my attitude helps me tackle it with calm and colected manner. However still retaining deterimination to finish the job to the best of my abilities and within deadline - not giving up until I've seen it through. 
					</p>
				</article>
			</section>

			<section class="artile full centered" id="my-skills"> 
				<article class="inner_artile">
					<section id="skills">
						<article class="skill_panel">
							<h4>Web</h4>
							<p>
								Having several years of experience, I am confident in developing complex web applications and commerical-grade websites. I use the latest and most robust techniques, with a strong, functional PHP backend and JQuery providing incredible interactivity. I have also recently dived into NodeJS in an attempt to provide event-based functionality to my web applications.
							</p>
						</article>
						<article class="skill_panel">
							<h4>Design</h4>
							<p>
								Starting out with design at the age of 16, I have designed logos, brands and websites for clients on freelance terms. At my previous employment at <a href="http://n9design.com/" target="_blank">N9 Design</a> I provided support and created artwork, both print and online, for companies and events, usually dealing directly with the client. With the main focus being on west-end theatre productions.
							</p>
						</article>
						<article class="skill_panel">
							<h4>Hardware</h4>
							<p>
								While only having had a couple years of experience with hardware, I am extremely enthusiastic about the relatively new field of the Internet of Things. I'm confident with using Arduino and Raspberry Pis. I especially enjoy integrating them with web applications to create fully-featured experiences, an example being my <a href="http://koth.siddv.net/" target="_blank">King of the Hill</a> project. 
							</p>
						</article>
					</section>
				</article>
			</section>



			<section class="artile full" id="portfolio">
				<article class="inner_artile">
					<a id="proj_1" href="/projects/n9-design" class="project">
					

						<img class="portimg" src="/resources/images/portfolio/n9.jpg">
						<div class="proj_copy">
							<h3>N9 Design</h3>
							<p>

								Portfolio Website<br/>
								HTML / CSS<br/>
								PHP CMS<br/>
								JQuery / AJAX
							</p>
						</div>
			
					</a>
			
					<a  href="http://koth.siddv.net/" target="_blank" class="project">
						
						<img class="portimg" src="/resources/images/portfolio/koth.jpg">
						<div class="proj_copy">
							<h3>King of the Hill <img src="/resources/images/externallink.png" /></h3>
							<p>
								PHP / JQuery / AJAX<br/>
								Raspberry Pi<br/>
								Arduino + MQTT<br/>
								Twilio
							</p>
						</div>
						
					</a>


					<a id="proj_3" href="/projects/turps-banana" class="project">
						
						<img class="portimg" src="/resources/images/portfolio/turps.jpg">
						<div class="proj_copy">
							<h3>Turps Banana</h3>
							<p>
								Art Magazine<br/>
								E-commerce<br/>
								PHP 
							</p>
						</div>
						
					</a>
							

					<a id="proj_2" href="/projects/termisoc" class="project">
						
						<img class="portimg" src="/resources/images/portfolio/termisoc.jpg">
						<div class="proj_copy">
							<h3>TermiSoc</h3>
							<p>
								Marketing<br/>
								Poster &amp; leaflet design<br/>
								Illsutration
							</p>
						</div>
						
					</a>		

					<a href="#" class="project">

						<img class="portimg" src="/resources/images/portfolio/towif.jpg">
						<div class="proj_copy">
							<h3>The Only Way is Freshers</h3>
							<p>
								Poster Design<br/>
								Branding
							</p>
						</div>
					</a>	
					<a id="proj_5" href="/projects/wallpapers" class="project">

						<img class="portimg" src="/resources/images/portfolio/walls.jpg">
						<div class="proj_copy">
							<h3>Wallpapers</h3>
							<p>
								Design<br/>
								Photo manipulation
							</p>
						</div>
						
					</a>	
				
					<a href="http://siddv.net/alcalc" target="_blank" class="project external">
						
						<img class="portimg" src="/resources/images/portfolio/alcalc.jpg">
						<div class="proj_copy">
							<h3>AlCalc <img src="/resources/images/externallink.png" /></h3>
							<p>
								PHP<br/>
								JQuery / AJAX
							</p>
						</div>
							
					</a>
								

					<a href="http://siddv.net/201/" target="_blank" class="project external">

						<img class="portimg" src="/resources/images/portfolio/sanar.jpg">
						<div class="proj_copy">
							<h3>SanAR <img src="/resources/images/externallink.png" /></h3>
							<p>Conceptual Project</p>
						</div>
						
					</a>

					<a id="proj_6" href="/projects/wallpapers" class="project">
						
						<img class="portimg" src="/resources/images/portfolio/logos.png">
						<div class="proj_copy">
							<h3>Logos</h3>
							<p>Design</p>
						</div>
						
					</a>	
				</article>	
			</section>

		


<?php 
	if(!isset($_GET['noinc'])){
		include($_SERVER['DOCUMENT_ROOT'].'/resources/inc/footer.php');
	}
?>
