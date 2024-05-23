<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApprovedApplicantsResource\Pages;
use App\Filament\Resources\ApprovedApplicantsResource\RelationManagers;
use App\Models\ApprovedApplicants;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApprovedApplicantsResource extends Resource
{
    protected static ?string $model = ApprovedApplicants::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("Fullname")
                ->required(),
                TextInput::make("Position")
                ->required(),
                TextInput::make("Salary")
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("Fullname")
                ->searchable(),
                TextColumn::make("Position")
                ->searchable(),
                TextColumn::make("Salary")
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
            'index' => Pages\ListApprovedApplicants::route('/'),
            'create' => Pages\CreateApprovedApplicants::route('/create'),
            'edit' => Pages\EditApprovedApplicants::route('/{record}/edit'),
        ];
    }
}
