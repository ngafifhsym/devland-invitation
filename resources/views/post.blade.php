
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/blog"> back to posts</a>
@endsection
