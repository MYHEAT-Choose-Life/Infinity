<?php

namespace App\Filament\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PostResource;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}

