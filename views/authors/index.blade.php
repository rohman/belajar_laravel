@extends('layouts.default')

@section('content')
	<h1>Authors Home Page</h1>
	<ul>
		@foreach($authors as $author)
		<li>{{ HTML::link('author/'. $author->id ,$author->name, array('class' => 'link') )}}</li>
		@endforeach
	<ul>
	<p>	{{HTML::link('authors/new', 'New Author')}}</p>
@endsection

