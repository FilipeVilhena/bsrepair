<header id="main-header" class="bg-blue-800 shadow-md sticky top-0 z-50 transition-transform duration-300">
    <div class="container mx-auto flex items-center justify-between py-3 px-4">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2">
            <img src="/images/KeyForAll.png" alt="KeyForAll.png" class="h-25 w-20" />
            <span class="text-xl font-bold text-white">KeyForAll</span>
        </a>
        <!-- Navigation -->
        <nav class="flex gap-6 items-center">
            <a href="/sobre" class="text-white font-semibold hover:text-blue-900 transition-colors duration-200">Sobre Nós</a>
        </nav>
        <!-- Auth Dropdown -->
        @auth
        <div class="relative group">
            <button class="flex items-center gap-2 px-5 py-2 bg-blue-800 text-white rounded-full font-bold shadow hover:bg-blue-500 transition-colors duration-200 focus:outline-none">
                <span>{{ Auth::user()->name }}</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-200">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-blue-950 hover:bg-blue-50 rounded-t-lg transition-colors duration-200">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-blue-950 hover:bg-blue-50 rounded-b-lg transition-colors duration-200">Logout</button>
                </form>
            </div>
        </div>
        @else
        <div class="relative group">
            <button class="flex items-center gap-2 px-5 py-2 bg-blue-950 text-white rounded-full font-bold shadow hover:bg-blue-600 transition-colors duration-200 focus:outline-none">
                <span>Registar/Login</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity duration-400">
                <a href="/register" class="block px-4 py-2 text-blue-950 hover:bg-blue-50 rounded-t-lg transition-colors duration-200">Registar</a>
                <a href="/login" class="block px-4 py-2 text-blue-950 hover:bg-blue-50 rounded-b-lg transition-colors duration-200">Login</a>
            </div>
        </div>
        @endauth
    </div>
</header>

<script>
    let lastScroll = 0;
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > lastScroll && currentScroll > 50) {
            // Scroll down
            header.style.transform = 'translateY(-100%)';
        } else {
            // Scroll up
            header.style.transform = 'translateY(0)';
        }
        lastScroll = currentScroll;
    });
</script>
