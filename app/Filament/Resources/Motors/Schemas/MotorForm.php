<?php

namespace App\Filament\Resources\Motors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MotorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('specification_id')
                    ->label('Spesifikasi')
                    ->relationship('specification', 'model_name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('brand')
                    ->required()
                    ->maxLength(255),

                TextInput::make('model')
                    ->required()
                    ->maxLength(255),

                TextInput::make('plate_nomor')
                    ->label('Plat Nomor')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('harga_per_hari')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Select::make('status')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'Perawatan' => 'Perawatan',
                        'Disewa' => 'Disewa',
                    ])
                    ->default('tersedia')
                    ->required(),

                FileUpload::make('image')
                    ->disk('public')
                    ->image()
                    ->directory('motors')
                    ->columnSpanFull()
                    ->imageEditor()
                    ->downloadable()   
                    ->openable()       
                    ->maxSize(2048)  
            ]);
    }
}
