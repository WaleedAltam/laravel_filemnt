<?php

namespace App\Filament\Resources\CommentUserResource\Pages;

use App\Filament\Resources\CommentUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommentUser extends EditRecord
{
    protected static string $resource = CommentUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
