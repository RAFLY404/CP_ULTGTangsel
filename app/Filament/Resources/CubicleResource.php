<?php

namespace App\Filament\Resources;

use stdClass;
use App\Filament\Resources\CubicleResource\Pages;
use App\Filament\Resources\CubicleResource\RelationManagers;
use App\Models\Cubicle;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CubicleResource extends Resource
{
    protected static ?string $model = Cubicle::class;


    protected static ?string $navigationGroup = 'Alat - Alat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('merk')->required(),
                        TextInput::make('supply_inc')->required(),
                        TextInput::make('uraian')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No.')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                )->sortable(),
                TextColumn::make('merk')->sortable()->searchable(),
                TextColumn::make('supply_inc')->sortable()->searchable(),
                TextColumn::make('uraian')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCubicles::route('/'),
            'create' => Pages\CreateCubicle::route('/create'),
            'edit' => Pages\EditCubicle::route('/{record}/edit'),
        ];
    }
}