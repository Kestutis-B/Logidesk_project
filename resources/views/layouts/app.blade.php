<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kestutis - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="container main-content-container">
                    @yield('content')
                    <div class="d-flex justify-content-center">
                        <img src="https://lh3.googleusercontent.com/Nd0ecj1ioiDG3AmmAlOdctcpojC7VA5WlPFWH7j4OLpQczpMjgAlYxIk54xoWuWalbuciLgE1AeMlbh2mx-dsZVhaBwyp6HikNHagjt0LsAwbKAi2mWuo7Dr80D4_pkh9nurQr_1shLvWAGhK1qzVM3k15Ek7PeJbevmbai8gQxkBRkIgJtwp2HMDXgHDur_GA7ms4qm3RkAKwT_E-9ya161hJFuLGYLhX8Ht6I3Q0llVTKsLY_jfI_h9OOOMMLAuOdblZFbMp_kh3-HF3Fbf39ygpAFoz-EBbB-CBrh2SM-gg97EF1XtUuqPBtig10bnicR78kiS1MdFFw9GEGT3QgFOKWdcIdNGIBqGnaO0V0HlJ7VEeJCe8gjoylwtG_IHMNsVqHTdBcQFw5ThF4e8l_1iS8m5Xv0Z8xR_E4L5wSPUj-qp9ieyJdQcqa4zyTDopubCdA0tESQZsrfzfHX3iKxmwxU-qX6h1a37__56L_669wrAO0O0XeByeDdQ4Jc0A0qW-t-wnFtyQl8kwj5BkucrTGQMC6h7elfEF61WaMieasgRV6G2j3iaoN59rHEeEmujX8jOEdOAQblYZEuBsRP_ggMU_2OAj8oKvfAWTs6GqDZFSeGvM5kSd-E2dZv3ugdwfgWsa_SIGeFNo3jkOhneC-h1efdVFYa79Np37T_7HxgSrtBxjGnP7GQYEgD3pSmBUGSAkod4m8UHwjsHGUx3y-l5PLirMB8bLGC9WNv5ivV4gt3R5bDKs3hKl57LWeS7-9-CX3vo9Z1av6qpb0G3z9xLAMHEBaMQZwcNbKx8TVw6cqIyxyqJ9QlWT288nrKglvR60BBoQOOLLSPCjxzxnJ1WHI4t_oI_lObFnc-uiru6y9ZnLZkQSxAWGfUCxlfJDHs180geZwKYBqOBQGEg1LbEtylS5naMccXL9WUNFl8=w804-h220-no?authuser=0" alt="no img">
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
