<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

 {{-- succes message from one of the forms --}}
  @if (session('success'))
                <div class="text-green-500">
                    {{ session('success') }}
                </div>
            @endif
            {{-- errors declared in session --}}
    @if (session('error'))
        <div class="text-red-500">
            {{ session('error') }}
        </div>
    @endif

    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow-sm sm:grid sm:grid-cols-2 sm:divide-y-0">
  <div class="group relative rounded-tl-lg rounded-tr-lg border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-tr-none sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-teal-50 p-3 text-teal-700">
        <img src="{{ Vite::asset('resources/img/icons/car.svg') }}" alt="auto" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
        <a href="{{ route('occasion.create') }}" class="focus:outline-hidden">
          <!-- Extend touch target to entire panel -->
          <span aria-hidden="true" class="absolute inset-0"></span>
          Maak nieuwe occasion aan
        </a>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Maak een nieuwe occasion met behulp van een invulformulier</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
  <div class="group relative border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-tr-lg sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-purple-50 p-3 text-purple-700">
        <img src="{{ Vite::asset('resources/img/icons/car.svg') }}" alt="sleutel" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
        {{-- <a href="{{ route('occasion.edit', 1) }}" class="focus:outline-hidden"> --}}
          <a href="{{ route('admin.occasions') }}" class="focus:outline-hidden">
          <!-- Extend touch target to entire panel -->
          <span aria-hidden="true" class="absolute inset-0"></span>
          Pas occasions aan
        </a>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Selecteer een occasion en gebruik een formulier om deze te bewerken</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
  <div class="group relative border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-sky-50 p-3 text-sky-700">
        <img src="{{ Vite::asset('resources/img/icons/wrench.svg') }}" alt="auto" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
        <a href="{{ route('service.create') }}" class="focus:outline-hidden">
          <!-- Extend touch target to entire panel -->
          <span aria-hidden="true" class="absolute inset-0"></span>
          Maak nieuwe service aan
        </a>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Maak een nieuwe service met behulp van een invulformulier</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
  <div class="group relative border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-yellow-50 p-3 text-yellow-700">
        <img src="{{ Vite::asset('resources/img/icons/wrench.svg') }}" alt="auto" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
        <a href="{{ route('service.edit', 1) }}" class="focus:outline-hidden">
          <!-- Extend touch target to entire panel -->
          <span aria-hidden="true" class="absolute inset-0"></span>
          Pas services aan
        </a>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Selecteer een service en gebruik een formulier om deze te bewerken</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
  <div class="group relative border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-bl-lg sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-rose-50 p-3 text-rose-700">
        <img src="{{ Vite::asset('resources/img/icons/edit.svg') }}" alt="auto" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
        <a href="#" class="focus:outline-hidden">
          <!-- Extend touch target to entire panel -->
          <span aria-hidden="true" class="absolute inset-0"></span>
          Verander homepage text
        </a>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Pas de text aan die je ziet op de homepage</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
  <div class="group relative rounded-br-lg rounded-bl-lg border-gray-200 bg-white p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-bl-none sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b">
    <div>
      <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-700">
        <img src="{{ Vite::asset('resources/img/icons/logout.svg') }}" alt="auto" class="size-6 opacity-50" />
      </span>
    </div>
    <div class="mt-8">
      <h3 class="text-base font-semibold text-gray-900">
          <!-- Extend touch target to entire panel -->
        
        <form method="POST" action="{{ route('user.logout') }}">
          @csrf
          <button type="submit" class="text-red-600 underline">Uitloggen</button>
        </form>
      </h3>
      <p class="mt-2 text-sm text-gray-500">Vaarwel</p>
    </div>
    <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400">
      <svg viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
      </svg>
    </span>
  </div>
</div>

</body>
</html>
