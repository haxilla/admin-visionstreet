@include('admin.header.doctype')

<body class="h-full w-full flex items-center justify-center px-4">
<div class="bg-black/60 backdrop-blur-sm border border-white/20 p-8 md:p-10 rounded-md w-full max-w-sm shadow-xl">
  <h1 class="text-center text-white text-sm tracking-widest mb-6 border-b border-white/20 pb-2">ADMIN ACCESS</h1>

  <form method="POST" action="/admin/login" class="space-y-5">
    <div>
      <label for="username" class="text-xs text-white/70 uppercase">Username</label>
      <input type="text" id="username" name="username"
             class="w-full mt-1 px-3 py-2 bg-black/70 text-white border border-white/30 rounded-sm outline-none focus:ring-2 focus:ring-white transition" required />
    </div>

    <div>
      <label for="password" class="text-xs text-white/70 uppercase">Password</label>
      <input type="password" id="password" name="password"
             class="w-full mt-1 px-3 py-2 bg-black/70 text-white border border-white/30 rounded-sm outline-none focus:ring-2 focus:ring-white transition" required />
    </div>

    <button type="submit"
            class="w-full mt-4 text-center py-2 tracking-widest text-sm uppercase font-bold bg-gradient-to-r from-white to-gray-300 text-black hover:from-gray-100 hover:to-white transition border border-white/30 rounded-sm">
      Enter
    </button>
  </form>

  <!-- Disclaimer below -->
  <p class="mt-6 text-[0.65rem] text-center text-white/40 border-t border-white/10 pt-4">
    🔐 Authorized personnel only
  </p>
</div>


    {{-- RECAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'super_login'}).then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

    {{-- footer --}}
    @include('super.footer.main')
</body>
</html>