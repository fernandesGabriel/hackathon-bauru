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
        if(!empty($request->route()->parameters['name']) && $request->route()->parameters['name'] != '/'){
            $request->page = Page::where('url', $request->route()->parameters['name'])->first();
            if(empty($request->page)){
                return redirect()->guest('/');
            }
        }
        return $next($request);
    }
}
    