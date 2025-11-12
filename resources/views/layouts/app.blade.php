<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Sửa khoá tận nơi')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased">

@include('partials.header')

<!-- Notification toast -->
@if(session('success'))
    <div id="notification" class="notification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="notification__icon"></div>
        <div class="notification__body">
            <h2 class="notification__header">Success</h2>
            <p class="notification__text">{{ session('success') }}</p>
        </div>
        <div class="notification__action">
            <button class="button" aria-label="dismiss this notification">&times;</button>
        </div>
    </div>

    <style>
        :root {
            --accent-900: #49a87d;
            --check-svg: url("data:image/svg+xml,%0A%3Csvg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 -960 960 960' width='24' fill='%23ffffff'%3E%3Cpath d='M400-314.46 250.46-464 296-509.54l104 104 264-264L709.54-624 400-314.46Z'/%3E%3C/svg%3E");
        }
        .notification {
            color: rgba(0,0,0,0.7);
            position: fixed;
            display: flex;
            font-size: 1.3rem;
            line-height:1.4;
            gap: 1rem;
            top: 2rem;
            right: 2rem;
            width: 24rem;
            background-color: white;
            box-shadow:0 0 0.5rem rgba(0,0,0,0.25);
            border-radius:0.5rem;
            padding:1rem;
            overflow:hidden;
            transform: translateX(120%);
            transition: transform 0.5s ease, opacity 0.5s ease;
            opacity:0;
            z-index:9999;
        }
        .notification.show { transform:translateX(0); opacity:1; }
        .notification__text { margin:0.3rem 0 0; }
        .notification__header { margin:0; font-size:1.2rem; font-weight:600; color:black; }
        .notification__action { margin-left:auto; cursor:pointer; }
        .notification__icon {
            border-radius:50%;
            width:3rem;
            height:3rem;
            background-color: var(--accent-900);
            background-image: var(--check-svg);
            background-repeat:no-repeat;
            background-position:center;
            flex-shrink:0;
        }
        .button { border:none; background:none; font-size:1.2rem; }
        .notification::before {
            content:"";
            display:block;
            height:0.3rem;
            background-color: var(--accent-900);
            transform-origin:left;
            animation: countdown 4s linear forwards;
        }
        @keyframes countdown { 0% { transform:scaleX(1);} 100% { transform:scaleX(0);} }
    </style>

    <script>
        const notif = document.getElementById('notification');
        const closeBtn = notif.querySelector('.button');

        function showNotification() {
            notif.classList.add('show');
            setTimeout(()=>{ notif.classList.remove('show'); }, 4000);
        }

        // Click nút ✕ để ẩn
        closeBtn.addEventListener('click', ()=>{ notif.classList.remove('show'); });

        showNotification();
    </script>
@endif

<main class="container mx-auto p-6">
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>
