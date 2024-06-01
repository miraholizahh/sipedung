<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <div class="container mx-auto p-4">
        <div class="flex justify-center mb-4">
            <input type="text" placeholder="Search" class="w-1/2 p-2 border rounded">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/teras_pendopo.jpg') }}" alt="Pendopo" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Pendopo</h3>
                <p class="text-gray-500">BOOKING</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/prayoga.jpg') }}" alt="Prayoga" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Prayoga</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/wiwaha.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Wiwaha</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/praja.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Praja</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/wiwaha.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Heritage</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
