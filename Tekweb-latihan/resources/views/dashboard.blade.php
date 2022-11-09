<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-2xl p-3">DESTINATION</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <img class="max-w-xs m-auto flex" src="http://4.bp.blogspot.com/-kpe5Uchx7dA/U8Tc4mIepCI/AAAAAAAAAs8/3KHgRDzWBno/s1600/gambar+alam.jpg" alt="">
                    <hr class="mt-3">
                    <h1 class="text-center font-bold mt-1">Air Terjun</h1>
                    <a class="flex text-center m-auto hover:text-orange-600" href="#">Pemandangan air terjun desa penari sangatlah mantap sekali.</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img class="max-w-xs m-auto" src="https://lonelyplanetimages.imgix.net/a/g/hi/t/7410252f54aae034d11a5b124fb95d8d-pantai-koka.jpg" alt="">
                    <hr class="mt-3">
                    <h1 class="text-center font-bold mt-1">Pantai Perjuangan</h1>
                    <a class="flex text-center m-auto hover:text-orange-600" href="#">Desiran ombak benar benar luar biasa.</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
