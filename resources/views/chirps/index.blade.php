<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Miranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-between">
            <span class="font-bold text-xl">CHIRPER</span>
            <a href="/" class="hover:underline">Kembali ke Home</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto p-8">
        <div class="bg-white p-6 rounded-xl shadow-md mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Apa cerita hari ini, Miranda?</h2>
            
            <form method="POST" action="{{ route('chirps.store') }}">
                @csrf
                <textarea 
                    name="message" 
                    placeholder="Tulis sesuatu..."
                    class="w-full p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    required
                ></textarea>
                <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
                    Posting
                </button>
            </form>
        </div>

        <div class="space-y-4">
            @foreach ($chirps as $chirp)
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
                    <p class="text-gray-800">{{ $chirp->message }}</p>
                    <small class="text-gray-500 italic mt-2 block">Baru saja</small>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>