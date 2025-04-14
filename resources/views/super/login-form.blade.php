@include('super.header.doctype')
<body class="flex flex-col min-h-screen text-white">

    {{-- Main content area that grows to fill space --}}
    <div class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-md mx-auto p-8 rounded-2xl backdrop-glow shadow-xl">
            <h1 class="text-4xl font-bold text-center mb-6 text-[#ffa600] tracking-[0.20em]">Vision Street</h1>

            <form method="post" action="{{ route('login.submit') }}" class="space-y-6">
                @csrf
                <!-- Form fields here -->
            </form>

            @if ($errors->any())
                <!-- Error block -->
            @endif
        </div>
    </div>

    {{-- reCAPTCHA disclaimer --}}
    <div class="text-xs text-gray-500 text-center mt-4 px-4">
        This site is protected by reCAPTCHA and the
        <a href="https://policies.google.com/privacy" class="underline" target="_blank">Privacy Policy</a> and
        <a href="https://policies.google.com/terms" class="underline" target="_blank">Terms of Service</a> apply.
    </div>

    {{-- Footer --}}
    <div class="text-center text-xs text-white/50 mt-2 mb-4">
        © 2025 Vision Street. All rights reserved.
    </div>

    @include('super.footer.main')
</body>
