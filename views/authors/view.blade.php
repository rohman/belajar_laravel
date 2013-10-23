@extends('layouts.default')

@section('content')
	<h1>{{ e($author->name) }}</h1>
	<p>{{ e($author->bio) }}</p>
	<small>{{$author->updated_at}}</small>
	<span>{{HTML::linkRoute('authors','Authors')}} | {{ HTML::linkRoute('editAuthor', 'Edit', array($author->id))}} 
		{{ Form::open(array('url' => 'authors/delete', 'method' => 'POST' ,'style' => 'display:inline')) }}
			{{Form::hidden('id', $author->id)}}
			{{Form::submit('Delete')}}
		{{ Form::close() }}
	</span>
@endsection

