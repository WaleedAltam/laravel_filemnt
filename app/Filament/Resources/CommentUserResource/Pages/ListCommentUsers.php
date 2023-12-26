<?php

namespace App\Filament\Resources\CommentUserResource\Pages;

use App\Filament\Resources\CommentUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommentUsers extends ListRecords
{
    protected static string $resource = CommentUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
