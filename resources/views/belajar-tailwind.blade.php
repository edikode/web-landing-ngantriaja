<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('common/css/app.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#button-mobile').click(function() {
                $('#menu').toggleClass('hidden');
            });

            // $('#button-mobile').on('')
        })
    </script>
</head>

<body>

    <header>
        <div class="bg-gradient-to-br from-rose-500 to-pink-500">
            <div class="flex flex-col lg:flex-row">
                <div class="flex items-center justify-between px-4 py-4 lg:py-0 border-b border-rose-300 lg:border-b-0">
                    <div>
                        <a href="#" class="font-semibold uppercase text-white">Brand</a>
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

                <div id="menu"
                    class="hidden lg:flex flex-col lg:flex-row justify-between w-full py-3 lg:py-0 transform translate-x-0 transition-all duration-200">
                    <div class="flex flex-col lg:flex-row">
                        <a href="#" class="block px-4 py-2 lg:py-5 text-rose-200 hover:text-white">Blog</a>
                        <a href="#" class="block px-4 py-2 lg:py-5 text-rose-200 hover:text-white">Galery</a>
                        <a href="#" class="block px-4 py-2 lg:py-5 text-rose-200 hover:text-white">About</a>
                    </div>
                    <div class="flex flex-col lg:flex-row">
                        <a href="#" class="block px-4 py-2 lg:py-5 text-rose-200 hover:text-white">Sign Up</a>
                        <a href="#" class="block px-4 py-2 lg:py-5 text-rose-200 hover:text-white">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="bg-gray-200 min-h-screen items-center justify-center flex">
        <div class="w-full">
            <div class="p-4">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="bg-gray-500 w-full h-32 lg:bg-gray-900"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                    <div class="bg-gray-500 w-full h-32"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-300 antialiased min-h-screen items-center justify-center flex">
        <div class="w-full lg:w-3/4">
            <div class="bg-white p-8 shadow-lg rounded-lg">
                <div class="flex">
                    <div class="mr-2">
                        <button class="btn btn-secondary">
                            Secondary
                        </button>
                    </div>
                    <div class="mr-2">
                        <button class="btn btn-primary">
                            Primary
                        </button>
                    </div>
                    <div class="mr-2">
                        <button
                            class="bg-green-500 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-300 text-white rounded h-10 inline-flex items-center justify-center px-4">
                            Success
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- dark mode sesuai theme --}}
    <div class="antialiased flex items-center justify-center min-h-screen bg-gray-200 dark:bg-gray-700">
        <div class="w-5/12">
            <div class="bg-white dark:bg-gray-800 shadow p-4 mb-6 rounded-lg flex items-center justify-between">
                <div class="font-semibold text-lg text-gray-800 dark:text-white">NgantriAja</div>

                <div>
                    <button class="focus:outline-none w-4 h-4 bg-gray-200 rounded-full mr-2"></button>
                    <button class="focus:outline-none w-4 h-4 bg-black rounded-full"></button>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
                <div class="px-10 py-8">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h1>
                    <div class="leading-relaxed text-gray-500 dark:text-gray-300 text-lg">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus in
                        natus voluptates odit
                        autem? Deleniti cum iure quod, ipsam fugit ad ducimus quia tempora nemo, nesciunt ratione sequi
                        unde repellat!
                    </div>
                </div>
                <div
                    class="px-10 py-6 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-900 dark:text-gray-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </div>

    {{-- card --}}
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
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
                            <img class="w-10 h-10 rounded-full border-2 border-white"
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

    {{-- colors --}}
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-1/2">
            <div class="bg-white shadow p-6 rounded">
                <div class="flex flex-wrap">
                    <div class="bg-true-gray-500 w-10 h-10 rounded mr-2"></div>
                    <div class="bg-light-blue-500 w-10 h-10 rounded mr-2"></div>
                    <div class="bg-lime-color-500 w-10 h-10 rounded mr-2"></div>
                    <div class="bg-emerald-color-500 w-10 h-10 rounded mr-2"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('common/js/app.js') }}"></script>
</body>

</html>