<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClintResource\Pages;
use App\Filament\Resources\ClintResource\RelationManagers;
use App\Models\Clint;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClintResource extends Resource
{
    protected static ?string $model = Clint::class;

    protected static ?string $navigationIcon = 'heroicon-s-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('phone')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('email')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('message')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('age')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('country')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('qualification')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('course')
                ->required()
                ->maxLength(255),
                
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               
                    Tables\Columns\TextColumn::make('id')
                       ->searchable(),
                   Tables\Columns\TextColumn::make('name')
                       ->searchable(),
                   Tables\Columns\TextColumn::make('phone')
                   ->searchable(),
                   Tables\Columns\TextColumn::make('email')
                   ->searchable(),
                   Tables\Columns\TextColumn::make('message')
                   ->searchable(),
                   Tables\Columns\TextColumn::make('age')
                   ->searchable(),
                   Tables\Columns\TextColumn::make('country')
                   ->searchable(),
                   Tables\Columns\TextColumn::make('qualification')
                   ->searchable(),
                   
                   Tables\Columns\TextColumn::make('course')
                   ->searchable(),
                   
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),              
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListClints::route('/'),
            'create' => Pages\CreateClint::route('/create'),
            'edit' => Pages\EditClint::route('/{record}/edit'),
        ];
    }
}
