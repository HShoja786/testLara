<?php

namespace App\Filament\Resources\SalesOrderResource\Pages;

use App\Filament\Resources\SalesOrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSalesOrders extends ListRecords
{
    protected static string $resource = SalesOrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
