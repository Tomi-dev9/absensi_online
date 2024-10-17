<!DOCTYPE html>
<html lang="en">
<head>
    <title>SikilatAbsensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="app">
        <header class="bg-teal-600 text-white p-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">SikilatAbsensi</h1>
            <nav>
                <a class="mx-2" href="#">Home</a>
                <a class="mx-2" href="#">Sertifikat</a>
                <button @click="showLogin = true" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Log In
                </button>
            </nav>
        </header>

        <main class="text-center py-12 bg-teal-500 text-white">
            <h2 class="text-2xl font-bold">
                "Solusi terbaik untuk mencatat dan mengelola kehadiran peserta acara online."
            </h2>
        </main>

        <section class="py-8">
            <h3 class="text-xl font-bold text-center mb-6">Event yang sedang berlangsung</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Daftar Event -->
                @for ($i = 0; $i < 6; $i++)
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img
                            alt="People attending a webinar"
                            class="rounded-t-lg"
                            src="https://storage.googleapis.com/a1aa/image/ZgUNvAplXiJkIFVs7fFw1Fx6p1tqQLsONcOWrRdjKEhIAZzJA.jpg"
                            height="200" width="300"
                        />
                        <h4 class="text-lg font-bold mt-4">Webinar {{ $i + 1 }}</h4>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded mt-2">Daftar</button>
                    </div>
                @endfor
            </div>
        </section>

        <footer class="bg-teal-600 text-white text-center py-4">
            <p>© 2024 SIKILAT ABSENSI. All Rights Reserved.</p>
            <p>PBL-106</p>
        </footer>

        <!-- Login Modal -->
        <div v-if="showLogin" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
                <h3 class="text-xl font-bold mb-4 text-center">Login Admin</h3>
                <form @submit.prevent="handleLogin">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-bold mb-2">Username</label>
                        <input v-model="username" id="username" type="text" placeholder="Username..." 
                               class="w-full px-3 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-bold mb-2">Password</label>
                        <input v-model="password" id="password" type="password" placeholder="Password..." 
                               class="w-full px-3 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
                            Login
                        </button>
                    </div>
                    <p v-if="error" class="text-red-500 text-center mt-4">Username atau password salah!</p>
                </form>
                <button @click="showLogin = false" class="mt-4 text-gray-500 hover:text-gray-700">Tutup</button>
            </div>
        </div>
    </div>
</body>
</html>
