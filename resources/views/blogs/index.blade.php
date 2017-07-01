
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('blogs') }}">Blog</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('blogs') }}">View All blogs</a></li>
        <li><a href="{{ URL::to('blogs/create') }}">Create a blog</a>
    </ul>
</nav>

<h1>All the blogs</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->content }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the blog (uses the destroy method DESTROY /blogs/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the blog (uses the show method found at GET /blogs/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('blogs/' . $value->id) }}">Show this blog</a>

                <!-- edit this blog (uses the edit method found at GET /blogs/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('blogs/' . $value->id . '/edit') }}">Edit this blog</a>
                <form action="{{ route('blogs.destroy', $value->id) }}" method="POST" class="form-horizontal">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                <input type="submit" class="btn btn-danger" value="Delete" />
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>