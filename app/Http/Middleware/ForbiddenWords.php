<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
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
        $forbidden_words = ['hate', 'idiot', 'stupid'];
        $content = request('content');

        foreach($forbidden_words as $word){
            if (strpos($content, $word) !== false){
                return response(view('auth.forbidden-comment'));
            }
        }
        return $next($request);
    }
}
