@extends('layouts.default')

@section('content')
	<h1>New Author</h1>
	
	@if($errors->has())
		<ul>
			{{ $errors->first('name', '<li>:message</li>') }}
			{{ $errors->first('bio', '<li>:message</li>') }}
		</ul>
	@endif

	{{Form::open(array('url'=>'authors/create', 'method'=>'POST'))}}
	<p>
		{{Form::label('name','Name : ')}} <br />
		{{Form::text('name')}}
	</p>
	<p>
		{{Form::label('bio','Biography : ')}} <br />
		{{Form::textarea('bio')}}
	</p>
	<p>{{Form::submit('Add Author')}}</p>
	{{Form::close()}}
@endsection
