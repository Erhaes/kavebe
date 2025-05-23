<?php

namespace App\Filament\Resources\ResearchTopicResource\Pages;

use App\Filament\Resources\ResearchTopicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResearchTopic extends EditRecord
{
    protected static string $resource = ResearchTopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
