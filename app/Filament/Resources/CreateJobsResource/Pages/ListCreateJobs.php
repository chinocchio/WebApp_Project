<?php

namespace App\Filament\Resources\CreateJobsResource\Pages;

use App\Filament\Resources\CreateJobsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCreateJobs extends ListRecords
{
    protected static string $resource = CreateJobsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
