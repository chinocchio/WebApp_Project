<?php

namespace App\Filament\Resources\CreateJobsResource\Pages;

use App\Filament\Resources\CreateJobsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreateJobs extends EditRecord
{
    protected static string $resource = CreateJobsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
