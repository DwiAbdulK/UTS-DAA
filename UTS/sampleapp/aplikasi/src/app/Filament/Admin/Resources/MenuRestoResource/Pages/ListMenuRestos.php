<?php

namespace App\Filament\Admin\Resources\MenuRestoResource\Pages;

use App\Filament\Admin\Resources\MenuRestoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuRestos extends ListRecords
{
    protected static string $resource = MenuRestoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
