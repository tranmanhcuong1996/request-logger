<?php

namespace Cuongtm\Middleware;

use Illuminate\Support\Facades\Log;

class RequestLoggerMiddleware
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, \Closure $next)
    {
        $url = $request->fullUrl();
        $method = $request->getMethod();

        Log::debug(sprintf('METHOD: %s | URL: %s', $method, $url));

        return $next($request);
    }
}
