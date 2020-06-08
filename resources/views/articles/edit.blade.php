@extends('layouts.layout')

@section('content')

<div class="wrapper">
	<div id="page" class="container">

		<div class="title">
			<h2>Update Article</h2>
		</div>
		
		<form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')
			
			<div class="field">
				<label class="label" for="title">Title</label>

				<div class="control">
					<input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
				</div>
			</div>

			<div class="field">
				<label for="excerpt" class="label">Excerpt</label>
			</div>

			<div class="control">
				<textarea class="textarea" name="excerpt" id="excertp">
                    {{ $article->excerpt }}
                </textarea>
			</div>

			<div class="field">
				<label class="label" for="body">Body</label>

				<div class="control">
					<textarea class="textarea" name="body" id="body">
                        {{ $article->body }}
                    </textarea>
				</div>
			</div>

			<div class="field isgrouped">
				<div class="control">
					<button class="button" type="submit">Submit</button>
				</div>
			</div>

		</form>
            
	</div>
</div> 

@endsection