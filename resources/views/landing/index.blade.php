<link rel="stylesheet" href="{{asset('css/style.css')}}">

@extends('layouts.app')

@section('title', 'Sửa Khóa Tận Nơi Nha Trang 24/7 – Uy Tín, Có Mặt Trong 15 Phút')
@section('meta_description', 'Dịch vụ sửa khóa tận nơi tại Nha Trang. Sửa khóa nhà, ô tô, két sắt, xe máy nhanh chóng, uy tín, phục vụ 24/7. Gọi ngay 079 5522 450.')

@section('content')

    <!-- HERO -->
    <section id="hero" class="hero">
        <div class="container text-center">
            <h1>Sửa Khóa Tận Nơi Nha Trang 24/7</h1>
            <p>Có mặt chỉ sau <strong>15 phút</strong> – Sửa khóa nhà, ô tô, két sắt, xe máy tận nơi. Uy tín, giá hợp lý, phục vụ 24/7.</p>
            <a href="https://zalo.me/84795522450" target="_blank" class="btn-call">📞 Gọi Ngay: 079 5522 450</a>
        </div>
    </section>

    <!-- LÝ DO CHỌN -->
    <section id="features" class="features">
        <div class="container">
            <h2>Vì Sao Chọn Chúng Tôi</h2>
            <div class="grid-6">
                <div><span>🚀</span><p>Có mặt trong 15 phút</p></div>
                <div><span>🕐</span><p>Phục vụ 24/7</p></div>
                <div><span>🧰</span><p>Thợ chuyên nghiệp</p></div>
                <div><span>💸</span><p>Báo giá trước</p></div>
                <div><span>🧾</span><p>Có bảo hành</p></div>
                <div><span>❤️</span><p>Khách hàng hài lòng</p></div>
            </div>
        </div>
    </section>

    <!-- DỊCH VỤ -->
    <section id="services" class="services">
        <div class="container">
            <h2>Dịch Vụ Nổi Bật</h2>
            <div class="grid-4">
                @foreach($services as $service)
                    <div class="service-item">
                        @if($service->thumbnail)
                            <img src="{{ asset('storage/'.$service->thumbnail) }}" alt="{{ $service->title }}">
                        @endif
                        <h3>{{ $service->title }}</h3>
                        @if($service->description)
                            <p>{{ Str::limit($service->description, 60) }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- QUY TRÌNH -->
    <section id="process" class="process">
        <div class="container">
            <h2>Quy Trình Làm Việc</h2>
            <div class="grid-4">
                <div><span>📞</span><h4>Bước 1</h4><p>Gọi điện hoặc gửi yêu cầu</p></div>
                <div><span>🚗</span><h4>Bước 2</h4><p>Thợ đến tận nơi sau 15 phút</p></div>
                <div><span>🧾</span><h4>Bước 3</h4><p>Báo giá – sửa chữa</p></div>
                <div><span>✅</span><h4>Bước 4</h4><p>Hoàn thành & thanh toán</p></div>
            </div>
        </div>
    </section>

    <!-- ĐÁNH GIÁ -->
{{--    <section id="testimonials" class="testimonials">--}}
{{--        <div class="container">--}}
{{--            <h2>Phản Hồi Thực Tế</h2>--}}
{{--            <div--}}
{{--                 class="elfsight-app-80d781fd-44ab-42d1-8c08-ad9cd72cc197" data-elfsight-app-lazy></div>--}}
{{--            </div>--}}
{{--    </section>--}}

    <!-- LIÊN HỆ -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Liên Hệ Ngay</h2>
            <div class="contact-grid">
                <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                    @csrf
                    <input name="name" placeholder="Tên" required>
                    <input name="email" placeholder="Email">
                    <input name="phone" placeholder="Số điện thoại">
                    <textarea name="message" placeholder="Tin nhắn" required></textarea>
                    <button type="submit" class="btn-submit">Gửi Liên Hệ</button>
                </form>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.1741235689724!2d109.1812113!3d12.2364867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705d85f7a24ae7%3A0xe55f0d602bef548c!2zNDE1IEzDqiBI4buTbmcgUGhvbmcsIFTDom4gVGnhur9uLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMA!5e0!3m2!1svi!2s!4v1762997282777!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
        </div>
    </section>
@endsection

<script src="https://elfsightcdn.com/platform.js" async></script>
