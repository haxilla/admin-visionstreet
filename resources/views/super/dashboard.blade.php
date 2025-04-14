@include('super.header.doctype')
@include('super.header.topnav')

<body class="min-h-screen bg-black text-white flex flex-col pt-20">

    {{-- Header --}}
    <header class="text-center py-10 backdrop-blur-xl bg-white/5 border-b border-white/10 shadow-inner">
        <h1 class="text-4xl md:text-5xl font-orbitron uppercase text-sky-400 drop-shadow-md">
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
            <!--
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
                <a href="/super/logs" class="block p-6 rounded-xl bg-gradient-to-br from-yellow-400 to-orange-500 hover:from-orange-500 hover:to-yellow-400 transition text-center shadow-lg hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">System Logs</h3>
                    <p class="text-sm text-white/70">View error and activity logs</p>
                </a>
            </div>
            -->
            <div class="grid gap-6 md:grid-cols-2">
                 <!-- ⚙️ Settings -->
                <a href="/super/settings" class="block p-6 rounded-xl bg-gradient-to-br from-sky-600 to-cyan-400 hover:from-sky-500 hover:to-cyan-300 transition text-center shadow-lg hover:shadow-xl">
                  <h3 class="text-xl font-bold text-white mb-2">Settings</h3>
                  <p class="text-sm text-white/70">System configuration</p>
                </a>

                <!-- 📊 System Logs -->
                <a href="/super/logs" class="block p-6 rounded-xl bg-gradient-to-br from-slate-800 to-slate-900 hover:from-slate-700 hover:to-slate-800 transition text-center shadow-lg hover:shadow-xl">
                  <h3 class="text-xl font-bold text-sky-300 mb-2">System Logs</h3>
                  <p class="text-sm text-white/70">View error and activity logs</p>
                </a>

                <!-- 🧠 Insights -->
                <a href="/super/insights" class="block p-6 rounded-xl bg-gradient-to-br from-violet-800 to-indigo-900 hover:from-indigo-800 hover:to-violet-700 transition text-center shadow-lg hover:shadow-xl">
                  <h3 class="text-xl font-bold text-cyan-200 mb-2">Insights</h3>
                  <p class="text-sm text-white/70">Analyze patterns and data</p>
                </a>

                <!-- 🔐 Access Control -->
                <a href="/super/access" class="block p-6 rounded-xl bg-gradient-to-br from-blue-800 to-cyan-600 hover:from-cyan-700 hover:to-blue-600 transition text-center shadow-lg hover:shadow-xl">
                  <h3 class="text-xl font-bold text-white mb-2">Access Control</h3>
                  <p class="text-sm text-white/70">Manage users and permissions</p>
                </a>

            </div>

        </div>
    </main>

    {{-- Footer --}}


    @include('super.footer.main')
</body>
