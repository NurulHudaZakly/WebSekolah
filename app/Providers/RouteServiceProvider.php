<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
  /**
   * This namespace is applied to your controller routes.
   *
   * In addition, it is set as the URL generator's root namespace.
   *
   * @var string
   */
  protected $namespace = 'App\\Http\\Controllers'; // Tambahkan ini

  public function boot()
  {
    parent::boot();
  }

  public function map()
  {
    $this->mapWebRoutes();

    // Map additional route groups here if needed
  }

  protected function mapWebRoutes()
  {
    Route::middleware('web')
      ->namespace($this->namespace) // Tambahkan ini
      ->group(base_path('routes/web.php'));
  }
}
