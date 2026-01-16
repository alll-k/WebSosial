<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       view()->share('beritas', [
        ['judul' => 'Contoh Berita 1', 'slug' => 'berita-1', 'penulis' => 'Admin'],
        ['judul' => 'Contoh Berita 2', 'slug' => 'berita-2', 'penulis' => 'Admin'],
    ]);
}
}
