<div>
    <header class="relative bg-black">
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:divide-y lg:divide-yellow-500/20 lg:px-8">
            <div class="relative flex h-16 justify-between items-center">
                <!-- Logo links -->
                <div class="flex shrink-0 items-center">
                    <img src="{{ asset('images/logo-np-auto.png') }}" alt="NP Auto" class="h-8 w-auto drop-shadow-[2px_2px_0_white] drop-shadow-[-2px_2px_0_white]" />
                </div>

                <!-- Desktop menu -->
                <nav aria-label="Global" class="hidden lg:flex lg:space-x-8 lg:py-2">
                    <a href="{{ route('index') }}" class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-medium text-black">Home</a>
                    <a href="/occasions" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Occasions</a>
                    <a href="/service-onderhoud" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Service & Onderhoud</a>
                    <a href="/contact" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Contact</a>
                </nav>
            </div>

            <!-- Mobiel menu altijd zichtbaar -->
            <nav aria-label="Global" class="flex flex-col space-y-1 px-2 pt-2 pb-3 lg:hidden">
                <a href="{{ route('index') }}" class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-medium text-black">Home</a>
                <a href="/occasions" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Occasions</a>
                <a href="/service-onderhoud" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Service & Onderhoud</a>
                <a href="{{ route('contact.index') }}" class="rounded-2xl bg-black px-6 py-3 text-yellow-400 font-semibold hover:bg-gray-900 transition">
                    Contact
                </a>
            </nav>
        </div>
    </header>
</div>
