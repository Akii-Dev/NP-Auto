<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | NP Auto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black">

<x-navbar />

<div class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Get in touch box -->
        <div class="bg-black text-yellow-500 rounded-2xl p-10 shadow-lg">
            <h2 class="text-4xl font-bold tracking-tight sm:text-5xl mb-6">Neem contact op</h2>
            <p class="text-yellow-400 mb-8">
                Heb je vragen over onze occasions of service? Vul onderstaand formulier in of neem contact op via de gegevens hieronder.
            </p>

            <dl class="space-y-6">
                <div class="flex gap-x-4 items-start">
                    <svg class="h-6 w-6 flex-none mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12l2-2 4 4 8-8 2 2-12 12z"/>
                    </svg>
                    <div>
                        <dt class="font-semibold">Adres</dt>
                        <dd>NP Auto<br>Groningen, NL</dd>
                    </div>
                </div>

                <div class="flex gap-x-4 items-start">
                    <svg class="h-6 w-6 flex-none mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92V21a1 1 0 0 1-1 1c-9.39 0-17-7.61-17-17a1 1 0 0 1 1-1h4.09a1 1 0 0 1 1 .75l.83 3.32a1 1 0 0 1-.25 1.05L7.5 9.5a12.05 12.05 0 0 0 7 7l1.36-1.36a1 1 0 0 1 1.05-.25l3.32.83a1 1 0 0 1 .75 1z"/>
                    </svg>
                    <div>
                        <dt class="font-semibold">Telefoon</dt>
                        <dd><a href="tel:+31501234567" class="hover:text-yellow-400">+31 50 123 4567</a></dd>
                    </div>
                </div>

                <div class="flex gap-x-4 items-start">
                    <svg class="h-6 w-6 flex-none mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16v16H4z"/>
                        <path d="M22 6l-10 7L2 6"/>
                    </svg>
                    <div>
                        <dt class="font-semibold">Email</dt>
                        <dd><a href="mailto:info@npauto.nl" class="hover:text-yellow-400">info@npauto.nl</a></dd>
                    </div>
                </div>
            </dl>

            <div class="mt-8">
                <iframe class="w-full h-64 rounded-xl border-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.123456789012!2d6.5619673!3d53.2033398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c832b181ae7147%3A0x419b9cc003ab193f!2sNoorderpoort%20Technologie%20%26%20ICT!5e0!3m2!1snl!2snl!4v1700000000000!5m2!1snl!2snl"
                        loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Contactformulier -->
        <form action="{{ route('contact.store') }}" method="POST" class="bg-white rounded-2xl shadow-lg p-10">
            @csrf

            @if(session('success'))
                <div id="success-message" class="mb-4">
                    <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-md relative">
                        {{ session('success') }}
                        <button onclick="document.getElementById('success-message').style.display='none'" class="ml-2 font-bold text-green-800">&times;</button>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="sm:col-span-2">
                    <label for="title" class="block text-sm font-semibold text-gray-900">Onderwerp</label>
                    <input id="title" name="title" type="text" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500" required>
                    @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="first_name" class="block text-sm font-semibold text-gray-900">Voornaam</label>
                    <input id="first_name" name="first_name" type="text" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500" required>
                    @error('first_name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-semibold text-gray-900">Achternaam</label>
                    <input id="last_name" name="last_name" type="text" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500" required>
                    @error('last_name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
                    <input id="email" name="email" type="email" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500" required>
                    @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-semibold text-gray-900">Telefoonnummer</label>
                    <input id="phone" name="phone" type="tel" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500">
                    @error('phone')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold text-gray-900">Bericht</label>
                    <textarea id="message" name="message" rows="4" class="mt-2 block w-full rounded-md border border-gray-300 px-3.5 py-2 text-black focus:outline-yellow-500" required></textarea>
                    @error('message')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="rounded-2xl bg-yellow-500 px-6 py-3 text-black font-semibold hover:bg-yellow-600 transition">
                    Bericht versturen
                </button>
            </div>
        </form>

    </div>
</div>

<x-footer />

</body>
</html>
