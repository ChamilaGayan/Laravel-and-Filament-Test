<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeAssignmentResource\Pages;
use App\Filament\Resources\TypeAssignmentResource\RelationManagers;
use App\Models\TypeAssignment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypeAssignmentResource extends Resource
{
    protected static ?string $model = TypeAssignment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type_assignments_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type_assignments_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('my_bonus_field')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('type_id')
                    ->label('Product Type')
                    ->relationship('type', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_assignments_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_assignments_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('my_bonus_field')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListTypeAssignments::route('/'),
            'create' => Pages\CreateTypeAssignment::route('/create'),
            'edit' => Pages\EditTypeAssignment::route('/{record}/edit'),
        ];
    }
}
