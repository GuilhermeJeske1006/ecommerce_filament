<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImagemProdutoResource\Pages;
use App\Filament\Resources\ImagemProdutoResource\RelationManagers;
use App\Models\ImagemProduto;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImagemProdutoResource extends Resource
{
    protected static ?string $model = ImagemProduto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Config Produtos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('imagem')
                ->columnSpan([
                    'sm' => 2,
                    'xl' => 3,
                    '2xl' => 4,
                ])
                    ->label('Imagens'),

                Forms\Components\Select::make('produto_id')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 3,
                        '2xl' => 4,
                    ])
                    ->label('Produto')
                    ->relationship(name: 'produto', titleAttribute: 'nome')
                    ->searchable()
                    ->preload()
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagem')
                    ->searchable(),
                Tables\Columns\TextColumn::make('produto_id')
                    ->numeric()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImagemProdutos::route('/'),
            'create' => Pages\CreateImagemProduto::route('/create'),
            'edit' => Pages\EditImagemProduto::route('/{record}/edit'),
        ];
    }    
}
