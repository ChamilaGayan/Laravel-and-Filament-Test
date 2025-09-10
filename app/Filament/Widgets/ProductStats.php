<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStats extends BaseWidget
{
    protected static ?int $sort = 1; // position in dashboard

    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('All products in the system')
                ->color('success'),

            Stat::make('Categories', ProductCategory::count())
                ->description('Number of categories')
                ->color('info'),

            Stat::make('Colors', ProductColor::count())
                ->description('Available colors')
                ->color('warning'),
        ];
    }
}
