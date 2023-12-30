<?php

namespace Modules\Blog\Filament\Admin\Resources\PostResource\Pages;

use Modules\Blog\Filament\Admin\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
