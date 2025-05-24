<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectCategories extends ListRecords
{
    protected static string $resource = ProjectCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-s-plus')
                ->label('New Category')
                ->iconSize('w-3 h-3'),
        ];
    }
}
