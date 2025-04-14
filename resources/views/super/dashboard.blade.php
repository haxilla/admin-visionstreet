@include('super.header.doctype')
<body>
<h1 class="text-2xl font-bold">Super Dashboard</h1>
<p>Welcome, {{ auth()->user()->email }}</p>

<form method="POST" action="{{ route('logout') }}" class="inline">
    @csrf
    <button type="submit" class="text-sm text-red-400 underline hover:text-red-300 bg-transparent border-none p-0">
        Logout
    </button>
</form>
</body>