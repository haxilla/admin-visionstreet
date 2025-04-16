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
<body class="min-h-screen flex flex-col bg-[#0A3A60]">

  <!-- Page Content -->
  <div class="flex-1 flex items-center justify-center">
    <div class="w-full max-w-6xl flex flex-col md:flex-row bg-white rounded-2xl overflow-hidden shadow-2xl">

      <!-- Left Sidebar -->
      <div class="bg-[#0A3A60] w-full md:w-1/2 p-10 text-white flex flex-col justify-between space-y-10">
        <!-- Logo -->
        <div>
          <img src="/images/vision-street-logo-left-sidebar-1.png" alt="Vision Street Logo" class="w-44 mb-10" />
          <h2 class="text-2xl font-bold">Welcome Back</h2>
          <p class="text-sm text-white/80 mt-2">Sign in to your account</p>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST" class="space-y-5">
          <div>
            <label for="email" class="block text-sm mb-1">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com"
              class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-blue-400" required />
          </div>
          <div>
            <label for="password" class="block text-sm mb-1">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••"
              class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-blue-400" required />
          </div>
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center space-x-2">
              <input type="checkbox" class="accent-blue-500" />
              <span>Remember me</span>
            </label>
            <a href="#" class="text-blue-200 hover:underline">Forgot password?</a>
          </div>
          <button type="submit" class="w-full py-2 bg-blue-500 hover:bg-blue-600 rounded-md font-semibold text-white transition">Sign In</button>
        </form>
      </div>

      <!-- Right Image Section -->
      <div class="w-full md:w-1/2 bg-white p-6">
        <img src="/images/vision-street-right-side-login.jpg" alt="Vision Street Workspace"
          class="rounded-xl object-cover w-full h-full max-h-[680px] mx-auto shadow-md" />
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-white/50 text-xs py-4">
    This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy" class="underline">Privacy Policy</a> and
    <a href="https://policies.google.com/terms" class="underline">Terms of Service</a> apply.
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
