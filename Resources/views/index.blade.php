@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
    <ul>
    @foreach($Posts as $post)
        <li>{{$post->title}} - {{$post->Autor}}</li>
        <li>{{$post->body}}</li>
    @endforeach
    </ul>

@stop
