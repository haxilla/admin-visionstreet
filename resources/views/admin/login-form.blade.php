@include('admin.header.doctype')

<!DOCTYPE html>
<html lang="en" class="bg-black text-white">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login – Vision Street</title>

  <!-- Orbitron font -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS v4 (assumed already integrated in your Laravel project) -->
  <style>
    body {
      font-family: 'Orbitron', sans-serif;
      background: url('/images/vision-street-admin-black-1.png') center center / cover no-repeat;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-black bg-opacity-90 backdrop-blur-sm">

  <div class="w-full max-w-md px-6 py-8 bg-gradient-to-b from-zinc-900 via-zinc-800 to-black shadow-2xl rounded-xl border border-zinc-700/50">
    
    <h2 class="text-3xl font-bold text-white tracking-wide text-center mb-6 border-b border-white/10 pb-4">
      ADMIN ACCESS
    </h2>

    <form method="POST" action="/admin/login" class="space-y-6">
      @csrf

      <div>
        <label for="email" class="block text-sm text-gray-400 uppercase tracking-wider">Username</label>
        <input id="email" name="email" type="email" required
          class="w-full px-4 py-2 mt-1 bg-zinc-950 text-white border border-zinc-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 shadow-inner">
      </div>

      <div>
        <label for="password" class="block text-sm text-gray-400 uppercase tracking-wider">Password</label>
        <input id="password" name="password" type="password" required
          class="w-full px-4 py-2 mt-1 bg-zinc-950 text-white border border-zinc-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 shadow-inner">
      </div>

      <button type="submit"
        class="w-full py-2 text-black font-bold tracking-wide uppercase bg-gradient-to-r from-white to-cyan-400 hover:from-cyan-300 hover:to-white focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 rounded-md transition-all">
        Enter
      </button>

      <p class="text-xs text-center text-gray-500 pt-4 border-t border-zinc-800/50 mt-6">
        ⚠ Authorized personnel only
      </p>
    </form>
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