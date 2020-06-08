@extends('layouts.layout')

@section('content')

<div class="wrapper">
	<div id="three-column" class="container">

        <div class="title">
            <h2>{{$article->title}}</h2>
        </div>
        
        <p>{{$article->body}}</p>
            
	</div>
</div> 

@endsection