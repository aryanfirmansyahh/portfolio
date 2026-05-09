<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-950 text-white font-sans">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 w-full bg-gray-950/90 backdrop-blur-sm border-b border-gray-800 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="text-xl font-bold text-white">aryanfirmansyahh<span class="text-blue-400">.</span></span>
            <div class="hidden md:flex gap-8 text-sm text-gray-400">
                <a href="#about" class="hover:text-white transition">About</a>
                <a href="#projects" class="hover:text-white transition">Projects</a>
                <a href="#contact" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="min-h-screen flex items-center justify-center px-6 pt-20">
        <div class="text-center">
            <div class="w-28 h-28 rounded-full bg-blue-500 mx-auto mb-6 flex items-center justify-center text-4xl font-bold">
                AF
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Halo gw <span class="text-blue-400">Aryan</span> 👋
            </h1>
            <p class="text-gray-400 text-lg md:text-xl mb-8 max-w-xl mx-auto">
                Web Developer yang lagi belajar Laravel. Suka bikin hal-hal keren dari kode.
            </p>
            <a href="#projects" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full font-medium transition">
                Lihat project
            </a>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="py-20 px-6">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">About <span class="text-blue-400">Me</span></h2>
            <div class="grid md:grid-cols-2 gap-10">
                <div>
                    <p class="text-gray-400 leading-relaxed mb-4">
                        Gw adalah web developer yang passionate di dunia coding. Saat ini lagi fokus belajar Laravel dan membangun portfolio.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Gw percaya bahwa belajar konsisten setiap hari adalah kunci jadi developer yang handal.
                    </p>
                </div>
                <div class="flex flex-wrap gap-6">
                    @foreach(['Laravel', 'PHP', 'HTML', 'CSS', 'Tailwind', 'JavaScript'] as $skill)
                    <span class="bg-gray-800 border border-gray-700 text-gray-300 px-10 py-4 rounded-full text-sm">
                        {{ $skill }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="py-20 px-6 bg-gray-900">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">My <span class="text-blue-400">Projects</span></h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700 hover:border-blue-500 transition">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-4 text-2xl">🌐</div>
                    <h3 class="text-xl font-bold mb-2">Portfolio Website</h3>
                    <p class="text-gray-400 text-sm mb-4">Website portfolio pribadi yang dibangun dengan Laravel dan Tailwind CSS.</p>
                    <span class="text-xs bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full">Laravel</span>
                </div>
                <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700 hover:border-blue-500 transition">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4 text-2xl">🚀</div>
                    <h3 class="text-xl font-bold mb-2">Project Kedua</h3>
                    <p class="text-gray-400 text-sm mb-4">Deskripsi project lo yang kedua bisa ditaruh di sini.</p>
                    <span class="text-xs bg-purple-500/20 text-purple-400 px-3 py-1 rounded-full">PHP</span>
                </div>
                <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700 hover:border-blue-500 transition">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4 text-2xl">🎬</div>
                    <h3 class="text-x1 font-bold mb-2">Project ketiga</h3>
                    <p class="text-gray-400 text-sm mb-4">Saya juga seorang Graphic Designer.</p>
                    <span class="text-xs bg-orange-500/20 text-purple-400 px-3 py-1 rounded-full">Lets'go</span> 
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="py-20 px-6">
        <div class="max-w-lg mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Get In <span class="text-blue-400">Touch</span></h2>
            <p class="text-gray-400 mb-8">Ada project atau mau ngobrol? Hubungi gw!</p>
            <a href="aryan.firmansyahh:email@gmail.com" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full font-medium transition inline-block">
                Kirim Email
            </a>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="border-t border-gray-800 py-6 text-center text-gray-500 text-sm">
        Dibuat dengan menggunakan Laravel & Tailwind CSS
    </footer>

</body>
</html>