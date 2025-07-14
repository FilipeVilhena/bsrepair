<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


        </nav>
        <header class="bg-white py-16 shadow">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Buy Genuine Windows & Office Keys</h1>
                <p class="text-lg text-gray-600 mb-6">Instant delivery. Secure payment. Affordable prices.</p>
                <a href="#" class="inline-block bg-blue-700 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-800 transition">Shop Now</a>
            </div>
        </header>
        <section class="container mx-auto my-12 px-4">
            <div class="flex flex-col md:flex-row gap-8 justify-center">
                <div class="bg-white rounded-lg shadow p-8 flex-1 text-center">
                    <h3 class="text-2xl font-bold mb-2">Windows Keys</h3>
                    <p class="text-gray-600 mb-4">Activate your Windows OS with genuine product keys for Windows 10, 11, and more.</p>
                    <a href="#" class="inline-block border border-blue-700 text-blue-700 px-6 py-2 rounded hover:bg-blue-700 hover:text-white transition">View Windows Keys</a>
                </div>
                <div class="bg-white rounded-lg shadow p-8 flex-1 text-center">
                    <h3 class="text-2xl font-bold mb-2">Office Keys</h3>
                    <p class="text-gray-600 mb-4">Get Microsoft Office keys for Office 2016, 2019, 2021, and Office 365 subscriptions.</p>
                    <a href="#" class="inline-block border border-blue-700 text-blue-700 px-6 py-2 rounded hover:bg-blue-700 hover:text-white transition">View Office Keys</a>
                </div>
            </div>
        </section>
        <footer class="bg-blue-700 text-white text-center py-4">
            &copy; {{ date('Y') }} KeyForAll. All rights reserved.
        </footer>
    </body>
</x-guest-layout>
