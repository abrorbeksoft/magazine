<?php

namespace App\Providers;

use App\Billing\CashPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGateway;
use App\Http\View\Composers\PostRepository;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGateway::class,function ($app){

            if (request()->has('credit'))
            {
                return new CreditPaymentGateway('usd');
            }

            return new CashPaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // first method
//        view()->share('posts',Post::all());

        // second method
//        view()->composer(['channel.*','factory.*'],function ($view){
//            $view->with('posts',Post::all());
//        });

        // third method
//        view()->composer(['channel.*','factory.*'],PostRepository::class);


    }
}
