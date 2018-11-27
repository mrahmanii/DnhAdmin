<?php

namespace App\Http\Middleware;

use Closure;

class menu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('menuNavBar', function($menu){

            $menu->add('Home');
            $menu->add('user',    'user');


        return $next($request);
    }
}
