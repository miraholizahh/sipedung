<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .justified-text {
            text-align: justify;
            width: 80%; /* Sesuaikan lebar sesuai kebutuhan */
            max-width: 800px; /* Lebar maksimum kontainer teks */
            margin: auto;
            padding-top: 25px;
            background-color: lightblue; /* Warna latar belakang untuk paragraf */
            padding: 10px; /* Tambahkan padding untuk penampilan yang lebih baik */
            border-radius: 8px; /* Opsional: Tambahkan sudut yang membulat */
        }
        .text-bold {
            font-weight: bold;
        }
        .text-2x {
            font-size: 2em;
        }
    </style>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
        <div class="bg-lightblue bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-10 pl-10 text-left text-white">
                <div class="text-left text-2xl font-semibold mb-4">
                    {{ __("Hubungi Kami") }}
                </div>
                <div class="px-10 text-left text-white text-base leading-relaxed">
                    <p>Alamat</p>
                    <p>Jl. Siti Jenab No.31, Pamoyanan, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43211</p>
                    <br> <!-- Menambahkan jarak antara teks -->
                    <p>Telepon</p>
                    <p>(0263)261892-261896</p>
                    <br> <!-- Menambahkan jarak antara teks -->
                    <p>Email</p>
                    <p>setda@cianjurkab.go.id</p>
                    <br> <!-- Menambahkan jarak antara teks -->
                    <p>Instagram</p>
                    <p>setda_cianjur</p> 
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>
