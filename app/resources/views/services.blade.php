<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Services - NP Auto</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">

<x-navbar />

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-semibold mb-6">Onze Services</h1>
    <p class="text-gray-600 mb-12">Klik op een service voor meer informatie en uitleg.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

        @foreach(\App\Models\Service::all() as $service)
            <div class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/' . strtolower(str_replace(' ', '_', $service->title)) . '.jpg') }}"
                         alt="{{ $service->title }}"
                         class="aspect-3/2 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-white mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-300 mb-4">{{ $service->description }}</p>
                    <a href="/services/{{ str_replace(' ', '-', strtolower($service->title)) }}"
                       class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-sm font-medium text-black hover:bg-yellow-600 transition">
                        Bekijk
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>

<x-footer />

</body>
</html>
