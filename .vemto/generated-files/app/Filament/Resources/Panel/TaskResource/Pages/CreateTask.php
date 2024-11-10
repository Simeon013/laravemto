<?php

namespace App\Filament\Resources\Panel\TaskResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Panel\TaskResource;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;
}
