<?php

namespace App\Filament\Resources\ImagemProdutoResource\Pages;

use App\Filament\Resources\ImagemProdutoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImagemProduto extends EditRecord
{
    protected static string $resource = ImagemProdutoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
