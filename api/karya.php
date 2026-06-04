<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Siswa - SMKN 3 Blitar</title>
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

    <!-- MAIN CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Judul Halaman & Tombol Aksi -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
            <div>
                <h1 class="text-4xl font-bold text-unguTua mb-2">Galeri Karya Siswa</h1>
                <p class="text-gray-600 text-lg">Dokumentasi portofolio dan artikel hasil praktik pelurusan rambut siswa SMKN 3 Blitar.</p>
            </div>
            <!-- Tombol ini nanti hanya muncul kalau siswa sudah login -->
            <button class="bg-unguTua text-white px-5 py-3 rounded-xl font-semibold shadow-sm hover:bg-purple-900 transition text-sm flex items-center gap-2">
                ✍️ Tulis Artikel Karyamu
            </button>
        </div>

        <!-- Grid Artikel Karya -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Artikel 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 flex flex-col justify-between">
                <div>
                    <!-- Thumbnail Artikel (Foto Before/After atau Proses) -->
                    <img src="https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?q=80&w=600" alt="Hasil Smoothing Keratin" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                            <span class="font-bold text-purple-700 bg-purple-50 px-2 py-0.5 rounded">Modul 02</span>
                            <span>•</span>
                            <span>4 Juni 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-unguTua transition">
                            <a href="#">Transformasi Rambut Kribo Menjadi Smoothing Silk Berkilau</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Pada praktik kali ini, saya menangani klien dengan tekstur rambut sangat tebal dan mengembang (kribo). Saya menggunakan teknik pencatokan tipis berulang...
                        </p>
                    </div>
                </div>
                <!-- Penulis & Tombol Baca -->
                <div class="p-6 pt-0 border-t border-gray-50 mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full bg-coralPink text-white flex items-center justify-center font-bold text-xs">SR</div>
                        <span class="text-xs font-semibold text-gray-700">Siti Rahma</span>
                    </div>
                    <a href="#" class="text-xs font-bold text-unguTua hover:underline">Baca Artikel &rarr;</a>
                </div>
            </article>

            <!-- Artikel 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 flex flex-col justify-between">
                <div>
                    <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=600" alt="Proses Catok" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                            <span class="font-bold text-purple-700 bg-purple-50 px-2 py-0.5 rounded">Modul 03</span>
                            <span>•</span>
                            <span>2 Juni 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-unguTua transition">
                            <a href="#">Eksperimen Pelurusan Rambut Sensitif Bekas Bleaching</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Menangani rambut bekas proses kimia (bleaching) membutuhkan ketelitian ekstra. Penggunaan kosmetika pelurus step 1 harus dikombinasikan dengan serum rambut...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 border-t border-gray-50 mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-xs">AN</div>
                        <span class="text-xs font-semibold text-gray-700">Ani Ningsih</span>
                    </div>
                    <a href="#" class="text-xs font-bold text-unguTua hover:underline">Baca Artikel &rarr;</a>
                </div>
            </article>

            <!-- Artikel 3 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 flex flex-col justify-between">
                <div>
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=600" alt="Hasil Akhir Pelurusan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                            <span class="font-bold text-purple-700 bg-purple-50 px-2 py-0.5 rounded">Modul 03</span>
                            <span>•</span>
                            <span>28 Mei 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-unguTua transition">
                            <a href="#">Penerapan Teknik Catok 45 Derajat untuk Hasil Lebih Natural</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Tantangan pelurusan rambut adalah menghindari hasil akhir yang terlalu kaku (seperti lidi). Di artikel ini saya membagikan hasil teknik catok bersudut...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 border-t border-gray-50 mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center font-bold text-xs">BU</div>
                        <span class="text-xs font-semibold text-gray-700">Budi Utomo</span>
                    </div>
                    <a href="#" class="text-xs font-bold text-unguTua hover:underline">Baca Artikel &rarr;</a>
                </div>
            </article>

        </div>
    </main>

    <!-- FOOTER IDENTITAS -->
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