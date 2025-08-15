<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if(env('APP_ENV') === 'production') {
            Log::info('Configuring production URL settings');  // Tambahkan log
            // Tambahkan ini untuk memastikan root URL benar
            URL::forceRootUrl(config('app.url'));
            
            // Hanya force scheme jika benar-benar diperlukan
            // URL::forceScheme('https');  // Coba komentari dulu untuk testing
            
            // Atau gunakan pendekatan ini:
            if (str_starts_with(config('app.url'), 'https://')) {
                URL::forceScheme('https');
            }
        }
    }
}
