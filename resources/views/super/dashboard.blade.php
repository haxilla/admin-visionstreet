@include('super.header.doctype')

<body class="min-h-screen bg-black text-white flex flex-col">

    {{-- Header --}}
    <header class="text-center py-10 backdrop-blur-xl bg-white/5 border-b border-white/10 shadow-inner">
        <h1 class="text-4xl md:text-5xl font-russo uppercase text-[#ffa600] tracking-[0.25em] drop-shadow-md">
            Super Dashboard
        </h1>
        <p class="mt-2 text-white/80 text-sm">Welcome, <span class="font-semibold">{{ auth()->user()->email }}</span></p>
    </header>

    {{-- Main content --}}
    <main class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-2xl mx-auto px-6 py-12 bg-white/5 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/10">

            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-orange-400">Quick Actions</h2>
                <p class="text-sm text-white/60">Choose where to go next</p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <a href="/super/stats" class="block p-6 rounded-xl bg-gradient-to-br from-purple-600 to-indigo-600 hover:from-indigo-600 hover:to-purple-600 transition text-center shadow-lg hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">View Stats</h3>
                    <p class="text-sm text-white/70">Check system metrics and reports</p>
                </a>
                <a href="/super/users" class="block p-6 rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 hover:from-rose-500 hover:to-pink-500 transition text-center shadow-lg hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">Manage Users</h3>
                    <p class="text-sm text-white/70">Administer user accounts</p>
                </a>
                <a href="/super/settings" class="block p-6 rounded-xl bg-gradient-to-br from-green-500 to-teal-500 hover:from-teal-500 hover:to-green-500 transition text-center shadow-lg hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">Settings</h3>
                    <p class="text-sm text-white/70">System configuration</p>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block p-6 rounded-xl bg-gradient-to-br from-red-500 to-rose-700 hover:from-rose-700 hover:to-red-500 transition text-center shadow-lg hover:shadow-xl">
                    @csrf
                    <button type="submit" class="text-xl font-bold text-white w-full">Logout</button>
                    <p class="mt-1 text-sm text-white/70">Sign out of this session</p>
                </form>
            </div>
        </div>
    </main>

    {{-- Footer --}}


    @include('super.footer.main')
</body>
