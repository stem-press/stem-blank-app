@extends('layouts/page')

@section('main')
    @foreach($posts as $post)
        <article>
            <h2><a href="{!! $post->permalink() !!}">{{ $post->title() }}</a></h2>
            <date>{{ $post->date()->format('M d, Y') }}</date>
            <p>{!! $post->excerpt() !!}</p>
        </article>
    @endforeach
@endsection
