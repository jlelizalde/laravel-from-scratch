@extends('layouts.layout')

@section('content')

<div id="page-wrapper">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>This is, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
	</div>
</div>
<div class="wrapper">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		
		@foreach ($articles as $article)
			<div id="tbox1">
				<div class="title">
					<h2>{{ $article->title }}</h2>
				</div>
				<p>{{ $article->excerpt }}</p>
				<a href="/articles/{{ $article->id }}" class="button">Learn More</a> 
			</div>
		@endforeach
	</div>
	
	{{-- <div id="portfolio" class="container">
		<div class="column1">
			<div class="box"> <a href="#"><img src="images/scr01.jpg" alt="" class="image image-full" /></a>
				<h3>Vestibulum venenatis</h3>
				<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column2">
			<div class="box"> <a href="#"><img src="images/scr02.jpg" alt="" class="image image-full" /></a>
				<h3>Praesent scelerisque</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column3">
			<div class="box"> <a href="#"><img src="images/scr03.jpg" alt="" class="image image-full" /></a>
				<h3>Donec dictum metus</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column4">
			<div class="box"> <a href="#"><img src="images/scr04.jpg" alt="" class="image image-full" /></a>
				<h3>Mauris vulputate dolor</h3>
				<p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
	</div> --}}
</div> 

@endsection