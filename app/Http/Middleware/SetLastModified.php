<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class SetLastModified
{
    public function handle($request, Closure $next)
    {

        $response = $next($request);

        if ($response->status() == 200) {
            $lastModified = Cache::get('last-modified');

            if (!$lastModified) {
                $lastModified = now();
                Cache::put('last-modified', $lastModified, 60);
            }

            $response->header('Last-Modified', $lastModified->toRfc7231String());

            $ifModifiedSince = $request->header('If-Modified-Since');

            if ($ifModifiedSince && strtotime($ifModifiedSince) >= $lastModified->timestamp) {
                return response('', 304);
            }
        }

        return $response;
    }
}
