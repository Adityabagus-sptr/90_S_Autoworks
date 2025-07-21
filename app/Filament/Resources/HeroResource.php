<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    
    protected static ?string $navigationLabel = 'Hero Section';
    
    protected static ?string $navigationGroup = 'Content Management';
    
    protected static ?int $navigationSort = 1;

    // Authorization methods
    public static function canViewAny(): bool
    {
        return Auth::user()->hasPermission('view_heroes');
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasPermission('create_heroes');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasPermission('edit_heroes');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasPermission('delete_heroes');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()->hasPermission('delete_heroes');
    }

    // Hide from navigation if user doesn't have permission
    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->hasPermission('view_heroes');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->default('Hero Section'),
                            
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\FileUpload::make('hero_image')
                                    ->label('Hero Image')
                                    ->image()
                                    ->directory('heroes')
                                    ->disk('public')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->helperText('Upload gambar hero (seperti supers1.png)'),
                                    
                                Forms\Components\FileUpload::make('mascot_image')
                                    ->label('Mascot Image')
                                    ->image()
                                    ->directory('heroes')
                                    ->disk('public')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->helperText('Upload gambar maskot (seperti Maskot.png)'),
                            ]),
                            
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('hero_alt_text')
                                    ->label('Hero Alt Text')
                                    ->maxLength(255)
                                    ->default('Hero')
                                    ->helperText('Alt text untuk SEO dan accessibility'),
                                    
                                Forms\Components\TextInput::make('mascot_alt_text')
                                    ->label('Mascot Alt Text')
                                    ->maxLength(255)
                                    ->default('Maskot')
                                    ->helperText('Alt text untuk SEO dan accessibility'),
                            ]),
                    ]),
                    
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true)
                                    ->helperText('Aktifkan/nonaktifkan hero section ini'),
                                    
                                Forms\Components\TextInput::make('sort_order')
                                    ->label('Sort Order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Urutan tampil (angka kecil tampil lebih dulu)'),
                            ]),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('hero_image')
                    ->label('Hero Image')
                    ->disk('public')
                    ->height(60)
                    ->width(80),
                    
                Tables\Columns\ImageColumn::make('mascot_image')
                    ->label('Mascot Image')
                    ->disk('public')
                    ->height(60)
                    ->width(80),
                    
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
