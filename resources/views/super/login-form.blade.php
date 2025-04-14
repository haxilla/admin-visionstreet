<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Vision Street</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
		body {
		  background-image: url('/images/admin_visionstreet_login.jpg');
		  background-size: cover;
		  background-position: center;
		  background-repeat: no-repeat;}

		.backdrop-glow {
		  backdrop-filter: blur(16px) saturate(180%);
		  -webkit-backdrop-filter: blur(16px) saturate(180%);
		  background-color: rgba(17, 25, 40, 0.65);}

		@font-face {
			font-family: 'Russo One';
			src: url('/fonts/RussoOne-Regular.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;}

		.font-russo {
			font-family: 'Russo One', sans-serif;}
	</style>
</head>
<body class="h-screen w-screen flex items-center justify-center text-white">

  <div class="w-full max-w-md mx-auto p-8 rounded-2xl backdrop-glow shadow-2xl border border-white/20">
    <h1 class="font-russo text-4xl font-bold text-center mb-8 uppercase text-white drop-shadow-[0_0_8px_#ff6a00] tracking-[0.20em]">Vision Street</h1>
    
    <form method="post" action="{{route(login.submit)}}" class="space-y-6">
      @csrf
      <div>
        <label for="email" class="block text-sm font-semibold mb-2">Username</label>
        <input type="email" id="email" name="email" value="{{old('email')}}" required
          class="w-full px-4 py-3 bg-white/10 text-white placeholder-white/40 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition"/>
      </div>

      <div>
        <label for="password" class="block text-sm font-semibold mb-2">Password</label>
        <input type="password" name="password" required
          class="w-full px-4 py-3 bg-white/10 text-white placeholder-white/40 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition"/>
      </div>

      <button type="submit"
        class="w-full py-3 rounded-xl bg-gradient-to-r from-orange-500 to-pink-500 text-black font-bold text-lg hover:from-pink-500 hover:to-orange-400 transition-all shadow-lg hover:shadow-xl">
        Log In
      </button>

      <input type="hidden" name="recaptcha_token" id="recaptchaToken">

    </form>

    @if ($errors->any())
      <div class="mb-4 rounded-md bg-red-100 p-4 text-sm text-red-700">
          <ul class="list-disc pl-5 space-y-1">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <script src="https://www.google.com/recaptcha/api.js?render=6LfOlRgrAAAAAJbB66zZfSDe5oyeRTqf0BhD7RBh"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfOlRgrAAAAAJbB66zZfSDe5oyeRTqf0BhD7RBh', {action: 'super_login'}).then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

    <p class="text-center mt-6 text-sm text-white/50">
      © 2025 Vision Street. All rights reserved.
    </p>
  </div>

</body>
</html>
