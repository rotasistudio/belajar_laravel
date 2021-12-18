@extends('layouts.main')

@section('container')
<h1>Halaman Category {{ $category }}</h1>

@foreach ($posts as $post)

<article class="mb-5">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a></h2>
    <p>{{ $post->excerpt }}</p>
</article>

@endforeach
@endsection