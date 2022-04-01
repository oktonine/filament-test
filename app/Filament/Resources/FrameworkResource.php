<?php

namespace App\Filament\Resources;

use Str; 
use Filament\Forms;
use Filament\Tables;
use App\Models\Framework;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\FrameworkResource\Pages;

class FrameworkResource extends Resource
{
    protected static ?string $model = Framework::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\HasManyRepeater::make('competencies')
                    ->relationship('competencies')
                    ->label(Str::ucfirst(__('competencies')))
                    ->columns(2)
                    ->defaultItems(0)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(Str::ucfirst(__('competency')))
                            ->required()
                            ->columnSpan(1),

                        Forms\Components\HasManyRepeater::make('children')
                            ->relationship('children')
                            ->label(Str::ucfirst(__('sub competencies')))
                            ->columnSpan(1)
                            ->defaultItems(0)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label(Str::ucfirst(__('competency')))
                                    ->required(),

                            ]),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFrameworks::route('/'),
            'create' => Pages\CreateFramework::route('/create'),
            'edit' => Pages\EditFramework::route('/{record}/edit'),
            'view' => Pages\ViewFramework::route('/{record}'),
        ];
    }
}
