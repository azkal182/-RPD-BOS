<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }


    public function authenticated($request, $user)
    {
    	// Fungsi ini akan dipanggil setelah user berhasil login.
    	// Kita bisa menambahkan aksi-aksi lainnya, misalnya mencatat waktu last_login user.
    	return redirect('dashboard');
    }
}
