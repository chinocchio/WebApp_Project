<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CreateJobsResource\Pages;
use App\Filament\Resources\CreateJobsResource\RelationManagers;
use App\Models\CreateJobs;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CreateJobsResource extends Resource
{
    protected static ?string $model = CreateJobs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("job_title")
                ->required(),
                TextInput::make("job_description")
                ->required(),
                TextInput::make("job_requirements")
                ->required(),
                TextInput::make("salary")
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("job_title")
                ->searchable(),
                TextColumn::make("job_description")
                ->searchable(),
                TextColumn::make("job_requirements")
                ->searchable(),
                TextColumn::make("salary")
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCreateJobs::route('/'),
            'create' => Pages\CreateCreateJobs::route('/create'),
            'edit' => Pages\EditCreateJobs::route('/{record}/edit'),
        ];
    }
}
