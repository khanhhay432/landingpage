<link rel="stylesheet" href="{{asset('css/style.css')}}"

@extends('layouts.app')

@section('content')
<section class="hero py-10 text-center">
    <h1 class="text-4xl font-bold">Dịch vụ sửa khoá tận nơi</h1>
    <p class="mt-2">Nhanh chóng - Uy tín - Giá tốt</p>
</section>

<section id="services" class="py-10 bg-gray-110">
    <h2 class="text-2xl mb-5 text-center">Dịch vụ nổi bật</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($services as $service)
            <div class="service-item relative flex flex-col items-center justify-center text-center border p-4 rounded shadow overflow-hidden">
                @if($service->thumbnail)
                    <img src="{{ asset('storage/'.$service->thumbnail) }}" alt="{{ $service->title }}" class="service-icon">
                @endif
                <h3 class="service-title">{{ $service->title }}</h3>
            </div>
        @endforeach
    </div>
</section>

<section id="contact" class="py-10">
    <h2 class="text-3xl mb-4">Liên hệ</h2>
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Form liên hệ -->
        <form action="{{ route('contact.store') }}" method="post" class="md:w-1/2">
            @csrf
            <div class="mb-2"><input name="name" placeholder="Tên" class="border p-2 w-full" required></div>
            <div class="mb-2"><input name="email" placeholder="Email" class="border p-2 w-full"></div>
            <div class="mb-2"><input name="phone" placeholder="Số điện thoại" class="border p-2 w-full"></div>
            <div class="mb-2"><textarea name="message" placeholder="Tin nhắn" class="border p-2 w-full" required></textarea></div>
            <button class="bg-blue-600 text-white px-4 py-2">Gửi liên hệ</button>
        </form>

        <!-- Bản đồ -->
        <div class="md:w-1/2 h-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.1741235689724!2d109.1812113!3d12.2364867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705d85f7a24ae7%3A0xe55f0d602bef548c!2zNDE1IEzDqiBI4buTbmcgUGhvbmcsIFTDom4gVGnhur9uLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMA!5e0!3m2!1svi!2s!4v1762763049429!5m2!1svi!2s"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>

        </div>
    </div>
</section>

@endsection
