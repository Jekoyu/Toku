<?php

namespace App\Filament\Resources\SupliersResource\Pages;

use App\Filament\Resources\SupliersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupliers extends EditRecord
{
    protected static string $resource = SupliersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
