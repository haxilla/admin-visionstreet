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
<body class="min-h-screen bg-[#0A3A60] flex items-center justify-center px-4">

  <div class="w-full max-w-3xl bg-white rounded-3xl shadow-2xl overflow-hidden">

    <!-- Logo centered on top -->
    <div class="bg-[#0A3A60] px-8 pt-10 pb-6 text-center">
      <img src="/images/vision-street-logo-left-sidebar-1.png" alt="Vision Street Logo" class="w-44 mx-auto" />
    </div>

    <!-- Image banner (full-width, not awkwardly boxed) -->
    <div class="h-48 md:h-56 w-full overflow-hidden">
      <img src="/images/vision-street-right-side-login.jpg"
           alt="Workspace"
           class="w-full h-full object-cover object-center grayscale-[10%]" />
    </div>

    <!-- Form section -->
    <div class="p-8 md:p-10 bg-white space-y-6">

      <h2 class="text-2xl font-bold text-[#0A3A60] text-center">Welcome Back</h2>
      <p class="text-sm text-gray-600 text-center">Sign in to your Vision Street account</p>

      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type="password" id="password" name="password" placeholder="••••••••"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required />
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="accent-blue-500" />
            <span>Remember me</span>
          </label>
          <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
        </div>

        <button type="submit" class="w-full bg-[#0A3A60] hover:bg-[#114d84] text-white py-2 rounded-md font-semibold transition">
          Sign In
        </button>
      </form>
    </div>

    <!-- Footer Disclaimer (inside container, soft gray) -->
    <div class="text-[11px] text-center text-gray-400 px-6 pb-6">
      This site is protected by reCAPTCHA and the Google
      <a href="https://policies.google.com/privacy" class="underline">Privacy Policy</a> and
      <a href="https://policies.google.com/terms" class="underline">Terms of Service</a> apply.
      <br />&copy; 2025 Vision Street. All rights reserved.
    </div>

  </div>

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
