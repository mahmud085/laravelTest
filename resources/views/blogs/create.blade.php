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
        <li><a href="{{ URL::to('blogs/create') }}">Create a Blog</a>
    </ul>
</nav>
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
<div class="panel panel-default">
            <div class="panel-heading">
                Add a New Blog <a href="{{ route('blogs.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('blogs.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add Blog" />
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>
</body>
</html>