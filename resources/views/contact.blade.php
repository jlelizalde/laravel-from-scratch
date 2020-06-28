@extends('layouts.layout')

@section('content')
    
    <div class="wrapper">
        <div id="page" class="container">
            
            <div class="title">
                <h2>Subscribe to our newsletter</h2>
            </div>
            
            <form method="POST" action="/contact">
                @csrf

                <div class="field">
                    <label class="label" for="title">E-Mail Address</label>
                    
                    <div class="control">
                        <input type="text" class="input @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('title') }}">
                        @error('email')
                            <p class="is-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                @if (session('message'))
                    <p style="color: green">{{ session('message')}}</p>
                @endif

                <div class="field isgrouped">
                    <div class="control">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection