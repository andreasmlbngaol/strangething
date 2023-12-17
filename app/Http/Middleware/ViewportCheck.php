<?php

namespace App\Http\Middleware;

use Closure;

class ViewportCheck
{
    public function handle($request, Closure $next)
    {
        // Add JavaScript to check viewport width and height
        $script = "
            <script>
                var viewportWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var viewportHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

                if (viewportWidth <= viewportHeight) {
                    alert('Pakai Laptop Beb. Gak cukup waktuku buat tampilan di HP nya');
                }
            </script>
        ";

        // Inject the JavaScript into the response
        $response = $next($request);
        $response->setContent($response->getContent() . $script);

        return $response;
    }
}
