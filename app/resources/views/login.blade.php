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
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
    <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img src="{{ Vite::asset('resources/img/logo-np-auto.png') }}" alt="Logo NP-Auto"
                        class="h-10 w-auto" />
                    <h2 class="mt-8 text-2xl/9 font-bold tracking-tight text-gray-900">Log in voor <span
                            class="text-yellow-500">NP-Auto</span></h2>
                </div>

                   {{-- errors declared using the error session --}}
    @if (session('error'))
        <div class="bg-red-500">
            {{ session('error') }}
        </div>
    @endif
    {{-- input validation errors --}}
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="bg-red-500">{{ $error }}</p>
            @endforeach
        </div>
    @endif

                <div class="mt-10">
                    <div>
                        <form action="{{route('user.login')}}" method="POST" class="space-y-6">
                            @csrf 
                            <div>
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email*</label>
                                <div class="mt-2">
                                    <input id="email" type="email" name="email" required autocomplete="email" value="{{ old('email') }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                                </div>
                            </div>

                            <div>
                                <label for="password" class="block text-sm/6 font-medium text-gray-900">Wachtwoord*</label>
                                <div class="mt-2">
                                    <input id="password" type="password" name="password" required 
                                        {{-- autocomplete="current-password" --}}
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-yellow-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-yellow-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Inloggen</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
            <img src="{{ Vite::asset('resources/img/man-achter-stuur.png') }}" alt=""
                class="absolute inset-0 size-full object-cover" />
        </div>
    </div>

</body>

</html>
