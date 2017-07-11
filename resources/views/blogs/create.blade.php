
@extends('layouts.navbar')
@section('content')
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
@endsection