<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Pembelajaran - SMKN 3 Blitar</title>
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

    <!-- NAVIGATION BAR -->
    <nav class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
        <div class="flex items-center space-x-8">
            <button class="flex flex-col space-y-1.5 focus:outline-none md:hidden">
                <span class="w-6 h-0.5 bg-black"></span>
                <span class="w-6 h-0.5 bg-black"></span>
                <span class="w-6 h-0.5 bg-black"></span>
            </button>
            
            <div class="hidden md:flex items-center space-x-8 font-medium">
                <a href="index.php" class="text-gray-500 hover:text-black transition">Home</a>
                <a href="materi.php" class="text-gray-500 hover:text-black transition">Materi</a>
                <a href="video.php" class="text-black font-bold">Video Pembelajaran</a>
                <a href="kelas.php" class="text-gray-500 hover:text-black transition">Ruang Kelas</a>
                <a href="karya.php" class="text-gray-500 hover:text-black transition">Karya Siswa</a>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <a href="#" class="border border-black text-black px-6 py-2 rounded-full font-medium hover:bg-black hover:text-white transition">Masuk</a>
            <a href="#" class="bg-coralPink text-white px-6 py-2 rounded-full font-medium hover:opacity-90 transition">Daftar</a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Judul Halaman -->
        <div class="text-center md:text-left mb-12">
            <h1 class="text-4xl font-bold text-unguTua mb-2">Video Pembelajaran</h1>
            <p class="text-gray-600 text-lg">Tonton video tutorial interaktif untuk memahami teknik pelurusan rambut secara visual.</p>
        </div>

        <!-- Grid Video -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Video Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 p-4">
                <!-- Wrapper Embed YouTube Responsif (16:9) -->
                <div class="relative overflow-hidden w-full pt-[56.25%] rounded-xl bg-black mb-4">
                    <!-- Sementara pakai video contoh YouTube, nanti id video bisa ditarik dari database -->
                    <iframe 
                        class="absolute top-0 left-0 bottom-0 right-0 w-full h-full" 
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div>
                    <span class="bg-red-100 text-red-600 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wider">Teori Dasar</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">01. Analisis Elastisitas Rambut Sebelum Smoothing</h3>
                    <p class="text-gray-600 text-sm">
                        Video ini menjelaskan pentingnya melakukan pengujian elastisitas rambut agar terhindar dari risiko rambut putus atau terbakar saat pengaplikasian obat step 1.
                    </p>
                </div>
            </div>

            <!-- Video Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 p-4">
                <div class="relative overflow-hidden w-full pt-[56.25%] rounded-xl bg-black mb-4">
                    <iframe 
                        class="absolute top-0 left-0 bottom-0 right-0 w-full h-full" 
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div>
                    <span class="bg-blue-100 text-blue-600 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wider">Praktik Lapangan</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">02. Teknik Pembagian Rambut (Sectioning) yang Rapi</h3>
                    <p class="text-gray-600 text-sm">
                        Kunci pelurusan yang rata dimulai dari sectioning. Di video ini diulas cara membagi rambut menjadi 4 bagian utama untuk mempermudah proses catok.
                    </p>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 p-4">
                <div class="relative overflow-hidden w-full pt-[56.25%] rounded-xl bg-black mb-4">
                    <iframe 
                        class="absolute top-0 left-0 bottom-0 right-0 w-full h-full" 
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div>
                    <span class="bg-green-100 text-green-600 text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wider">Teknik Catok</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">03. Menentukan Suhu Catokan Berdasarkan Kondisi Rambut</h3>
                    <p class="text-gray-600 text-sm">
                        Suhu terlalu panas bikin rambut kering, kurang panas bikin tidak lurus. Pelajari standar suhu terbaik untuk rambut virgin, berwarna, hingga sensitif.
                    </p>
                </div>
            </div>

            <!-- Video Card 4 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 p-4">
                <div class="relative overflow-hidden w-full pt-[56.25%] rounded-xl bg-black mb-4">
                    <iframe 
                        class="absolute top-0 left-0 bottom-0 right-0 w-full h-full" 
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div>
                    <span class="bg-purple-100 text-unguTua text-xs font-bold px-2.5 py-1 rounded-md uppercase tracking-wider">Finishing</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2">04. Aplikasi Neutralizer (Step 2) & Cara Bilas</h3>
                    <p class="text-gray-600 text-sm">
                        Proses penguncian bentuk rambut. Tonton durasi ideal pendiaman neutralizer dan cara membilasnya tanpa merusak hasil kelurusan yang sudah dibuat.
                    </p>
                </div>
            </div>

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