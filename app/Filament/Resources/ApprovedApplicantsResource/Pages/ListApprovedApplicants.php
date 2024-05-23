<?php

namespace App\Filament\Resources\ApprovedApplicantsResource\Pages;

use App\Filament\Resources\ApprovedApplicantsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApprovedApplicants extends ListRecords
{
    protected static string $resource = ApprovedApplicantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
