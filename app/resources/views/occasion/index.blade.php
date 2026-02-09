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

    <!-- 🔹 Filter formulier -->
    <form method="GET" class="mb-8 flex flex-wrap gap-4 items-end">
        <!-- Max kilometerstand -->
        <div>
            <label class="block text-black font-semibold mb-1">Max kilometerstand</label>
            <input type="number" name="max_km" value="{{ request('max_km') }}"
                   class="border rounded-md px-3 py-2 w-40" placeholder="bijv. 50000">
        </div>

        <!-- Max prijs -->
        <div>
            <label class="block text-black font-semibold mb-1">Max prijs (€)</label>
            <input type="number" name="max_price" value="{{ request('max_price') }}"
                   class="border rounded-md px-3 py-2 w-40" placeholder="bijv. 20000">
        </div>

        <!-- Merk -->
        <div>
            <label class="block text-black font-semibold mb-1">Merk</label>
            <select name="brand" class="border rounded-md px-3 py-2 w-40">
                <option value="">Alle merken</option>
                @foreach($brands as $b)
                    <option value="{{ $b }}" @selected(request('brand') == $b)>{{ $b }}</option>
                @endforeach
            </select>
        </div>

        <!-- Verkocht verbergen -->
        <div class="flex items-center gap-2">
            <input type="checkbox" name="hide_sold" value="1" id="hide_sold" @checked(request('hide_sold'))>
            <label for="hide_sold" class="text-black font-semibold">Verkochte autos verbergen</label>
        </div>

        <button type="submit" class="bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-600 transition">
            Filter
        </button>
    </form>

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

                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $occasions->links() }}
    </div>
</div>
<x-footer />

</body>
</html>
