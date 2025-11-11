<?php

namespace App\Filament\Resources\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('author')->required(),
                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(false)
                    ->visibleOn('edit'),
                RichEditor::make('content')
                ->required(fn($get) => $get('type') !== 'video'),
                TextInput::make('excerpt'),
                FileUpload::make('image')->image(),
                TextInput::make('video_url')
                    ->label('Video URL')
                    ->placeholder('https://www.youtube.com/watch?v=abcd1234')
                    ->url()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'trending' => 'Trending',
                        'opinion' => 'Opinion',
                        'video' => 'Video',
                    ])
                    ->required()
                    ->default('trending'),
                DatePicker::make('published_at')->required(),
            ]);
    }
}
