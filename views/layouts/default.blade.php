<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
		<title>{{$title}}</title>
  </head>
  <body>
		@if(Session::has('message'))
			<p style="color:green">{{Session::get('message')}}</p>
		@endif
		@yield('content')
  </body>
</html>
