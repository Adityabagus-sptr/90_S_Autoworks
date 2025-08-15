<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Models\Link;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class LinkResource extends Resource
{
    protected static ?string $model = Link::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';
    
    protected static ?string $navigationLabel = 'Link Management';
    
    protected static ?string $navigationGroup = 'Content Management';
    
    protected static ?int $navigationSort = 4;

    // Authorization methods
    public static function canViewAny(): bool
    {
        return Auth::user()->hasPermission('view_links');
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasPermission('create_links');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasPermission('edit_links');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasPermission('delete_links');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()->hasPermission('delete_links');
    }

    // Hide from navigation if user doesn't have permission
    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->hasPermission('view_links');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Link Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Link Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Link Daftar, Link Login')
                            ->helperText('Nama yang akan ditampilkan untuk link ini'),
                            
                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->required()
                            ->url()
                            ->maxLength(500)
                            ->placeholder('https://example.com atau example.com')
                            ->helperText('URL tujuan link (dengan atau tanpa https://)'),
                            
                        Forms\Components\Select::make('type')
                            ->label('Link Type')
                            ->required()
                            ->options([
                                'link_booking' => 'Link Booking',
                                'link_daftar' => 'Link Daftar',
                            ])
                            ->default('link_booking')
                            ->helperText('Kategori/tipe dari link ini'),
                            
                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->maxLength(500)
                            ->rows(3)
                            ->placeholder('Deskripsi singkat tentang link ini')
                            ->helperText('Deskripsi opsional untuk link'),
                    ])
                    ->collapsible(),
                    
                Forms\Components\Section::make('Link Settings')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true)
                                    ->helperText('Aktifkan/nonaktifkan link ini'),
                                    
                                Forms\Components\Toggle::make('open_new_tab')
                                    ->label('Open in New Tab')
                                    ->default(false)
                                    ->helperText('Buka link di tab baru'),
                            ]),
                            
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Urutan tampil (angka kecil tampil lebih dulu)'),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Link Name')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),
                    
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->searchable()
                    ->limit(50)
                    ->tooltip(function ($record) {
                        return $record->url;
                    }),
                    
                Tables\Columns\BadgeColumn::make('type')
                    ->label('Type')
                    ->colors([
                        'success' => 'whatsapp',
                        'primary' => 'google_form',
                    ]),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('open_new_tab')
                    ->label('New Tab')
                    ->boolean(),
                    
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Link Type')
                    ->options([
                        'whatsapp' => 'Link WhatsApp',
                        'google_form' => 'Form Google',
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
                    
                Tables\Filters\TernaryFilter::make('open_new_tab')
                    ->label('Opens in New Tab'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
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
            'index' => Pages\ListLinks::route('/'),
            'create' => Pages\CreateLink::route('/create'),
            'edit' => Pages\EditLink::route('/{record}/edit'),
        ];
    }
}