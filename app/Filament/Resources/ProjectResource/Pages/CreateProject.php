<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;


    public function getTitle(): string
    {
        return 'New Project';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = \Str::slug($data['title']);

        return $data;
    }
}
