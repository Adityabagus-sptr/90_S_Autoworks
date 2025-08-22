<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSlideResource\Pages;
use App\Filament\Resources\HeroSlideResource\RelationManagers;
use App\Models\HeroSlide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class HeroSlideResource extends Resource
{
    protected static ?string $model = HeroSlide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Hero Slides';
    protected static ?string $pluralLabel = 'Hero Slides';

    // Authorization methods
    public static function canViewAny(): bool
    {
        return Auth::user()->hasPermission('view_hero_slides');
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasPermission('create_hero_slides');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasPermission('edit_hero_slides');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasPermission('delete_hero_slides');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()->hasPermission('delete_hero_slides');
    }

    // Hide from navigation if user doesn't have permission
    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->hasPermission('view_hero_slides');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Hero Image')
                    ->image()
                    ->directory('hero-slides')
                    ->disk('public')
                    ->visibility('public')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('Judul/Title')
                    ->maxLength(255)
                    ->helperText('Judul untuk gambar hero ini (opsional).'),
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->placeholder('https://example.com')
                    ->maxLength(2048)
                    ->helperText('URL tujuan saat slide diklik (opsional).'),
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true)
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->helperText('Angka lebih kecil tampil lebih awal.')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Gambar')
                    ->disk('public')
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->limit(40)
                    ->toggleable(),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->limit(40)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListHeroSlides::route('/'),
            'create' => Pages\CreateHeroSlide::route('/create'),
            'edit' => Pages\EditHeroSlide::route('/{record}/edit'),
        ];
    }
}
