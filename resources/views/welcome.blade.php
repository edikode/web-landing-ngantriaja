<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="description" content"description">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('common/css/app.css') }}">

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#button-mobile').click(function() {
                $('#menu').toggleClass('hidden');
            });

        })
    </script> --}}
</head>

<body>

    <header>
        <div class="bg-gradient-to-r from-cyan-400 to-light-blue-500">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row">
                    <div
                        class="flex items-center justify-between px-4 py-4 lg:py-0 border-b border-rose-300 lg:border-b-0">
                        <div class="">
                            <a href="#" class="font-semibold uppercase text-white">NgantriAja</a>
                        </div>
                        <div>
                            <button id="button-mobile" class="text-white focus:outline-none block lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div id="menu" class="hidden lg:flex flex-col lg:flex-row justify-end w-full py-3 lg:py-0 ">
                        <div class="flex flex-col lg:flex-row">
                            <a href="#" class="block px-4 py-2 lg:py-5 text-gray-200 hover:text-white">Home</a>
                            <a href="#" class="block px-4 py-2 lg:py-5 text-gray-200 hover:text-white">Manfaat</a>
                            <a href="#" class="block px-4 py-2 lg:py-5 text-gray-200 hover:text-white">Tutorial</a>

                            <a href="#" class="block px-4 py-2 lg:py-5 text-gray-200 hover:text-white">Sign Up</a>
                            <a href="#" class="block px-4 py-2 lg:py-5 text-gray-200 hover:text-white">Login</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="antialiased items-center justify-center flex" style="height: 500px">
        <div class="container">
            <div class="w-full flex flex-col lg:flex-row justify-between items-center py-10">
                <div class="margin-auto">
                    <div class="text-2xl font-bold mb-6">Ngantri Aja</div>
                    <div class="leading-relaxed text-gray-500 text-lg mb-5">
                        Aplikasi berbasis web untuk mengelola antrian secara online <br />
                        sehingga pelanggan bisa antri dari mana saja. <br />
                        Mengatasi antrian yg sangat membosankan menjadi menyenangkan.
                    </div>

                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring focus:ring-cyan-300 text-white rounded h-10 inline-flex items-center justify-center px-4">
                        Selengkapnya
                    </button>
                </div>
                <div class="w-1/2">
                    <div class="flex justify-center items-center">
                        <img src="assets/images/hero-image.svg" alt="hero image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 antialiased">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row py-10 items-center justify-between">
                <div class="px-10">
                    <div class="text-2xl font-bold mb-6">Anda Owner Bisnis <br /> Butuh sistem antrian ?</div>
                    <div class="leading-relaxed text-gray-500 text-lg mb-5">
                        Daftarkan segera bisnis anda untuk dapat menggunakan aplikasi antrian dari ngantriaja.com
                    </div>

                    <p class="my-5 text-red-500">
                        ** Gratis untuk 10 Pendaftar pertama
                    </p>

                    <button
                        class="bg-light-blue-500 hover:bg-light-blue-600 focus:outline-none focus:ring focus:ring-light-blue-300 text-white rounded h-10 inline-flex items-center justify-center px-4 mr-3">
                        Daftar Sekarang
                    </button>
                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring focus:ring-cyan-300 text-white rounded h-10 inline-flex items-center justify-center px-4">
                        Pelajari Detail
                    </button>
                </div>
                <div class="w-1/3">
                    <div class="flex justify-center items-center">
                        <img src="assets/images/hero-image.svg" alt="hero image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white antialiased">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row py-10 justify-between items-center">
                <div class="w-3/4">
                    <div class="flex justify-center items-center">
                        <img src="assets/images/hero-image.svg" alt="hero image">
                    </div>
                </div>
                <div class="px-10">
                    <div class="text-2xl font-bold mb-6 text-center">Anda Ingin Mengantri ?</div>
                    <div class="leading-relaxed text-gray-500 text-lg mb-6">
                        Cek apakah tujuan anda sudah terdaftar dalam sistem
                        kami. Tersedia banyak sekali layanan mulai dari kesehatan,
                        Pemerintahan, Tempat makan dan masih banyak lagi.

                    </div>

                    <div class="text-center">
                        <button
                            class="bg-cyan-500 hover:bg-cyan-600 focus:outline-none focus:ring focus:ring-cyan-300 text-white rounded h-10 inline-flex items-center justify-center px-4">
                            Antri Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-gray-100">
        <div class="container mx-auto py-5">
            <div class="text-center text-3xl font-bold mt-10">
                Manfaat Pakai NgantriAja
            </div>
            <div class="flex justify-around items-center">
                <div>
                    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                            </div>
                            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                                <div class="max-w-md mx-auto">
                                    <div class="text-2xl">
                                        Bagi Pemilik Bisnis
                                    </div>
                                    <div class="divide-y divide-gray-200">
                                        <div
                                            class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                            <p>Beberapa manfaat yang akan didapat bagi perusahaan:</p>
                                            <ul class="list-disc space-y-2">
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">
                                                        Mengubah sistem antrian konfensional menjadi digital
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">
                                                        Sistem antrian terintegrasi dengan berbagai platform ngantriaja
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">Mendapat admin panel untuk kelola daftar antrian
                                                        setiap hari</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                            <p>Baca detail mengenai Pemilik bisnis?</p>
                                            <p>
                                                <a href="#" class="text-cyan-600 hover:text-cyan-700"> Baca Sekarang
                                                    &rarr; </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                            </div>
                            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                                <div class="max-w-md mx-auto">
                                    <div class="text-2xl">
                                        Bagi Pengguna Antrian
                                    </div>
                                    <div class="divide-y divide-gray-200">
                                        <div
                                            class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                            <p>Beberapa manfaat yang akan didapat bagi Pengguna Antrian:</p>
                                            <ul class="list-disc space-y-2">
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">
                                                        Bisa daftar antrian hanya dengan aplikasi android anda
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">
                                                        Bebas tentukan jadwal, dan monitoring pendaftaran anda secara
                                                        realtime
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                    <span class="h-6 flex items-center sm:h-7">
                                                        <svg class="flex-shrink-0 h-5 w-5 text-cyan-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                    <p class="ml-2">Kamu bisa mengantri darimana saja dan datang jika
                                                        antrian sudah dekat</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                            <p>Baca detail mengenai Pengguna Antrian?</p>
                                            <p>
                                                <a href="#" class="text-cyan-600 hover:text-cyan-700"> Baca Sekarang
                                                    &rarr; </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto py-5">
            <div class="text-center text-3xl font-bold mt-10 mb-5">
                Masih Bingung Penggunaannya ?
            </div>
            <p class="text-center leading-relaxed text-lg text-gray-500 mb-6">
                Berikut sudah kami sediakan artikel gimana cara kamu menggunakan <br />
                aplikasi antrian kami
            </p>

            <div class="py-5 mb-5 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="flex shadow-lg rounded overflow-hidden">
                    <div class="flex-none w-48 relative">
                        <img src="assets/images/blog.jpg" alt="blog"
                            class="absolute inset-0 w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <div class="mb-3">
                            <a href="#" class="text-xl font-semibold text-cyan-500 hover:text-cyan-600">
                                Cara menggunakan ngantriaja sebagai pemilik bisnis
                            </a>
                        </div>
                        <div class="leading-relaxed text-gray-800 mb-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur mollitia optio debitis
                            laudantium est amet, fugiat quis corrupti veritatis nam, sint dignissimos? Accusamus unde
                            eaque molestiae animi, praesentium perferendis dolore?
                        </div>

                        <a href="#" class="text-cyan-500 hover:text-cyan-600 font-semibold">Baca Detail &rarr;</a>
                    </div>
                </div>

                <div class="flex shadow-lg rounded overflow-hidden">
                    <div class="flex-none w-48 relative">
                        <img src="assets/images/blog.jpg" alt="blog"
                            class="absolute inset-0 w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <div class="mb-3">
                            <a href="#" class="text-xl font-semibold text-cyan-500 hover:text-cyan-600">
                                Cara menggunakan ngantriaja sebagai pengguna
                                antrian
                            </a>
                        </div>
                        <div class="leading-relaxed text-gray-800 mb-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur mollitia optio debitis
                            laudantium est amet, fugiat quis corrupti veritatis nam, sint dignissimos? Accusamus unde
                            eaque molestiae animi, praesentium perferendis dolore?
                        </div>

                        <a href="#" class="text-cyan-500 hover:text-cyan-600 font-semibold">Baca Detail &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- card --}}
    <div class="flex items-center justify-center bg-gray-100" style="height: 500px">
        <div class="w-5/12">
            <div
                class="bg-white shadow-xl rounded-xl overflow-hidden transform rotate-3 hover:rotate-0 transition-all duration-200 hover:shadow">
                <div class="px-8 py-5 leading-relaxed text-xl text-gray-800">
                    <svg width="45" height="36" class="mb-5 fill-current text-blue-100">
                        <path
                            d="M13.415.001C6.07 5.185.887 13.681.887 23.041c0 7.632 4.608 12.096 9.936 12.096 5.04 0 8.784-4.032 8.784-8.784 0-4.752-3.312-8.208-7.632-8.208-.864 0-2.016.144-2.304.288.72-4.896 5.328-10.656 9.936-13.536L13.415.001zm24.768 0c-7.2 5.184-12.384 13.68-12.384 23.04 0 7.632 4.608 12.096 9.936 12.096 4.896 0 8.784-4.032 8.784-8.784 0-4.752-3.456-8.208-7.776-8.208-.864 0-1.872.144-2.16.288.72-4.896 5.184-10.656 9.792-13.536L38.183.001z">
                        </path>
                    </svg>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit numquam velit natus quo, asperiores
                    similique dolores magnam ut aspernatur eaque, beatae excepturi, neque ducimus vitae veritatis
                    provident eos id incidunt.
                </div>
                <div class="px-8 py-5 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                            <img alt="foto profil" class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://avatars.githubusercontent.com/u/27324373?v=4">
                        </div>
                        <div class="text-white">
                            Edi Siswanto
                        </div>
                    </div>

                    <a href="#" class="text-white text-opacity-50 hover:text-opacity-75">
                        <svg width="33" height="32" fill="currentColor">
                            <path
                                d="M32.411 6.584c-1.113.493-2.309.826-3.566.977a6.228 6.228 0 002.73-3.437 12.4 12.4 0 01-3.944 1.506 6.212 6.212 0 00-10.744 4.253c0 .486.056.958.16 1.414a17.638 17.638 0 01-12.802-6.49 6.208 6.208 0 00-.84 3.122 6.212 6.212 0 002.762 5.17 6.197 6.197 0 01-2.813-.777v.08c0 3.01 2.14 5.52 4.983 6.091a6.258 6.258 0 01-2.806.107 6.215 6.215 0 005.803 4.312 12.464 12.464 0 01-7.715 2.66c-.501 0-.996-.03-1.482-.087a17.566 17.566 0 009.52 2.79c11.426 0 17.673-9.463 17.673-17.671 0-.267-.007-.536-.019-.803a12.627 12.627 0 003.098-3.213l.002-.004z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gradient-to-r from-cyan-400 to-light-blue-500">
        <p class="p-5 container mx-auto text-white text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
    </footer>

    <script src="{{ asset('common/js/app.js') }}"></script>
</body>

</html>