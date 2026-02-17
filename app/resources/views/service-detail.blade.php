<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->title }} - NP Auto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black font-sans">

<x-navbar />

<div class="max-w-7xl mx-auto px-6 py-12">

    <a href="/service-onderhoud" class="inline-block mb-8 text-yellow-500 font-semibold hover:underline">
        &larr; Terug naar services
    </a>

    <div class="bg-black rounded-2xl border border-yellow-500 shadow-lg p-8 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-white mb-4">{{ $service->title }}</h1>

        <img src="{{ asset('images/' . strtolower(str_replace(' ', '_', $service->title)) . '.jpg') }}"
             alt="{{ $service->title }}" class="w-full mb-6 rounded-lg" />

        <p class="text-gray-300 mb-4">{{ $service->description }}</p>

        <p class="text-gray-300 mb-6">
            <strong>Prijs:</strong> €{{ number_format($service->price, 2, ',', '.') }}
        </p>

        <p class="text-gray-300 mb-6">
            <strong>Aantal auto's tegelijk:</strong> Maximaal 3 auto's per keer
        </p>

        <a href="/contact"
           class="inline-block rounded-md bg-yellow-500 px-6 py-3 text-sm font-medium text-black hover:bg-yellow-600 transition">
            Afspraak maken
        </a>
    </div>
</div>

<x-footer />

</body>
</html>
