<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .indent-paragraph p {
            text-indent: 2em;
            margin: 0;
        }
    </style>

    <style>
        .list-decimal {
            list-style-type: decimal;
        }
        .list-decimal li {
            margin-bottom: 0.5em; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
        <div class="bg-lightblue bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-10 pl-10 text-left text-white">
                <div class="text-left text-2xl font-semibold mb-4">
                    {{ __("Sekretariat Daerah Kabupaten Cianjur") }}
                </div>
                <div class="px-10 text-left text-white text-base leading-relaxed indent-paragraph">
                    <p>Sekretariat Daerah Kabupaten Cianjur merupakan salah satu lembaga pemerintahan daerah yang berfungsi sebagai pendukung utama Bupati dalam penyusunan kebijakan serta pengoordinasian administratif pemerintahan di Kabupaten Cianjur, Jawa Barat. Sekretariat Daerah Kabupaten Cianjur beralamat di Jl. Siti Jenab No.31, Pamoyanan, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43211. Sekretariat Daerah mempunyai tugas membantu Bupati dalam penyusunan kebijakan dan pengoordinasian administratif terhadap pelaksanaan tugas perangkat daerah serta pelayanan administratif. Sekretariat Daerah mempunyai beberapa fungsi utama seperti pembinaan dan pengoordinasian penyelenggaraan pemerintahan daerah, pelayanan administratif kepada seluruh perangkat daerah, pengelolaan sumber daya yang meliputi keuangan, aset, serta sumber daya manusia, dan pengendalian serta evaluasi terhadap pelaksanaan kebijakan di tingkat daerah. Sekretariat Daerah Kabupaten Cianjur memiliki beberapa program unggulan yang bertujuan untuk meningkatkan kinerja pemerintahan daerah, seperti E-Governance yaitu pengembangan sistem pemerintahan berbasis elektronik untuk meningkatkan efisiensi dan transparansi, Reformasi Birokrasi yaitu upaya pembenahan sistem birokrasi untuk pelayanan yang lebih baik, dan Peningkatan Kapasitas SDM yaitu pelatihan dan pengembangan pegawai untuk meningkatkan kompetensi dan profesionalisme.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
        <div class="bg-lightblue bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-10 pl-10 text-left text-white">
                <div class="text-left text-2xl font-semibold mb-4">
                    {{ __("Visi") }}
                </div>
                <div class="px-10 text-left text-white text-base leading-relaxed indent-paragraph">
                    <p>Cianjur Manjur (Maju, Mandiri, Religius) dan Berakhlak Mulia</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
        <div class="bg-lightblue bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
            <div class="py-10 pl-10 text-left text-white">
                <div class="text-left text-2xl font-semibold mb-4">
                    {{ __("Misi") }}
                </div>
                <div class="px-10 text-left text-white text-base leading-relaxed">
                    <ol class="list-decimal pl-5 space-y-2">
                        <li>Meningkatkan kualitas sumber daya manusia yang sehat, cerdas, produktif, bertakwa dan berakhlak mulia menyambut era Society 5.0.</li>
                        <li>Mengembangkan ekonomi kerakyatan berbasis potensi lokal yang mandiri dan berdaya saing sesuai dengan era Industri 4.0.</li>
                        <li>Melanjutkan pembangunan infrastruktur untuk mengurangi kesenjangan serta mendukung peningkatan dan pemerataan pembangunan bidang pendidikan, kesehatan dan ekonomi.</li>
                        <li>Peningkatan pengelolaan dan perlingungan sumber daya alam untuk menjamin keseimbangan alam dan kelangsungan lingkungan hidup.</li>
                        <li>Pemantapan reformasi birokrasi dan transformasi birokrasi pemerintahan untuk menjamin terciptanya pelayanan publik yang semakin baik, profesional, efektif dan efisien serta adaptif menuju era Governance 3.0.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 