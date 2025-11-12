@extends('layouts.app')
@section('content')
<article>
    <h1 class="text-3xl font-bold">{{ $service->title }}</h1>
    <p class="text-sm text-gray-600">{{ $service->location }} - {{ $service->phone_number }}</p>
    <div class="mt-4">{!! $service->content !!}</div>
    <h3 class="mt-6">Hình ảnh</h3>
    <div class="grid grid-cols-3 gap-2 mt-2">
        @foreach($service->images as $img)
            <img src="{{ asset('storage/'.$img->image_url) }}" alt="{{ $img->caption }}">
        @endforeach
    </div>
    <h3 class="mt-6">Đánh giá</h3>
    @foreach($service->reviews as $rev)
        <div class="border p-2 mb-2">{{ $rev->name }} — {{ $rev->rating }}/5<br>{{ $rev->comment }}</div>
    @endforeach
</article>
@endsection
