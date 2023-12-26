<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostUserResource\Pages;
use App\Filament\Resources\PostUserResource\RelationManagers;
use App\Models\PostUser;
use App\Filament\Resources\CommentUserResource\Pages\CreateCommentUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostUserResource extends Resource
{
    public static ?string $model = PostUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(191),
                    Forms\Components\RichEditor::make('body')
                    ->required()
                    ->fileAttachmentsDirectory('posts/images')->columnSpanFull()
                // Forms\Components\TextInput::make('body')
                //     ->required()
                //     ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('body')
                    ->searchable(),
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
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                
                Tables\Actions\Action::make('Add Comment')
                ->icon('heroicon-s-pencil')
                ->url(fn (PostUser $record): string => CommentUserResource::getUrl('create', ['record' => $record])),
    // ==========
                
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostUsers::route('/'),
            'create' => Pages\CreatePostUser::route('/create'),
            'view' => Pages\ViewPostUser::route('/{record}'),
            'edit' => Pages\EditPostUser::route('/{record}/edit'),
            'comment.add' => CreateCommentUser::route('/{record}/add'),
        ];
    }
}
