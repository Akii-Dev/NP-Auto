<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-yellow-50">


    <form action="{{ route('service.store') }}" method="POST">
        @csrf

        <div class="flex flex-col py-4 px-8 m-16 border border-yellow-300 rounded-lg bg-white shadow-sm">

            {{-- start 1/3 --}}

            <div class="mb-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Titel*</label>
                <div class="mt-2">
                    <input id="title" type="text" name="title" placeholder="Ruiten vervangen"
                        value="{{ old('title') }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm/6 font-medium text-gray-900">Prijs €*</label>
                <div class="mt-2">
                    <input id="price" type="number" step=".01" name="price" placeholder="300.00"
                        value="{{ old('price') }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            {{-- end 1/3 --}}

            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Beschrijving*</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="4"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6">
{{ old('description') }}
                    </textarea>
                </div>
            </div>

            {{-- errors declared in session --}}
            @if (session('error'))
                <div class="text-red-500">
                    {{ session('error') }}
                </div>
            @endif
            {{-- input validation errors --}}
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('admin.index') }}" class="text-sm/6 font-semibold text-gray-900">Annuleer en ga
                    terug</a>
                <button type="submit"
                    class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Opslaan</button>
            </div>





        </div>

    </form>

</body>

</html>
