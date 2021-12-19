@extends('layouts.main')

@section('container')
<h1>Halaman Posts</h1>

@foreach ($posts as $post)

<article class="mb-5 border-bottom pb-3">
    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->tittle }}</a></h2>
    <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | Category
        : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
</article>

@endforeach
@endsection