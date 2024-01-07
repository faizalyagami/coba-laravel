
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["blog"] }}</p>
        {{-- <h2>Judul Buku</h2>
        <h5>Faisal</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, odit cupiditate esse enim accusantium quam optio nihil quod pariatur tempora doloribus dignissimos quia assumenda. Assumenda excepturi corporis dicta aut at.</p> --}}
    </article>
    <a href="/blog">Back to post</a>
@endsection
