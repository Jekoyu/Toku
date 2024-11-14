<?php

namespace App\Filament\Resources\SupliersResource\Pages;

use App\Filament\Resources\SupliersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupliers extends ListRecords
{
    protected static string $resource = SupliersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
