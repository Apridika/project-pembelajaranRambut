<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelajaran Pelurusan Rambut - SMKN 3 Blitar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Kustomisasi warna sesuai gambar referensi klien
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kremBg: '#FAF6F0',   // Warna background lembut
                        unguTua: '#5B1963',  // Warna teks judul "Pelurusan Rambut"
                        coralPink: '#FF8A8A' // Warna tombol "Daftar"
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-kremBg min-h-screen text-gray-800 font-sans">

    <?php include 'components/navbar.php'; ?>

    <header class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold text-unguTua leading-tight">
                Pelurusan Rambut
            </h1>
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed max-w-lg">
                Pelurusan rambut merupakan salah satu teknik penataan rambut yang bertujuan untuk mengubah tekstur
                rambut menjadi lebih lurus, rapi, dan mudah diatur.
            </p>
            <div class="flex items-center space-x-4 pt-4">
                <a href="#"
                    class="border border-black text-black px-8 py-3 rounded-full font-semibold text-lg hover:bg-black hover:text-white transition shadow-sm w-36 text-center">Masuk</a>
                <a href="#"
                    class="bg-coralPink text-white px-8 py-3 rounded-full font-semibold text-lg hover:opacity-90 transition shadow-sm w-36 text-center">Daftar</a>
            </div>
        </div>

        <div class="w-full">
            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=1000"
                alt="Proses Pelurusan Rambut" class="w-full h-auto rounded-lg shadow-md object-cover">
        </div>
    </header>

    <footer class="max-w-7xl mx-auto px-6 pt-16 pb-8">
        <div
            class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="text-2xl font-bold text-unguTua">
                Tata Kecantikan Kulit dan Rambut <br class="hidden md:block"> SMKN 3 Blitar
            </h2>
            <div class="w-48 h-1.5 bg-gradient-to-r from-unguTua to-coralPink rounded-full"></div>
        </div>
    </footer>

</body>

</html>