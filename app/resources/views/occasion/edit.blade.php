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

    <p>{{ $occasion }}</p>

    <form action="{{ route('occasion.update', $occasion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-col py-4 px-8 m-16 border border-yellow-300 rounded-lg bg-white shadow-sm">

            {{-- start 1/3 --}}

            <div class="mb-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Titel*</label>
                <div class="mt-2">
                    <input id="title" type="text" name="title" placeholder="Gebruikte lease BMW"
                        value="{{ old('title', $occasion->title) }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm/6 font-medium text-gray-900">Prijs €*</label>
                <div class="mt-2">
                    <input id="price" type="number" step=".01" name="price" placeholder="1300.00"
                        value="{{ old('price', $occasion->price) }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="plate" class="block text-sm/6 font-medium text-gray-900">Kenteken*</label>
                <div class="mt-2">
                    <input id="plate" type="text" name="plate" placeholder="XZ993D"
                        value="{{ old('plate', $occasion->plate) }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="mileage" class="block text-sm/6 font-medium text-gray-900">Kilometerstand*</label>
                <div class="mt-2">
                    <input id="mileage" type="number" name="mileage" placeholder="25210"
                        value="{{ old('mileage', $occasion->mileage) }}"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            {{-- end 1/3 --}}

            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Beschrijving*</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="4"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6">
{{ old('description', $occasion->description) }}
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

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <form action="{{ route('occasion.destroy', $occasion->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete
                        Occasion</button>
                </form>
                <div>
                    <a href="{{ route('admin.index') }}" class="text-sm/6 font-semibold text-gray-900">Annuleer en ga
                        terug</a>
                    <button type="submit"
                        class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Save</button>
                </div>
            </div>





        </div>

    </form>

</body>

</html>
