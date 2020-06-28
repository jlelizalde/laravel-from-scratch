<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : EarthyBlue 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140215

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="/">EarthyBlue</a></h1>
				<div id="menu">
					<ul>
						<li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title="">Home</a></li>
						<li class="{{ Request::path() === 'articles' ? 'active' : ''}}"><a href="/articles" accesskey="2" title="">Articles</a></li>
						<li class="{{ Request::path() === 'about' ? 'active' : ''}}"><a href="#" accesskey="3" title="">About Us</a></li>
						<li class="{{ Request::path() === 'contact' ? 'active' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div

	@yield('content')

<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
		{{-- <ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul> --}}
</div>
</body>
</html>
