<?php

require __DIR__.'/../vendor/autoload.php';

if (!function_exists('vite_asset')) {
    /**
     * Get assets built by Vite.
     *
     * @param $path string The path to the asset. Example: 'resources/js/app.js'.
     * @param boolean|null $secure Whether to use HTTPS or not.
     * @return string|void
     */
    function vite_asset(string $path, bool $secure = null)
    {
        $manifest = json_decode(file_get_contents(public_path('/build/manifest.json')), true);

        if (isset($manifest[$path])) {
            return asset('/build/'.$manifest[$path]['file'], $secure);
        }
    }
}
