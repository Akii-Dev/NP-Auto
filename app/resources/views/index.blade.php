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

<!-- NAVBAR START -->
<header class="relative bg-black">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:divide-y lg:divide-yellow-500/20 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="relative z-10 flex px-2 lg:px-0">
                <div class="flex shrink-0 items-center">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=E8C700&shade=500" alt="Your Company" class="h-8 w-auto" />
                </div>
            </div>

            <div class="relative z-10 flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-yellow-400 hover:bg-yellow-500/20 focus:outline-2 focus:outline-yellow-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        <nav aria-label="Global" class="hidden lg:flex lg:space-x-8 lg:py-2">
            <a href="#" aria-current="page" class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-medium text-black">Home</a>
            <a href="#" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Occasions</a>
            <a href="#" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Service & Onderhoud</a>
            <a href="#" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Contact</a>
        </nav>
    </div>

    <el-disclosure id="mobile-menu" hidden class="contents lg:hidden">
        <nav aria-label="Global">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="#" aria-current="page" class="block rounded-md bg-yellow-500 px-3 py-2 text-base font-medium text-black">Dashboard</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Team</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Projects</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Calendar</a>
            </div>
            <div class="border-t border-yellow-500/20 pt-4 pb-3">
                <div class="flex items-center px-4">
                    <div class="shrink-0">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-black outline-1 outline-yellow-400" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-black">Tom Cook</div>
                        <div class="text-sm font-medium text-yellow-400">tom@example.com</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-500/20">Your profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-500/20">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-500/20">Sign out</a>
                </div>
            </div>
        </nav>
    </el-disclosure>
</header>

<!-- NAVBAR END -->

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


<!-- Diensten Section END -->

<footer class="bg-black relative">
    <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 flex justify-between items-start relative">

        <!-- Openingstijden gecentreerd op de pagina -->
        <div class="absolute left-1/2 transform -translate-x-1/2 text-center">
            <p class="text-white text-lg font-semibold mb-2">Openingstijden</p>
            <div class="text-white text-sm space-y-1">
                <p>Maandag: 09:00 - 18:00</p>
                <p>Dinsdag: 09:00 - 18:00</p>
                <p>Woensdag: 09:00 - 18:00</p>
                <p>Donderdag: 09:00 - 18:00</p>
                <p>Vrijdag: 09:00 - 18:00</p>
                <p>Zaterdag: 10:00 - 16:00</p>
                <p>Zondag: Gesloten</p>
            </div>
        </div>

        <!-- Alles rechts: nav + social icons + copyright -->
        <div class="flex flex-col items-end gap-6 ml-auto">
            <!-- Navigatie -->
            <nav aria-label="Footer" class="flex flex-wrap justify-end gap-x-12 gap-y-3 text-sm/6">
                <a href="#" class="text-white hover:text-[#E8C700]">Contact</a>
                <a href="#" class="text-white hover:text-[#E8C700]">Occasions</a>
                <a href="#" class="text-white hover:text-[#E8C700]">Dienst en onderhoud</a>
                <a href="#" class="text-white hover:text-[#E8C700]">Home</a>
            </nav>

            <!-- Social icons -->
            <div class="flex justify-end gap-x-10 mt-4">
                <!-- Facebook -->
                <a href="#" class="text-white hover:text-[#E8C700]">
                    <span class="sr-only">Facebook</span>
                    <svg viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                </a>
                <!-- Instagram -->
                <a href="#" class="text-gray-600 hover:text-gray-800">
                    <span class="sr-only">Instagram</span>
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-6">
                        <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </a>


            </div>

            <!-- Copyright -->
            <p class="mt-10 text-white text-sm/6">&copy; 2024 Your Company, Inc. All rights reserved.</p>
        </div>

    </div>
</footer>


</body>
</html>
