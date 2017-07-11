@extends('layouts.navbar')
@section('content')

<h1>Showing {{ $blog->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $blog->title }}</h2>
        <p>
            <strong>Title:</strong> {{ $blog->title }}<br>
            <strong>Content:</strong> {{ $blog->content }}

        </p>

    </div>

@endsection