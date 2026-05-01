@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <title>Chirper</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="h-screen overflow-hidden bg-base-200 flex flex-col">

    <!-- Navbar -->
    <nav class="navbar bg-gradient-to-r from-blue-700 to-blue-300 text-white shadow-lg px-6">
        <div>
            <a class="text-2xl font-bold text-primary">CHIRPER</a>
        </div>

        <div class="ml-auto flex gap-4">
            <a class="btn btn-ghost btn-sm">Home</a>
            <a class="btn btn-ghost btn-sm">Sign Up</a>
            <a class="btn btn-primary btn-sm">Login</a>
        </div>
    </nav>

    <!-- Hero -->
    <main class="flex-1 flex items-center justify-center bg-gradient-to-r from-primary to-secondary">

        <div class="text-center text-primary-content">

            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Welcome to CHIRPER
            </h1>

            <p class="text-lg md:text-xl mb-6 max-w-xl mx-auto leading-relaxed">
                Tempat sederhana untuk berbagi pikiran singkatmu<br>
                Tulis, bagikan, dan lihat cerita orang lain
            </p>

            <!-- BUTTON -->
            <div class="mt-6">
                <div class="mt-6">
    <a href="{{ route('chirps.index') }}" class="bubble-btn">Mulai Sekarang</a>
</div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="p-4 bg-base-100 text-center border-t">
        <p class="text-sm">
            <strong>Miranda Sasmita | NIM : 230170147</strong>
        </p>
    </footer>

    <!-- STYLE BUBBLE -->
    <style>
        .bubble-btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 18px;
            font-weight: 600;
            color: white;
            border-radius: 9999px;
            background: linear-gradient(135deg, #73bcde, #5573f7);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .bubble-btn:hover {
            transform: scale(1.08);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }
    </style>

</body>
</html>