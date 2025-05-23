<?php

namespace App\Filament\Resources\ResearchTopicResource\Pages;

use App\Filament\Resources\ResearchTopicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResearchTopics extends ListRecords
{
    protected static string $resource = ResearchTopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
