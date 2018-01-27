<?php

namespace Hackathon\Http\Middleware;

use Closure;
use Hackathon\Models\Page;

class CheckUrl
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
        if($request->route()->uri != '/'){
            $request->page = Page::where('url', $request->route()->uri)->first();
            if(empty($request->page)){
                return redirect()->guest('/');
            }
        }
        return $next($request);
    }
}
    