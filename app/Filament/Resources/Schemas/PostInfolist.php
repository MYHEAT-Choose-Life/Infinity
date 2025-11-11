<?php

namespace App\Filament\Resources\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('author'),
                TextEntry::make('excerpt')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('content')
                    ->columnSpanFull(),
                TextEntry::make('slug'),
                ImageEntry::make('image')
                    ->placeholder('-'),
                TextEntry::make('video_URL'),
                TextEntry::make('type')
                    ->badge(),
                TextEntry::make('published_at')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
