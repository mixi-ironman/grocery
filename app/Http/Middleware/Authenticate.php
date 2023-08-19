<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected $redirectRoute = [
        'admin' => 'admin-login',
        'web' => 'login',

    ];

    public function handle($request, Closure $next, ...$guards)
    {
        // dd(...$guards);
        if(empty($guards))
        {
            $guards = ['web'];
        }

        foreach ($guards as $guard) {
            if (!$this->auth->guard($guard)->check()) {
                return redirect()->route($this->redirectRoute[$guard]);
            }
        }
        $this->authenticate($request, $guards);

        return $next($request);
    }
}
