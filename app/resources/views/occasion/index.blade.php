<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Occasions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black font-sans">

<x-navbar />
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold mb-10 text-black">Onze Occasions</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($occasions as $occasion)
            <div class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">

                <!-- VERKOCHT banner -->
                @if($occasion->sold)
                    <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 font-bold z-10">VERKOCHT</div>
                @endif

                <!-- Info -->
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-white mb-2">{{ $occasion->title }}</h2>
                    <p class="text-gray-300 mb-1">Kenteken: {{ $occasion->plate }}</p>
                    <p class="text-gray-300 mb-1">Prijs: €{{ number_format($occasion->price, 2, ',', '.') }}</p>
                    <p class="text-gray-300 mb-4">Kilometerstand: {{ number_format($occasion->mileage, 0, ',', '.') }} km</p>

                    <a href="{{ route('occasions.show', $occasion->id) }}" class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-sm font-medium text-black hover:bg-yellow-600 transition">
                        Bekijk details
                    </a>
                        Bekijk details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<x-footer />

</body>
</html>
