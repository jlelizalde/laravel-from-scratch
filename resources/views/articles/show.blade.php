@extends('layouts.layout')

@section('content')

<div class="wrapper">
	<div id="three-column" class="container">

        <div class="title">
            <h2>{{$article->title}}</h2>
        </div>
        
        <p>{{$article->body}}</p>

        <p>
            @foreach ($article->tags as $tag)
                <a href="{{ route('articles.index', ['tag' => $tag->name])}}">{{ $tag->name }}</a>            
            @endforeach 
        </p>
            
	</div>
</div> 

@endsection