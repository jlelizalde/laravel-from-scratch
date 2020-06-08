@extends('layouts.layout')

@section('content')

<div class="wrapper">
	<div id="three-column" class="container">
        <div><span class="arrow-down"></span></div>

        @foreach ($articles as $article)

        <div id="tbox1">
			<div class="title">
            <h2>{{$article->title}}</h2>
			</div>
			<p>{{$article->excerpt}}</p>
            <a href="{{ route('articles.show', $article) }}" class="button">Learn More</a> 
        </div>
            
        @endforeach
	</div>
</div> 

@endsection