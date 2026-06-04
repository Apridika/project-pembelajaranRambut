<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Kelas - SMKN 3 Blitar</title>
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

    <?php include 'components/navbar.php'; ?>

    <!-- GOOGLE CLASSROOM TABS -->
    <div class="border-b border-gray-200 bg-white sticky top-0 z-10 shadow-sm">
        <div class="max-w-3xl mx-auto flex justify-around text-sm md:text-base font-semibold">
            <button onclick="switchTab('forum')" id="tab-forum" class="py-4 px-6 text-unguTua border-b-2 border-unguTua focus:outline-none">Forum</button>
            <button onclick="switchTab('tugas')" id="tab-tugas" class="py-4 px-6 text-gray-500 hover:text-unguTua focus:outline-none">Tugas & Materi</button>
            <button onclick="switchTab('anggota')" id="tab-anggota" class="py-4 px-6 text-gray-500 hover:text-unguTua focus:outline-none">Anggota</button>
        </div>
    </div>

    <!-- MAIN CONTAINER -->
    <main class="max-w-4xl mx-auto px-4 py-8">

        <!-- ================= TAB 1: FORUM ================= -->
        <div id="content-forum" class="space-y-6">
            <!-- Banner Kelas ala Google Classroom -->
            <div class="p-8 rounded-2xl text-white bg-gradient-to-br from-unguTua to-purple-800 shadow-sm relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-3xl font-bold tracking-tight">Pelurusan Rambut (Smoothing & Keratin)</h1>
                    <p class="text-purple-200 mt-2 text-sm md:text-base">Kompetensi Keahlian Tata Kecantikan Kulit & Rambut — SMKN 3 Blitar</p>
                </div>
                <div class="absolute right-0 bottom-0 opacity-10 text-9xl font-bold -mb-4 -mr-4">💇‍♀️</div>
            </div>

            <!-- Kotak Berbagi Pengumuman -->
            <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-full bg-gray-200 flex-shrink-0 flex items-center justify-center font-bold text-gray-600">SR</div>
                <div class="w-full">
                    <input type="text" placeholder="Bagikan sesuatu dengan kelasmu..." class="w-full bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-unguTua focus:bg-white transition">
                </div>
            </div>

            <!-- Postingan Pengumuman Guru -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 space-y-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-coralPink text-white flex items-center justify-center font-bold">IB</div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-950">Ibu Budiarti, S.Pd. <span class="font-normal text-xs text-gray-500">• Pengajar</span></h4>
                        <p class="text-xs text-gray-400">Kemarin, 14:20</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Halo anak-anak kelas XII Kecantikan, silakan tonton Video Pembelajaran Modul 3 tentang teknik pencatokan. Perhatikan sudut derajat pengangkatan rambut saat mencatokan ya. Jika ada kendala, tanyakan di kolom komentar bawah ini.
                </p>
                
                <!-- Kolom Komentar Kelas -->
                <div class="border-t border-gray-100 pt-4 space-y-3">
                    <div class="text-xs font-semibold text-gray-500 mb-2">2 Komentar Kelas</div>
                    
                    <!-- Komen 1 -->
                    <div class="flex items-start space-x-3 text-sm">
                        <div class="w-7 h-7 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs font-bold">AN</div>
                        <div class="bg-gray-50 p-2.5 rounded-lg flex-1">
                            <span class="font-bold text-xs block text-gray-900">Ani Ningsih</span>
                            <span class="text-gray-700">Bu, kalau untuk rambut yang tipis suhu catokannya baiknya berapa derajat ya?</span>
                        </div>
                    </div>
                    <!-- Tambah Komentar -->
                    <div class="flex items-center space-x-3 pt-2">
                        <div class="w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">SR</div>
                        <input type="text" placeholder="Tambahkan komentar kelas..." class="w-full bg-gray-50 text-xs border border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:ring-1 focus:ring-unguTua">
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= TAB 2: TUGAS & MATERI ================= -->
        <div id="content-tugas" class="hidden space-y-6">
            <!-- Topik 1 -->
            <div>
                <h2 class="text-xl font-bold text-unguTua border-b-2 border-purple-200 pb-2 mb-4">Topik 1: Pengenalan & Analisis Rambut</h2>
                <div class="space-y-3">
                    <!-- Item Materi -->
                    <div class="bg-white p-4 rounded-xl border border-gray-200 hover:shadow-sm transition flex items-center justify-between cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="p-2.5 bg-purple-50 text-unguTua rounded-lg">📖</div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">Materi Teks: Karakteristik Porositas Rambut</h4>
                                <p class="text-xs text-gray-400">Diposting 1 Jun</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Video/Tugas -->
                    <div class="bg-white p-4 rounded-xl border border-gray-200 hover:shadow-sm transition flex items-center justify-between cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="p-2.5 bg-red-50 text-red-500 rounded-lg">🎥</div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">Video Tutorial: Uji Elastisitas Batang Rambut</h4>
                                <p class="text-xs text-gray-400">Diposting 2 Jun</p>
                            </div>
                        </div>
                        <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded font-semibold">Selesai Tonton</span>
                    </div>
                </div>
            </div>

            <!-- Topik 2 -->
            <div>
                <h2 class="text-xl font-bold text-unguTua border-b-2 border-purple-200 pb-2 mb-4">Topik 2: Praktik Pelurusan</h2>
                <div class="space-y-3">
                    <div class="bg-white p-4 rounded-xl border border-gray-200 hover:shadow-sm transition flex items-center justify-between cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="p-2.5 bg-red-50 text-red-500 rounded-lg">🎥</div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">Video Tutorial: Teknik Pengolesan Cream Step 1</h4>
                                <p class="text-xs text-gray-400">Diposting Kemarin</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Tugas Upload -->
                    <div class="bg-white p-4 rounded-xl border border-gray-200 hover:shadow-sm transition flex items-center justify-between cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="p-2.5 bg-orange-50 text-orange-500 rounded-lg">📋</div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">Tugas Praktik: Upload Artikel Hasil Karya Pengolesan Step 1</h4>
                                <p class="text-xs text-red-400 font-medium">Tenggat: Besok, 23.59</p>
                            </div>
                        </div>
                        <span class="text-xs bg-orange-100 text-orange-700 px-2 py-0.5 rounded font-semibold">Belum Kirim</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= TAB 3: ANGGOTA ================= -->
        <div id="content-anggota" class="hidden bg-white p-6 rounded-xl shadow-sm border border-gray-200 space-y-6">
            <!-- Bagian Pengajar -->
            <div>
                <h3 class="text-lg font-bold text-unguTua border-b border-gray-200 pb-2 mb-4">Pengajar</h3>
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-9 h-9 rounded-full bg-coralPink text-white flex items-center justify-center font-bold text-sm">IB</div>
                    <span class="text-sm font-medium text-gray-900">Ibu Budiarti, S.Pd.</span>
                </div>
            </div>

            <!-- Bagian Teman Sekelas -->
            <div>
                <div class="flex justify-between items-center border-b border-gray-200 pb-2 mb-4">
                    <h3 class="text-lg font-bold text-unguTua">Teman Sekelas</h3>
                    <span class="text-xs text-gray-500 font-medium">3 Siswa</span>
                </div>
                <div class="divide-y divide-gray-100">
                    <div class="flex items-center space-x-3 py-3">
                        <div class="w-8 h-8 rounded-full bg-purple-200 text-purple-700 flex items-center justify-center font-bold text-xs">AN</div>
                        <span class="text-sm text-gray-800">Ani Ningsih</span>
                    </div>
                    <div class="flex items-center space-x-3 py-3">
                        <div class="w-8 h-8 rounded-full bg-green-200 text-green-700 flex items-center justify-center font-bold text-xs">BU</div>
                        <span class="text-sm text-gray-800">Budi Utomo</span>
                    </div>
                    <div class="flex items-center space-x-3 py-3">
                        <div class="w-8 h-8 rounded-full bg-blue-200 text-blue-700 flex items-center justify-center font-bold text-xs">CH</div>
                        <span class="text-sm text-gray-800">Chandra Kirana</span>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER IDENTITAS -->
    <footer class="max-w-4xl mx-auto px-4 pt-16 pb-8">
        <div class="border-t border-gray-200 pt-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <h2 class="text-xl font-bold text-unguTua">
                Tata Kecantikan Kulit dan Rambut <br> SMKN 3 Blitar
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-unguTua to-coralPink rounded-full"></div>
        </div>
    </footer>

    <!-- INTERACTIVE TAB JAVASCRIPT -->
    <script>
        function switchTab(tabName) {
            // Sembunyikan semua konten tab
            document.getElementById('content-forum').classList.add('hidden');
            document.getElementById('content-tugas').classList.add('hidden');
            document.getElementById('content-anggota').classList.add('hidden');

            // Reset semua style tombol tab jadi tidak aktif
            const tabs = ['forum', 'tugas', 'anggota'];
            tabs.forEach(t => {
                const el = document.getElementById('tab-' + t);
                el.classList.remove('text-unguTua', 'border-b-2', 'border-unguTua');
                el.classList.add('text-gray-500');
            });

            // Tampilkan konten tab yang diklik
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Aktifkan style tombol tab yang diklik
            const activeTab = document.getElementById('tab-' + tabName);
            activeTab.classList.remove('text-gray-500');
            activeTab.classList.add('text-unguTua', 'border-b-2', 'border-unguTua');
        }
    </script>

</body>
</html>