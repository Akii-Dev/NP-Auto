<div>
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
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <nav aria-label="Global" class="hidden lg:flex lg:space-x-8 lg:py-2">
                <a href="{{ route('index') }}" class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-medium text-black">Home</a>
                <a href="/occasions" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Occasions</a>
                <a href="/service-onderhoud" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Service & Onderhoud</a>
                <a href="/contact" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Contact</a>
            </nav>
        </div>

        <el-disclosure id="mobile-menu" hidden class="contents lg:hidden">
            <nav aria-label="Global">
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <a href="{{ route('index') }}" class="inline-flex items-center rounded-md bg-yellow-500 px-3 py-2 text-sm font-medium text-black">Home</a>
                    <a href="/occasions" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Occasions</a>
                    <a href="/service-onderhoud" class="block rounded-md px-3 py-2 text-base font-medium text-yellow-400 hover:bg-yellow-500/20 hover:text-black">Service & Onderhoud</a>
                    <a href="{{ route('contact.index') }}" class="rounded-2xl bg-black px-6 py-3 text-yellow-400 font-semibold hover:bg-gray-900 transition">
                        Contact
                    </a>
                </div>
            </nav>
        </el-disclosure>
    </header>

</div>
