<template>
	<section id="container">
		<header>
			<section id="inner_header">

				<nav>
					<ul>

                        <li><a id="home" href="/">Home</a></li>
                        <li><a id="about-me" href="/about-me">About</a></li>
                        <li><a id="my-blog" href="http://blog.siddv.net">Blog</a></li>

					</ul>
				</nav>

			</section>

			<div id="spacer">
				<div id="inner_spacer">
				</div>
			</div>

        </header>

        <section id="content">

            <nuxt/>

        </section>

        <div class="clear"></div>

        <footer>
            <section id="inner_footer">
                <span>&copy; Siddharth Vadgama 2018</span>
                <article class="online-presence">
                    <div class="social-images">
                        <a href="https://github.com/siddv" target="_blank">
                            <img src="~/assets/images/social/social-1_square-github.svg" alt="Github">
                        </a>
                        <a href="https://twitter.com/siddvee" target="_blank">
                            <img src="~/assets/images/social/social-1_square-twitter.svg" alt="Twitter">
                        </a>
                        <a href="https://uk.linkedin.com/in/siddv" target="_blank">
                            <img src="~/assets/images/social/social-1_square-linkedin.svg" alt="LinkedIn">
                        </a>
                        <a href="https://youtube.com/user/siddv" target="_blank">
                            <img src="~/assets/images/social/social-1_square-youtube.svg" alt="YouTube">
                        </a>
                        <a href="http://last.fm/user/siddv91" target="_blank">
                            <img src="~/assets/images/social/social-1_square-lastfm.svg" alt="LastFM">
                        </a>
                        <a href="https://open.spotify.com/user/siddvee" target="_blank">
                            <img src="~/assets/images/social/social-1_square-spotify.svg" alt="Spotify">
                        </a>
                    </div>
                </article>
            </section>
    
        </footer>
	</section>
</template>