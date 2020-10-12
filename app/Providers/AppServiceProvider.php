<?php

namespace App\Providers;

use App\Bridge;
use App\Country;
use App\Parameter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $data = [];
            $data['countries'] = Country::all();
            $data['bridges'] = Bridge::with(['photos','parameter'])->latest()->get();

            /* Nổi tiếng nhất */
            $queryListFamous = Parameter::where('famous', '>', 0)->select('bridge_id');
            $data['mostFamous'] = Bridge::whereIn('id', $queryListFamous)->get();

            /* Độc nhất */
            $queryListStrange = Parameter::where('strange', '>', 0)->select('bridge_id');
                $data['mostStrange'] = Bridge::whereIn('id', $queryListStrange)->get();

            /* Đẹp nhất */
            $queryListBeautiful = Parameter::where('beautiful', '>', 0)->select('bridge_id');
            $data['mostBeautiful'] = Bridge::whereIn('id', $queryListBeautiful)->get();

            /* Cổ nhất */
            $queryOldest = Parameter::whereRaw('builded = (select min(`builded`) from parameters)')->select('bridge_id');
            $data['oldest'] = Bridge::whereIn('id', $queryOldest)->get();

            /* Cao nhất */
            $queryHighest = Parameter::whereRaw('height = (select max(`height`) from parameters)')->select('bridge_id');
            $data['highest'] = Bridge::whereIn('id', $queryHighest)->get();

            /* Dài nhất */
            $queryLongest = Parameter::whereRaw('length = (select max(`length`) from parameters)')->select('bridge_id');
            $data['longest'] = Bridge::whereIn('id', $queryLongest)->get();


            $view->with($data);
        });
    }
}
