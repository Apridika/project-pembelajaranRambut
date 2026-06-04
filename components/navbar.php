<?php
// Mendapatkan nama file yang sedang dibuka (misal: index.php atau materi.php)
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- NAVIGATION BAR -->
<nav class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between relative">
    
    <!-- SISI KIRI: HAMBURGER & MENU DESKTOP -->
    <div class="flex items-center space-x-8">
        <!-- Tombol Hamburger (Hanya muncul di HP) -->
        <button onclick="toggleMenu()" class="flex flex-col space-y-1.5 focus:outline-none md:hidden z-50 relative">
            <span id="line1" class="w-6 h-0.5 bg-black transition-all duration-300"></span>
            <span id="line2" class="w-6 h-0.5 bg-black transition-all duration-300"></span>
            <span id="line3" class="w-6 h-0.5 bg-black transition-all duration-300"></span>
        </button>
        
        <!-- Menu Utama (Desktop) -->
        <div class="hidden md:flex items-center space-x-8 font-medium">
            <a href="index.php" class="<?= $current_page == 'index.php' ? 'text-black font-bold' : 'text-gray-500 hover:text-black transition' ?>">Home</a>
            <a href="materi.php" class="<?= $current_page == 'materi.php' ? 'text-black font-bold' : 'text-gray-500 hover:text-black transition' ?>">Materi</a>
            <a href="video.php" class="<?= $current_page == 'video.php' ? 'text-black font-bold' : 'text-gray-500 hover:text-black transition' ?> text-center leading-tight">Video Pembelajaran</a>
            <a href="kelas.php" class="<?= $current_page == 'kelas.php' ? 'text-black font-bold' : 'text-gray-500 hover:text-black transition' ?>">Ruang Kelas</a>
            <a href="karya.php" class="<?= $current_page == 'karya.php' ? 'text-black font-bold' : 'text-gray-500 hover:text-black transition' ?>">Karya Siswa</a>
        </div>
    </div>

    <!-- SISI KANAN: TOMBOL LOGIN/DAFTAR -->
    <div class="flex items-center space-x-4">
        <a href="#" class="border border-black text-black px-5 py-1.5 rounded-full text-sm font-medium hover:bg-black hover:text-white transition">Masuk</a>
        <a href="#" class="bg-coralPink text-white px-5 py-1.5 rounded-full text-sm font-medium hover:opacity-90 transition">Daftar</a>
    </div>

    <!-- ======================================================== -->
    <!-- SIDEBAR MENU MOBILE (KELUAR DARI KIRI) -->
    <!-- ======================================================== -->
    <div id="menu-overlay" onclick="toggleMenu()" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden opacity-0 transition-opacity duration-300"></div>

    <div id="mobile-menu" class="fixed top-0 left-0 bottom-0 w-72 bg-white z-40 shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between p-6 md:hidden">
        <div class="space-y-8 pt-12">
            <div class="border-b border-gray-100 pb-4">
                <h3 class="text-xl font-bold text-unguTua">SMKN 3 Blitar</h3>
                <p class="text-xs text-gray-400 font-medium">Tata Kecantikan Rambut</p>
            </div>
            
            <!-- Link Navigasi Mobile dengan Logika Aktif -->
            <div class="flex flex-col space-y-4 text-base font-semibold">
                <a href="index.php" class="px-4 py-2 rounded-xl flex items-center gap-3 <?= $current_page == 'index.php' ? 'text-unguTua bg-purple-50 font-bold' : 'text-gray-600 hover:bg-gray-50' ?>">🏠 <span>Home</span></a>
                <a href="materi.php" class="px-4 py-2 rounded-xl flex items-center gap-3 <?= $current_page == 'materi.php' ? 'text-unguTua bg-purple-50 font-bold' : 'text-gray-600 hover:bg-gray-50' ?>">📖 <span>Materi</span></a>
                <a href="video.php" class="px-4 py-2 rounded-xl flex items-center gap-3 <?= $current_page == 'video.php' ? 'text-unguTua bg-purple-50 font-bold' : 'text-gray-600 hover:bg-gray-50' ?>">🎥 <span>Video Belajar</span></a>
                <a href="kelas.php" class="px-4 py-2 rounded-xl flex items-center gap-3 <?= $current_page == 'kelas.php' ? 'text-unguTua bg-purple-50 font-bold' : 'text-gray-600 hover:bg-gray-50' ?>">🏫 <span>Ruang Kelas</span></a>
                <a href="karya.php" class="px-4 py-2 rounded-xl flex items-center gap-3 <?= $current_page == 'karya.php' ? 'text-unguTua bg-purple-50 font-bold' : 'text-gray-600 hover:bg-gray-50' ?>">✂️ <span>Karya Siswa</span></a>
            </div>
        </div>

        <div class="border-t border-gray-100 pt-4 text-center text-xs text-gray-400 font-medium">
            &copy; 2026 E-Learning Pelurusan Rambut
        </div>
    </div>
</nav>

<!-- SCRIPT JAVASCRIPT UNTUK TOGGLE HAMBURGER -->
<script>
    function toggleMenu() {
        const sidebar = document.getElementById('mobile-menu');
        const overlay = document.getElementById('menu-overlay');
        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');
        const line3 = document.getElementById('line3');

        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.classList.add('opacity-100'), 10);
            line1.classList.add('transform', 'rotate-45', 'translate-y-2');
            line2.classList.add('opacity-0');
            line3.classList.add('transform', '-rotate-45', '-translate-y-2');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.remove('opacity-100');
            setTimeout(() => overlay.classList.add('hidden'), 300);
            line1.classList.remove('transform', 'rotate-45', 'translate-y-2');
            line2.classList.remove('opacity-0');
            line3.classList.remove('transform', '-rotate-45', '-translate-y-2');
        }
    }
</script>