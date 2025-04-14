<!--
<nav class="fixed top-0 left-0 w-full h-16 bg-white/5 backdrop-blur-lg border-b border-white/10 shadow-md z-50 flex items-center justify-between px-6">
<a href="/super/dashboard" class="inline-flex items-center px-5 py-2 bg-fuchsia-600 hover:bg-fuchsia-700 active:bg-fuchsia-800 text-black font-extrabold text-base uppercase tracking-[0.25em] border-4 border-yellow-300 -skew-x-6 shadow-inner transition-all duration-200">
    VISION STREET
</a>






    <div class="flex items-center space-x-6">
        <a href="/super/dashboard" class="text-sm text-white/80 hover:text-white">Dashboard</a>
        <a href="/super/settings" class="text-sm text-white/80 hover:text-white">Settings</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="text-sm text-red-400 underline hover:text-red-300 bg-transparent border-none p-0 cursor-pointer">
                Logout
            </button>
        </form>
    </div>
</nav>
-->
<nav class="fixed top-0 left-0 w-full h-20 z-50 px-6 flex items-center justify-between 
            bg-gradient-to-r from-[#1a0e2a] via-[#2b0a2e] to-[#5c1f1f] 
            shadow-md">

    {{-- Logo on the left --}}
    <div class="flex items-center space-x-3">
        <img src="{{ asset('images/vision-street-nav-logo-1.jpg') }}" 
             alt="Vision Street Logo" 
             class="h-12 w-auto object-contain select-none" />
    </div>

    {{-- Navigation links on the right --}}
    <div class="flex items-center space-x-6">
        <a href="/super/dashboard" class="text-sm text-white/80 hover:text-white transition">Dashboard</a>
        <a href="/super/settings" class="text-sm text-white/80 hover:text-white transition">Settings</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="text-sm text-red-400 underline hover:text-red-300 bg-transparent border-none p-0 cursor-pointer">
                Logout
            </button>
        </form>
    </div>
</nav>
