<?php

namespace App\Filament\Resources\TypeAssignmentResource\Pages;

use App\Filament\Resources\TypeAssignmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeAssignment extends EditRecord
{
    protected static string $resource = TypeAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
