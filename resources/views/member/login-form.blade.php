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
<body class="min-h-screen bg-[#0A3A60] text-white flex items-center justify-center px-4">

  <div class="w-full max-w-4xl bg-white rounded-3xl overflow-hidden shadow-2xl grid md:grid-cols-2">
    
    <!-- Left Content: Login Form -->
    <div class="bg-[#0A3A60] p-10 flex flex-col justify-between space-y-10">
      
      <!-- Logo -->
      <div>
        <img src="/images/vision-street-logo-left-sidebar-1.png" alt="Vision Street Logo" class="w-40 mb-6" />
        <h2 class="text-2xl font-bold text-white">Welcome Back</h2>
        <p class="text-sm text-white/70 mt-1">Sign in to your account</p>
      </div>

      <!-- Form -->
      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm mb-1">Email</label>
          <input type="email" id="email" name="email" required placeholder="you@example.com"
            class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label for="password" class="block text-sm mb-1">Password</label>
          <input type="password" id="password" name="password" required placeholder="••••••••"
            class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="accent-blue-500" />
            <span>Remember me</span>
          </label>
          <a href="#" class="text-blue-200 hover:underline">Forgot password?</a>
        </div>
        <button type="submit" class="w-full py-2 rounded-md bg-blue-500 hover:bg-blue-600 font-semibold text-white transition">
          Sign In
        </button>
      </form>
    </div>

    <!-- Right Content: Image -->
    <div class="bg-white p-4 flex items-center justify-center">
      <img src="/images/vision-street-right-side-login.jpg" alt="Workspace" class="rounded-2xl shadow-md object-cover w-full h-full max-h-[560px]" />
    </div>
  </div>

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
