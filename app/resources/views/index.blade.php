<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-white text-black">

<x-navbar />

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Nieuwste Occasiosn</h2>
        </div>

        <!-- 3 nieuwste occasions -->
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:mx-0 lg:max-w-none">
            <li class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <!-- Image met hover overlay -->
                <div class="relative overflow-hidden">
                    <img src="/images/auto1.png" alt="auto 1" class="aspect-3/2 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300"></div>
                </div>

                <!-- Info -->
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-white mb-2">Auto 1</h3>
                    <p class="text-gray-300 mb-4">Beschrijving van deze auto.</p>
                    <a href="#" class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-sm font-medium text-black hover:bg-yellow-600 transition">Bekijk</a>
                </div>
            </li>

            <li class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="relative overflow-hidden">
                    <img src="/images/auto2.png" alt="auto 2" class="aspect-3/2 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300"></div>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-semibold text-white mb-2">Auto 2</h3>
                    <p class="text-gray-300 mb-4">Beschrijving van deze auto.</p>
                    <a href="#" class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-sm font-medium text-black hover:bg-yellow-600 transition">Bekijk</a>
                </div>
            </li>

            <li class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="relative overflow-hidden">
                    <img src="/images/auto3.webp" alt="auto 3" class="aspect-3/2 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300"></div>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-semibold text-white mb-2">Auto 3</h3>
                    <p class="text-gray-300 mb-4">Beschrijving van deze auto.</p>
                    <a href="#" class="inline-block rounded-md bg-yellow-500 px-4 py-2 text-sm font-medium text-black hover:bg-yellow-600 transition">Bekijk</a>
                </div>
            </li>
        </ul>


    </div>
</div>


<!-- Diensten Section START -->
<section class="bg-black text-white py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Tekst en diensten -->
        <div>
            <!-- Label / subtitel -->
            <p class="text-yellow-500 font-semibold uppercase mb-3 tracking-wide">Onze Diensten</p>

            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl mb-8 text-yellow-400">
                Al meer dan 20 jaar betrouwbaar in verkoop en onderhoud van uw auto.
            </h2>
            <p class="text-gray-300 mb-12">
                Bij NP Auto kunt u niet alleen auto’s kopen, maar ook eenvoudig gebruikmaken van onze aanvullende diensten. Ontdek ons volledige aanbod en neem contact op als u vragen heeft.
            </p>
            <ul class="space-y-6">
                <li class="flex items-center gap-4">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl border border-yellow-500 text-yellow-400 font-bold">01</span>
                    <span>APK</span>
                </li>
                <li class="flex items-center gap-4">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl border border-yellow-500 text-yellow-400 font-bold">02</span>
                    <span>Kleine onderhoudsbeurt</span>
                </li>
                <li class="flex items-center gap-4">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl border border-yellow-500 text-yellow-400 font-bold">03</span>
                    <span>Grote onderhoudsbeurt</span>
                </li>
                <li class="flex items-center gap-4">
                    <span class="flex h-10 w-10 items-center justify-center rounded-2xl border border-yellow-500 text-yellow-400 font-bold">04</span>
                    <span>Remmen vervangen</span>
                </li>
            </ul>

            <!-- Knop naar Service & Onderhoud -->
            <a href="/service-onderhoud"
               class="inline-block mt-8 rounded-2xl bg-yellow-500 px-6 py-3 text-black font-semibold hover:bg-yellow-600 transition">
                Bekijk Service & Onderhoud
            </a>
        </div>
        <!-- Afbeelding -->
        <div>
            <img src="{{ asset('images/services.png') }}" alt="Onze diensten" class="w-full rounded-2xl shadow-xl object-cover">
        </div>
    </div>
</section>

<section class="bg-white py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Afbeelding -->
        <div>
            <img src="{{ asset('images/np-auto.png') }}" alt="NP Auto" class="w-full rounded-2xl shadow-xl object-cover">

        </div>

        <div>
            <p class="text-yellow-500 font-semibold uppercase mb-3 tracking-wide">Onze Visie</p>
            <h2 class="text-3xl font-bold sm:text-4xl mb-6 text-black">
                NP Auto - al meer dan 20 jaar uw betrouwbare partner
            </h2>
            <p class="text-gray-700 mb-6">
                NP Auto is geboren uit een passie voor auto’s. Sinds 2014 vinden wij mooie auto’s voor een betaalbare prijs, met een scherp oog voor kwaliteit. Onze ervaren monteurs verzorgen service en onderhoud voor alle merken, en dankzij ons compacte team houden we de kosten laag – zodat jij profiteert.
                Met onze nieuwe website vind je eenvoudig jouw ideale auto en plan je snel een afspraak voor onderhoud. Snel, betrouwbaar en klantgericht: dat is NP Auto.
            </p>

            <!-- Knoppen -->
            <div class="flex flex-wrap gap-4">
                <a href="/occasions" class="rounded-2xl bg-yellow-500 px-6 py-3 text-black font-semibold hover:bg-yellow-600 transition">
                    Bekijk onze Occasions
                </a>
                <a href="/service-onderhoud" class="rounded-2xl bg-black px-6 py-3 text-yellow-400 font-semibold hover:bg-gray-900 transition">
                    Contact
                </a>
            </div>
        </div>
    </div>
</section>

<x-footer />

</body>
</html>
