@extends('layouts.default')

@section('content')
	<h1>{{$author->name}}</h1>
	<p>{{$author->bio}}</p>
	<small>{{$author->updated_at}}</small>
	<p>{{HTML::linkRoute('authors','Authors')}} | {{ HTML::linkRoute('editAuthor', 'Edit', array($author->id))}} </p>
@endsection

