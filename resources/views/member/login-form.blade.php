@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | VISIONSTREET</title>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Barlow', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-[#1a2930] via-[#264c66] to-[#6bb3e5] min-h-screen flex items-center justify-center relative overflow-hidden">

  <div class="absolute inset-0 bg-[url('/images/vision-street-member-login-1.jpg')] bg-cover bg-center opacity-20"></div>

  <div class="relative z-10 w-full max-w-md px-6 py-10 bg-white/10 backdrop-blur-md rounded-xl shadow-xl border border-white/30">
    <div class="mb-8 text-center">
      <img src="/images/visionStreetCrop-transparent.png" alt="VisionStreet" class="mx-auto h-10">
      <h2 class="text-2xl font-bold text-white mt-4">Welcome Back</h2>
      <p class="text-sm text-white/70">Please sign in to continue</p>
    </div>

    <form action="/login" method="POST" class="space-y-6">
      <div>
        <label class="block text-white text-sm mb-1" for="email">Email</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 bg-white/20 text-white placeholder-white/60 rounded-md border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="you@example.com">
      </div>

      <div>
        <label class="block text-white text-sm mb-1" for="password">Password</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 bg-white/20 text-white placeholder-white/60 rounded-md border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="••••••••">
      </div>

      <div class="flex justify-between items-center">
        <label class="flex items-center text-white text-sm">
          <input type="checkbox" class="mr-2 accent-blue-500">
          Remember me
        </label>
        <a href="#" class="text-sm text-blue-300 hover:underline">Forgot Password?</a>
      </div>

      <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition">Sign In</button>
    </form>

    <p class="text-xs text-white/60 mt-6 text-center">
      By continuing, you agree to our <a href="#" class="underline text-white">Terms</a> & <a href="#" class="underline text-white">Privacy Policy</a>.
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
    @include('member.footer.main')
</body>
</html>