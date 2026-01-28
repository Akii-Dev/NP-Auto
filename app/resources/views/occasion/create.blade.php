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
    <form>
        @csrf

        <div class="flex flex-col py-4 px-8 m-16 border border-yellow-300 rounded-lg bg-white shadow-sm">
            <div class="mb-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Titel*</label>
                <div class="mt-2">
                    <input id="title" type="text" name="title" placeholder="Heb hier geen zin in"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm/6 font-medium text-gray-900">Prijs €*</label>
                <div class="mt-2">
                    <input id="price" type="number" step=".01" name="price" placeholder="1300.00"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="plate" class="block text-sm/6 font-medium text-gray-900">Kenteken*</label>
                <div class="mt-2">
                    <input id="plate" type="text" name="plate" placeholder="XZ993D"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="mb-4">
                <label for="mileage" class="block text-sm/6 font-medium text-gray-900">Kilometerstand*</label>
                <div class="mt-2">
                    <input id="mileage" type="number" name="mileage" placeholder="25210"
                        class="block w-full sm:w-56 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-yellow-600 sm:text-sm/6" />
                </div>
            </div>



            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Beschrijving*</label>
                <div class="mt-2">
                    <textarea id="description" name="description" rows="4"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
            </div>

            



        </div>

    </form>

</body>

</html>
