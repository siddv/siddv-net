<!doctype html>

<html>
<head>
	<meta charset="utf-8">

	<title>Siddv.net | <?php echo $title ?></title>

	<meta name="author" content="Siddharth Vadgama">
	<meta name="description" content="The personal website of Siddharth Vadgama; A designer, developer and all-round maker based in London, UK." />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/resources/css/normalize.css"/>
	<link rel="stylesheet" href="/resources/css/styles.css"/>
	<link rel="icon" type="image/png" href="/resources/images/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<section id="container">
		<header>
			<section id="inner_header">		
				<nav>
					<ul>
						<li><a id="home" href="/" <?php echo $strPage == "home" ? 'class="selected"' : ''; ?>>Home</a></li>
						<li><a id="about-me" href="/about-me" <?php echo $strPage == "about" ? 'class="selected"' : ''; ?>>About</a></li>
						<li><a id="my-blog" href="http://blog.siddv.net">Blog <!--<img src="/resources/images/externallink.png" />--></a></li>
					</ul>	
				</nav> 
			
				<article id="title">
					Siddv.net
				</article>
			</section>
			<div id="spacer">
				<div id="inner_spacer">
				</div>
			</div>

		</header>
			<?php
				if($strPage == 'project'){
					?>
						<section id="content" class="project-wrap">
					<?php
				}else{
					?>
						<section id="content">
					<?php
				}
			?>
