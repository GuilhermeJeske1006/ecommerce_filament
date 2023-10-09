<?php

namespace App\Filament\Resources\ImagemProdutoResource\Pages;

use App\Filament\Resources\ImagemProdutoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImagemProdutos extends ListRecords
{
    protected static string $resource = ImagemProdutoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
