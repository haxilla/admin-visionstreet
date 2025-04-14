<nav class="fixed top-0 left-0 w-full h-16 bg-white/5 backdrop-blur-lg border-b border-white/10 shadow-md z-50 flex items-center justify-between px-6">
    <a href="/super/dashboard" class="relative inline-flex items-center gap-2 group">
        {{-- Glowing orb icon --}}
        <span class="inline-block h-3 w-3 rounded-full bg-yellow-400 shadow-[0_0_12px_2px_rgba(255,166,0,0.5)] animate-pulse"></span>

        {{-- Vision Street text --}}
        <span class="font-russo text-sm uppercase tracking-widest text-[#ffa600] group-hover:text-yellow-300 transition duration-200">
            VISION STREET
        </span>

        {{-- Fancy backdrop glow (optional flair) --}}
        <span class="absolute -inset-2 -z-10 rounded-md bg-white/5 backdrop-blur-sm border border-yellow-400/10 opacity-0 group-hover:opacity-100 transition"></span>
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