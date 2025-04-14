<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function home(Request $request)
    {
        $host = $request->getHost();

        if ($host === 'admin.visionstreet.co') {
            // If logged in as super, go to super dashboard
            if (Auth::check() && Auth::user()->role === 'super') {
                return redirect('/super/dashboard');}

            // Otherwise, just show the super login — no logout here
            Session::put('url.intended', url('/super/dashboard'));
            return view('super.login');}

        return view('guest.home');}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'recaptcha_token' => 'required',
        ]);

        // reCAPTCHA check
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->recaptcha_token,
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->withErrors(['recaptcha' => 'Suspicious activity detected. Please try again.'])->withInput();}

        // Try login
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $role = $user->role ?? 'member'; // fallback if role is missing

            // Intercept intended URL
            $intended = session()->pull('url.intended'); // retrieve and remove

            if ($intended && static::canAccessRoute($role, $intended)) {
                return redirect()->to($intended);
            }

            return redirect("/{$role}/dashboard");
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();}

    protected static function canAccessRoute($role, $url)
    {
        $accessMap = [
            'super' => ['super', 'admin', 'member'],
            'admin' => ['admin', 'member'],
            'member' => ['member'],
        ];

        $path = parse_url($url, PHP_URL_PATH);

        foreach ($accessMap[$role] ?? [] as $prefix) {
            if (str_starts_with($path, "/$prefix")) {
                return true;
            }
        }

        return false;}


    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
