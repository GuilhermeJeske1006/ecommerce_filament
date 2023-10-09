<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoResource\Pages;
use App\Filament\Resources\ProdutoResource\RelationManagers;
use App\Models\ImagemProduto;
use App\Models\Produto;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Http\Requests\CreateRecordRequest;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Produtos';

    protected static ?string $pluralModelLabel = 'Produtos';

    protected static ?string $navigationGroup = 'Config Produtos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                ->columnSpan([
                    'sm' => 2,
                    'xl' => 3,
                    '2xl' => 4,
                ])
                    ->imageEditor()
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('nome')
                    ->label('Nome do produto')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Select::make('categoria_id')
                    ->label('Categoria')
                    ->relationship('categoria', 'categoria')
                    ->preload(),
                Forms\Components\TextInput::make('valor')
                    ->label('Valor do produto')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('peso')
                    ->label('Peso do produto')
                    ->maxLength(255),
                Forms\Components\TextInput::make('qtd')
                    ->label('Quantidade do produto disponivel')
                    ->numeric(),
                Forms\Components\TextInput::make('dimensao')
                    ->label('Dimensão')
                    ->maxLength(50),
                Forms\Components\TextInput::make('material')
                    ->label('Material')
                    ->maxLength(50),
                

                Section::make('Tamanho e cores')
                    ->description('Faça o upload das imagens para usa-las no produto')
                    ->schema([
                        Repeater::make('cores')
                        ->relationship('cores')
                        ->schema([
                            Forms\Components\TextInput::make('cor')
                                ->label('Cor')
                                ->required(),
                            Repeater::make('tamanho')
                                ->relationship('tamanhos')
                                ->schema([
                                    Forms\Components\TextInput::make('tamanho')
                                        ->label('Tamanho')
                                        ->required(),
                                    Forms\Components\TextInput::make('qtdTamanho')
                                        ->label('Quantidade Tamanho')
                                        ->numeric()
                                        ->required(),
                                    Forms\Components\Hidden::make('cor_id')
                                       
                                ])
                        ])
                    ]),
                Forms\Components\TextInput::make('descricao')
                    ->label('Pequena descrição')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('descricao_longa')
                    ->label('Descrição longa')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Imagem capa'),
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome Produto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('valor')
                    ->label('Valor')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('qtd')
                    ->label('Quantidade disp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i:s')
                
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
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
        ];
    }    


    

}
