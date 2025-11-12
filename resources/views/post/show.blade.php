@extends('layouts.app')
@section('content')
<article>
    <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
    <div class="mt-4">{!! $post->content !!}</div>
</article>
@endsection
