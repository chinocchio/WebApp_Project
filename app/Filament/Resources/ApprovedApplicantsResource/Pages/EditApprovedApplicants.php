<?php

namespace App\Filament\Resources\ApprovedApplicantsResource\Pages;

use App\Filament\Resources\ApprovedApplicantsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApprovedApplicants extends EditRecord
{
    protected static string $resource = ApprovedApplicantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
