<?php

namespace App\Filament\Resources\CommentUserResource\Pages;

use App\Filament\Resources\CommentUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCommentUser extends CreateRecord
{
    protected static string $resource = CommentUserResource::class;
}
