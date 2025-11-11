<?php

namespace App\Filament\Resources\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PostResource;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;
}

