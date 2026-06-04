<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Materi - SMKN 3 Blitar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kremBg: '#FAF6F0',
                        unguTua: '#5B1963',
                        coralPink: '#FF8A8A'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-kremBg min-h-screen text-gray-800 font-sans">

    <?php include '../components/navbar.php'; ?>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="text-center md:text-left mb-12">
            <h1 class="text-4xl font-bold text-unguTua mb-2">Modul & Materi Pembelajaran</h1>
            <p class="text-gray-600 text-lg">Pilih modul di bawah ini untuk mulai mempelajari teknik pelurusan rambut profesional.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between border border-gray-100">
                <div>
                    <img src="https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?q=80&w=600" alt="Analisis Rambut" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="bg-purple-100 text-unguTua text-xs font-semibold px-2.5 py-1 rounded-full">Modul 01</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">Analisis Struktur & Jenis Rambut</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Mempelajari cara mengidentifikasi porositas rambut, elastisitas, dan bentuk batang rambut sebelum memulai proses pelurusan kimiawi agar rambut tidak rusak.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#" class="block text-center border border-black text-black font-medium py-2 rounded-xl hover:bg-black hover:text-white transition">
                        Lihat Detail Materi
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between border border-gray-100">
                <div>
                    <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=600" alt="Kosmetika Rambut" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="bg-purple-100 text-unguTua text-xs font-semibold px-2.5 py-1 rounded-full">Modul 02</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">Kosmetika & Bahan Pelurusan</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Pengenalan zat kimia dalam obat pelurus rambut (Step 1) dan neutralizer (Step 2), serta cara memilih produk yang cocok sesuai kondisi rambut siswa.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#" class="block text-center border border-black text-black font-medium py-2 rounded-xl hover:bg-black hover:text-white transition">
                        Lihat Detail Materi
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between border border-gray-100">
                <div>
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=600" alt="Teknik Catok" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="bg-purple-100 text-unguTua text-xs font-semibold px-2.5 py-1 rounded-full">Modul 03</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">Teknik Aplikasi & Pencatokan</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Langkah demi langkah melakukan aplikasi cream pelurus, penentuan waktu tunggu (waktu proses), hingga teknik mencatok dengan sudut derajat yang benar.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#" class="block text-center border border-black text-black font-medium py-2 rounded-xl hover:bg-black hover:text-white transition">
                        Lihat Detail Materi
                    </a>
                </div>
            </div>

        </div>
    </main>

    <footer class="max-w-7xl mx-auto px-6 pt-16 pb-8">
        <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="text-2xl font-bold text-unguTua">
                Tata Kecantikan Kulit dan Rambut <br class="hidden md:block"> SMKN 3 Blitar
            </h2>
            <div class="w-48 h-1.5 bg-gradient-to-r from-unguTua to-coralPink rounded-full"></div>
        </div>
    </footer>

</body>
</html>