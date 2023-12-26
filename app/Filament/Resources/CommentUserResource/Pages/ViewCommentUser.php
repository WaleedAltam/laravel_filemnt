<?php

namespace App\Filament\Resources\CommentUserResource\Pages;

use App\Filament\Resources\CommentUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCommentUser extends ViewRecord
{
    protected static string $resource = CommentUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
