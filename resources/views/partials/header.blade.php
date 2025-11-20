<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<header class="header border-bottom shadow-sm">

    <!-- Top bar -->
    <div class="top-bar bg-light py-2">
        <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 text-center">
            <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-3 mb-0 text-md-center">
                <li>
                    <i class="bi bi-telephone-fill text-danger me-2"></i>
                    <a href="https://zalo.me/84795522450" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-danger fw-semibold"> 079 5522 450 </a>
                </li>
                <li class="d-none d-md-block text-secondary">|</li>
                <li>
                    <i class="bi bi-envelope-fill text-danger me-2"></i>
                    <a href="mailto:hoasuakhoa415lhp@gmail.com" class="text-decoration-none text-danger fw-semibold"> hoasuakhoa415lhp@gmail.com </a>
                </li> <li class="d-none d-md-block text-secondary">|</li>
                <li>
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                    <a href="https://www.google.com/maps/place/415+L%C3%AA+H%E1%BB%93ng+Phong,+Ph%C6%B0%E1%BB%9Bc+T%C3%A2n,+Nha+Trang,+Kh%C3%A1nh+H%C3%B2a" target="_blank" class="text-decoration-none text-dark fw-semibold"> Địa chỉ:
                        <span class="text-danger">415 Lê Hồng Phong, Phước Tân, Nha Trang</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm py-2 custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img src="{{ asset('storage/uploads/logo.png') }}" alt="Logo" style="height: 48px; background: white; max-height: inherit;">
                <span class="fw-bold text-white">Sửa Khoá Tận Nơi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="nav-effect">
                    <li style="--i:#a955ff;--j:#ea51ff">
                        <a href="#hero">
                            <i class="fas fa-home"></i>
                            <span class="title">Trang chủ</span>
                        </a>
                    </li>
                    <li style="--i:#56CCF2;--j:#2F80ED">
                        <a href="#services">
                            <i class="fas fa-concierge-bell"></i>
                            <span class="title">Dịch vụ</span>
                        </a>
                    </li>
                    <li style="--i:#FF9966;--j:#FF5E62">
                        <a href="#process">
                            <i class="fas fa-cogs"></i>
                            <span class="title">Quy Trình</span>
                        </a>
                    </li>
{{--                    <li style="--i:#80FF72;--j:#7EE8FA">--}}
{{--                        <a href="#testimonials">--}}
{{--                            <i class="fas fa-comments"></i>--}}
{{--                            <span class="title">Đánh Giá</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li style="--i:#ffa9c6;--j:#f434e2">
                        <a href="#contact">
                            <i class="fas fa-phone"></i>
                            <span class="title">Liên hệ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
