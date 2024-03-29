<?php
	$root = "https://edwwward.github.io/edwwward.com/";
?>

<!Doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=5" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="author" content="Edwwward">

		<title><?php echo "$title";?> // edwwward</title>
		<meta name="description" content="<?php echo "$description";?>" />
		<meta name="referrer" content="no-referrer-when-downgrade">
		<meta name="robots" content="all">
		<meta property="og:image:height" content="800">
		<meta property="og:image:width" content="800">
		<meta property="og:title" content="<?php echo "$title";?>">
		<meta property="og:description" content="<?php echo "$description";?>">
		<meta property="og:url" content="https://<?php echo "$url" ;?>">
		<meta property="og:image" content="<?php echo "$root" ;?>/img/logo-font.png">
		<link rel="shortcut icon" href="<?php echo "$root" ;?>/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo "$root" ;?>/img/favicon.ico" type="image/x-icon">

		<link rel="canonical" href="<?php echo "$root" ;?>/<?php echo "$canonical";?>" />
		<link href="<?php echo "$root" ;?>" rel="home">

		<style>
			html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;text-decoration:none;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}a{color:inherit;}a:hover{color:inherit;}img{max-width:100%;}

			/* TYPOGRAPHY */
			@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600');

			h1, h2, h3, h4 {text-align: left; font-family: 'Montserrat', sans-serif;}
			h1 {font-size: 18px; color: #33ffcc; margin-bottom: 40px;}
			h2 {font-size: 16px; margin-bottom: 16px;}
			h3 {font-size: 14px; color: #fff; margin-bottom: 14px;}

			p {
				width: 100%;
				float: left;
				margin: 0px;
				padding: 0px;
				line-height: 175%;
			}

			p a {text-decoration: underline;}

			ul {
				width: 100%;
				margin: 0px;
				padding: 0px;
			}

			small {font-size: 12px;}
			strong {font-weight: 600;}
			a {cursor: pointer;}

			hr {
				width: 100%;
				height: 1px;
				background: #5F6778;
				float: left;
				margin: 25px 0px;
				border: 0;
				clear: both;
			}

			/* LAYOUT */
			body {
				font-family: 'Montserrat', sans-serif;
				color: #fff;
				font-size: 18px;
				font-weight: 400;
				line-height: 1.6;
				margin: 0% 0%;
				padding: 0%;
				background-color: #22252b;
				overflow-x: hidden;
			}

			nav {
				width: 80%;
				height: 48px;
				float: left;
				margin: 40px 10% 0px;
				padding: 0px;
			}

			header {
				width: 80%;
				float: left;
				padding: 0px 10% 0% 10%;
				margin: 0px;
				position: relative;
				overflow: hidden;
			}

			section {
				width: 80%;
				float: left;
				padding: 10%;
				margin: 0px;
				position: relative;
			}

			button {
				width: auto;
				transition:ease .3s all;
				background: transparent;
				color: #33ffcc;
				font-family: 'Montserrat', sans-serif;
				font-size: 12px;
				font-weight: 600;
				text-align: center;
				text-transform: uppercase;
				letter-spacing: .6px;
				float: left;
				padding: 10px 16px;
				margin: 40px 0px 0px;
				border-radius: 4px;
				cursor: pointer;
				border: solid 1px #33ffcc;
			}

			button:hover {
				background: #27241D;
				color: #fff;
				transition: ease .3s all;
			}

			footer {
				width: 80%;
				float: left;
				padding: 20px 0px;
				margin: 10%;
				font-size: 12px;
				color: #5F6778;
				text-align: left;
				border-top: solid 1px #5F6778;
			}

			.logo {
				width: 48px;
				height: 48px;
				background: url(http://localhost/git/edwwward.com/img/logo-color.png) no-repeat;
				background-size: contain;
				background-position: center;
				float: left;
				margin: 0px;
				padding: 0px;
			}

			.logo-dark {
				width: 48px;
				height: 48px;
				background: url(http://localhost/git/edwwward.com/img/logo-black.png) no-repeat;
				background-size: contain;
				background-position: center;
				float: left;
				margin: 0px;
				padding: 0px;
			}

			.menu {
				width: 48px;
				height: 48px;
				background: url(http://localhost/git/edwwward.com/img/menu.png) no-repeat;
				background-size: contain;
				background-position: center;
				float: right;
				margin: 0px;
				padding: 0px;
			}

			.close {
				width: 48px;
				height: 48px;
				background: url(http://localhost/git/edwwward.com/img/close.png) no-repeat;
				background-size: contain;
				background-position: center;
				float: right;
				margin: 0px;
				padding: 0px;
			}

			.project {
				width: 100%;
				float: left;
				margin: 25px 0px 0px;
				padding: 25px 0px;
				border-top: solid 1px #7a808c;
			}

			.project p { font-size: 14px;}

			/* Navigation */
			.overlay {
				height: 100%;
				width: 100%;
				margin: 0px;
				padding: 0%;
				position: fixed;
				z-index: 9;
				top: 0;
				right: 0;
				background: #33ffcc;
				overflow-x: hidden;
				transition: 0.5s;
				display: none;
			}

			.overlay-content {
				width: 80%;
				text-align: left;
				float: left;
				margin: 0px;
				padding: 10%;
			}

			.overlay-content a {
				padding: 0px 0px 18px;
				font-size: 18px;
				color: #22252b;
				display: block;
				transition: 0.3s;
			}

			.overlay a:hover, .overlay a:focus {
				text-decoration: underline;
			}

			.center {text-align: center;}
			.left {float: left; width: auto; margin: 20px 0px 0px; padding: 20px 50px;}

			.g-recaptcha {width: 100%; float: left; margin-top: 20px;}

			/*COLORS */
			.alt {background: #F7F7F7;}
			.dark {background: #27241D; color: #fff;}

			/* GRID */
			.col1, .col2, .col3, .col4, .col5, .col6, .col7, .col8, .col9, .col10 {
				width: 80%;
				float: left;
				padding: 80px 10%;
			}

			.col50, .col100 {
				width: 100%;
				float: left;
				padding: 0px 0%;
			}


			@media only screen and (min-width: 768px) {

			}

		</style>
	</head>

	<body>

		<!-- NAV  -->
		<nav>
		  <a href="<?php echo "$root" ;?>	" alt="Logo Image Link to Home" aria-label="Link to Home Page">
		    <div class="logo"></div>
		  </a>
		  <div class="menu" onclick="openNav()"></div>
		</nav>

		<!-- NAV MENU  -->
		<div id="navigation" class="overlay">
			<nav>
			  <a href="<?php echo "$root" ;?>	" alt="Logo Image Link to Home" aria-label="Link to Home Page">
			    <div class="logo-dark"></div>
			  </a>
			  <a href="javascript:void(0)"aria-label="Link to Close Navigation Menu" class="closebtn" onclick="closeNav()">
					<div class="close"></div>
				</a>
			</nav>
		  <div class="overlay-content">
		    <a href="<?php echo "$root" ;?>/projects" aria-label="Link to Projects Page">Projects</a>
				<a href="<?php echo "$root" ;?>/projects" aria-label="Link to Projects Page">Contact</a>
				<a href="<?php echo "$root" ;?>/projects" aria-label="Link to Projects Page">Instagram</a>
				<a href="<?php echo "$root" ;?>/projects" aria-label="Link to Projects Page">Github</a>
		  </div>
		</div>
		<script>
		  function openNav() {document.getElementById("navigation").style.display = "block";}
		  function closeNav() {document.getElementById("navigation").style.display = "none";}
		</script>
