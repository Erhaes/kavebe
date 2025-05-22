<?php

namespace App\Providers;

use App\Models\Certificate;
use App\Models\Equipment;
use App\Models\Facility;
use App\Models\Lab;
use App\Models\News;
use App\Models\Team;
use App\Models\Testing;
use App\Observers\CertificateObserver;
use App\Observers\EquipmentObserver;
use App\Observers\FacilityObserver;
use App\Observers\LabObserver;
use App\Observers\NewsObserver;
use App\Observers\TeamObserver;
use App\Observers\TestingObserver;
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
        Lab::observe(LabObserver::class);
        Facility::observe(FacilityObserver::class);
        Equipment::observe(EquipmentObserver::class);
        Testing::observe(TestingObserver::class);
        Certificate::observe(CertificateObserver::class);
        News::observe(NewsObserver::class);
        Team::observe(TeamObserver::class);
    }
}
