<div>
    <footer class="bg-black relative">
        <div class="mx-auto max-w-7xl px-6 py-20 sm:py-24 lg:px-8 flex justify-between items-start relative">

            <!-- Openingstijden gecentreerd -->
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

            <!-- Footer navigatie -->
            <div class="flex flex-col items-end gap-6 ml-auto">
                <nav aria-label="Footer" class="flex flex-wrap justify-end gap-x-12 gap-y-3 text-sm/6">
                    <a href="{{ route('contact.index') }}" class="text-white hover:text-[#E8C700]">Contact</a>
                    <a href="/occasions" class="text-white hover:text-[#E8C700]">Occasions</a>
                    <a href="/service-onderhoud" class="text-white hover:text-[#E8C700]">Dienst en onderhoud</a>
                    <a href="{{ route('index') }}" class="text-white hover:text-[#E8C700]">Home</a>
                </nav>
                <p class="mt-10 text-white text-sm/6">&copy; 2024 Your Company, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
