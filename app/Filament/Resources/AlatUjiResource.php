<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AlatUji;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AlatUjiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlatUjiResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use stdClass;

class AlatUjiResource extends Resource
{
    protected static ?string $model = AlatUji::class;


    public static ?string $navigationLabel = 'Alat Uji';

    protected static ?string $navigationGroup = 'Alat - Alat';

    public static function form(Form $form): Form
    {

        $years = range(date('Y'), 1990);

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('kategori')->required(),
                        TextInput::make('merk')->required(),
                        Select::make('tahun_peroleh')->required()
                            ->options(array_combine($years, $years))
                            ->required(),
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
                TextColumn::make('kategori')->sortable()->searchable(),
                TextColumn::make('merk')->sortable()->searchable(),
                TextColumn::make('tahun_peroleh')->sortable()->searchable(),
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
            'index' => Pages\ListAlatUjis::route('/'),
            'create' => Pages\CreateAlatUji::route('/create'),
            'edit' => Pages\EditAlatUji::route('/{record}/edit'),
        ];
    }




}