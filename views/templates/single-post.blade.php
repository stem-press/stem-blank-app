@extends('layouts/page')

@section('main')
    <article>
        <h1>{{ $post->title() }}</h1>
        <date>{{ $post->date()->format('M d, Y') }}</date>
        {!! $post->content() !!}
    </article>
@endsection
