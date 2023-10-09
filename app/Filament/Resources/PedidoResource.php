<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoResource\Pages;
use App\Filament\Resources\PedidoResource\RelationManagers;
use App\Models\Pedido;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class PedidoResource extends Resource
{
    protected static ?string $model = Pedido::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pedidos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('dataPedido')
                    ->label("Data do pedido"),
                Forms\Components\TextInput::make('status')
                    ->label("Status"),
                Forms\Components\TextInput::make('reference')
                    ->label("Referência"),
                Forms\Components\TextInput::make('vlr_frete')
                    ->label("Valor do frete"),
                Forms\Components\TextInput::make('usuario_id')
                    ->label("Usuario"),

                Forms\Components\Fieldset::make('Dados do Usuario')
                        ->relationship('usuario')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Nome do Usuario'),
                            Forms\Components\TextInput::make('email')
                                ->label('email do Usuario'),

                            Forms\Components\Fieldset::make('Endereço do usuário')
                                ->relationship('endereco')
                                ->schema([
                                    Forms\Components\TextInput::make('rua')
                                        ->label('Rua'),
                                    Forms\Components\TextInput::make('cep')
                                        ->label('Cep'),
                                    Forms\Components\TextInput::make('pais')
                                        ->label('Pais'),
                                    Forms\Components\TextInput::make('cidade')
                                        ->label('Cidade'),
                                    Forms\Components\TextInput::make('bairro')
                                        ->label('Bairro'),
                                    Forms\Components\TextInput::make('estado')
                                        ->label('Estado'),
                                    Forms\Components\TextInput::make('complemento')
                                        ->label('Complemento'),
                                    Forms\Components\TextInput::make('numero')
                                        ->label('Número'),
                                
                                ]),
                        ]),

                Forms\Components\Repeater::make('itemPedido')
                        ->columnSpan([
                            'sm' => 2,
                            'xl' => 3,
                            '2xl' => 4,
                        ])
                            ->label('Item pedido')
                            ->relationship('itemPedido')
                            ->schema([
                            Forms\Components\TextInput::make('tamanho')
                                ->label('Tamanho'),
                            Forms\Components\DateTimePicker::make('dt_item')
                                ->label("dt_item"),
                            Forms\Components\TextInput::make('quantidade')
                                ->label('Quantidade'),
                            Forms\Components\TextInput::make('valor')
                                ->label('Valor'),
                            Forms\Components\TextInput::make('cor')
                                ->label('Cor'),
                            Forms\Components\Fieldset::make('Dados do produto')
                                ->relationship('produto')
                                ->schema([
                                Forms\Components\FileUpload::make('foto'),

                                Forms\Components\TextInput::make('nome')
                                ->columnSpan([
                                    'sm' => 2,
                                    'xl' => 3,
                                    '2xl' => 4,
                                ]),
                                Forms\Components\TextInput::make('valor')
                                    ->label('Valor do produto'),
                                Forms\Components\TextInput::make('peso')
                                    ->label('Peso do produto'),
                                Forms\Components\TextInput::make('qtd')
                                    ->label('Quantidade do produto disponivel'),
                                Forms\Components\TextInput::make('dimensao')
                                    ->label('Dimensão'),
                                Forms\Components\TextInput::make('material')
                                    ->label('Material'),
                            ])
                        ])
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference')
                    ->label('Referência')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dataPedido')
                    ->label('Data do pedido')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('vlr_frete')
                    ->label('Valor do frete')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ]);
        
            
    }
    
    public static function getRelations(): array
    {
        return [

        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPedidos::route('/'),
            'view' => Pages\ViewPedido::route('/{record}'),
        ];
    }    
}
