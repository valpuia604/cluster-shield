<?php

namespace App\Filament\Clusters\Settings\Resources\PostResource\Pages;

use App\Filament\Clusters\Settings\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
