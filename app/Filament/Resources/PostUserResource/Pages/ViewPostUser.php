<?php

namespace App\Filament\Resources\PostUserResource\Pages;

use App\Filament\Resources\PostUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostUser extends ViewRecord
{
    protected static string $resource = PostUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
