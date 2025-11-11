<?php

namespace App\Filament\Resources;

use BackedEnum;
use App\Models\Post;
use App\Filament\Resources\Schemas\PostForm;
use App\Filament\Resources\Tables\PostsTable;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    // match Filament's expected union type for analysis tools
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Posts';
    protected static ?int $navigationSort = 1;
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('author'),
                TextColumn::make('type'),
                TextColumn::make('published_at')->date(),
            ])
            ->recordActions([EditAction::make()])
            ->toolbarActions([DeleteBulkAction::make()]);
            
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\Pages\ListPosts::route('/'),
            'create' => \App\Filament\Resources\Pages\CreatePost::route('/create'),
            'edit' => \App\Filament\Resources\Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
