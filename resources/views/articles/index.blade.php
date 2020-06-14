@extends('layouts.layout')

@section('content')

<div class="wrapper">
	<div id="three-column" class="container">
        <div><span class="arrow-down"></span></div>

        @forelse ($articles as $article)

            <div id="tbox1">
                <div class="title">
                <h2>{{$article->title}}</h2>
                </div>
                <p>{{$article->excerpt}}</p>
                <a href="{{ $article->path() }}" class="button">Learn More</a> 
            </div>

        @empty
            <p>No relevant articles yet.</p>
        @endforelse
	</div>
</div> 

@endsection