<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Gedung</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @foreach($buildings as $building)
            <x-card 
                :imageSrc="asset('storage/foto_gedung/'.$building->foto)" 
                :title="$building->nama_gedung" 
                :status="$building->status ? 'Available' : 'Unavailable'"
                :id="$building->id"
            />
        @endforeach
    </div>
</body>
</html>

    
    {{-- <div class="container mx-auto p-4">
        <div class="flex justify-center mb-4">
            <input type="text" placeholder="Search" class="w-1/2 p-2 border rounded">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/teras_pendopo.jpg') }}" alt="Pendopo" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Pendopo</h3>
                <p class="text-gray-500">BOOKING</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('Pendopo')">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/prayoga.jpg') }}" alt="Prayoga" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Prayoga</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('Prayoga')">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/wiwaha.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Wiwaha</h3>
                <p class="text-gray-500">TERSEDIA</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('Wiwaha')">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/praja.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Praja</h3>
                <p class="text-gray-500">RENOVASI</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('Praja')">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('images/wiwaha.jpg') }}" alt="Wiwiha" class="w-full h-48 object-cover rounded">
                <h3 class="text-lg font-semibold mt-2">Heritage</h3>
                <p class="text-gray-500">BOOKING</p>
                <div class="mt-2 flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('Heritage')">Detail</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded">Pinjam</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="detailModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded p-4 w-1/2">
            <div class="flex justify-end">
                <button onclick="closeModal()" class="text-black">&times;</button>
            </div>
            <div id="modalContent">
                <!-- Dynamic Content -->
            </div>
        </div>
    </div> --}}

    {{-- <script>
        function showDetail(name) {
            let modal = document.getElementById('detailModal');
            let content = document.getElementById('modalContent');
            if (name === 'Pendopo') {
                content.innerHTML = `
                    <img src="{{ asset('images/teras_pendopo.jpg') }}" alt="Pendopo" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Pendopo</h3>
                    <p class="text-gray-500">Status: BOOKING</p>
                    <p>Tanggal Peminjaman: 23/06/2024</p>
                    <p>Kapasitas: 50</p>
                    <p>Fasilitas: Proyektor, Kursi, Meja, Gelas, Sound, Mic</p>
                `;
            } else if (name === 'Prayoga') {
                content.innerHTML = `
                    <img src="{{ asset('images/prayoga.jpg') }}" alt="Prayoga" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Prayoga</h3>
                    <p class="text-gray-500">Status: TERSEDIA</p>
                    <p>Tanggal Peminjaman: -</p>
                    <p>Kapasitas: 55</p>
                    <p>Fasilitas: Proyektor, Kursi, Meja, Gelas, Sound, Mic</p>
                `;
            } else if (name === 'Wiwaha') {
                content.innerHTML = `
                    <img src="{{ asset('images/wiwaha.jpg') }}" alt="Wiwaha" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Wiwaha</h3>
                    <p class="text-gray-500">Status: TERSEDIA</p>
                    <p>Tanggal Peminjaman: -</p>
                    <p>Kapasitas: 70</p>
                    <p>Fasilitas: Proyektor, Kursi, Meja, Gelas, Sound, Mic</p>
                `;
            } else if (name === 'Praja') {
                content.innerHTML = `
                    <img src="{{ asset('images/praja.jpg') }}" alt="Praja" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Praja</h3>
                    <p class="text-gray-500">Status: RENOVASI</p>
                    <p>Tanggal Peminjaman: -</p>
                    <p>Kapasitas: 250</p>
                    <p>Fasilitas: Proyektor, Kursi, Meja, Gelas, Sound, Mic</p>
                `;
            } else if (name === 'Heritage') {
                content.innerHTML = `
                    <img src="{{ asset('images/teras_pendopo.jpg') }}" alt="Heritage" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Heritage</h3>
                    <p class="text-gray-500">Status: BOOKING</p>
                    <p>Tanggal Peminjaman: 28/07/2024</p>
                    <p>Kapasitas: 60</p>
                    <p>Fasilitas: Proyektor, Kursi, Meja, Gelas, Sound, Mic</p>
                `;
            }
            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }
    </script> --}}
</body>
</html>
