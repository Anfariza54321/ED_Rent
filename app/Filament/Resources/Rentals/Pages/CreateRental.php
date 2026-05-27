<?php

namespace App\Filament\Resources\Rentals\Pages;

use App\Filament\Resources\Rentals\RentalResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateRental extends CreateRecord
{
    protected static string $resource = RentalResource::class;

}
