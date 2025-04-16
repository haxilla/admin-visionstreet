@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vision Street Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen bg-gray-900 relative flex flex-col">

  <!-- Background Image with Dark Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="/images/vision-street-right-side-login.jpg" alt="Vision Street Background"
         class="w-full h-full object-cover object-center" />
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Login Box Centered -->
  <main class="flex-1 flex items-center justify-center z-10 px-4">
    <div class="bg-white/95 rounded-xl shadow-xl max-w-md w-full p-8 md:p-10">
      <!-- Logo -->
      <div class="flex justify-center mb-8">
        <img src="/images/vision-street-logo-left-sidebar-1.png" alt="Vision Street Logo" class="w-44" />
      </div>

      <!-- Headline -->
      <h2 class="text-2xl font-bold text-center text-[#0A3A60] mb-2">Welcome Back</h2>
      <p class="text-sm text-center text-gray-600 mb-6">Sign in to your Vision Street account</p>

      <!-- Form -->
      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm mb-1 text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label for="password" class="block text-sm mb-1 text-gray-700">Password</label>
          <input type="password" id="password" name="password" placeholder="••••••••"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="accent-blue-500" />
            <span>Remember me</span>
          </label>
          <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
        </div>
        <button type="submit" class="w-full py-2 bg-[#0A3A60] hover:bg-blue-800 rounded-md text-white font-semibold transition">
          Sign In
        </button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="z-10 text-xs text-center text-white/70 px-4 py-4">
    This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy" class="underline">Privacy Policy</a> and
    <a href="https://policies.google.com/terms" class="underline">Terms of Service</a> apply.
    <br />
    &copy; 2025 Vision Street. All rights reserved.
  </footer>

</body>
</html>


  <!-- Footer -->
  @include('member.footer.main')

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
  <script>
    grecaptcha.ready(function () {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'super_login'}).then(function (token) {
            document.getElementById('recaptchaToken').value = token;
        });
    });
  </script>
</body>
