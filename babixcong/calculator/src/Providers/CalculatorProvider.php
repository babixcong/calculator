<?php

namespace CongNx\Calculator\Providers;

use CongNx\Calculator\Calculator;
use CongNx\Calculator\CalculatorInterface;
use Illuminate\Support\ServiceProvider;

class CalculatorProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CalculatorInterface::class, Calculator::class);
    }

    public function boot()
    {
    }
}
