<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class General
{
    /**
     * Called routes from extensions folder.
     */
    public static function routes()
    {
        $routes = Cache::get('routes');
        if(!$routes) {
            $routes = collect();
            $path = app_path('Extensions');
            $extensions = File::directories($path);
            foreach ($extensions as $extension) {
                $routes->push($extension . '/routes/web.php');
            }
            Cache::put('routes', $routes);
        }
        return $routes;
    }
}
