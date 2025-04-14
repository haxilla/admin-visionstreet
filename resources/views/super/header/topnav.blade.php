<nav class="fixed top-0 left-0 w-full h-16 bg-white/5 backdrop-blur-lg border-b border-white/10 shadow-md z-50 flex items-center justify-between px-6">
<a href="/super/dashboard" class="flex items-center gap-3 px-4 py-2 rounded-md bg-white/10 hover:bg-white/20 transition group">
    {{-- Neon square logo block --}}
    <div class="w-6 h-6 bg-yellow-400 rounded-sm shadow-[0_0_10px_rgba(255,200,0,0.8)] group-hover:scale-105 transition-transform"></div>

    {{-- Bold glowing text --}}
    <span class="font-russo text-xl uppercase tracking-widest text-yellow-300 drop-shadow-[0_0_6px_rgba(255,200,0,0.6)] group-hover:text-yellow-200 transition">
        VISION STREET
    </span>
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