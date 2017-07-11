<!DOCTYPE html>
<html>
	<head>
	    <title>Blogs</title>
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
			    <div class="navbar-header">
			        <a class="navbar-brand" href="{{ URL::to('blogs') }}">Blog</a>
			    </div>
			    <ul class="nav navbar-nav">
			        <li><a href="{{ URL::to('blogs') }}">All blogs</a></li>
			        <li><a href="{{ URL::to('blogs/create') }}">Create a Blog</a>
			    </ul>
			</nav>
			@yield('content')
		</div>
	</body>
</html>