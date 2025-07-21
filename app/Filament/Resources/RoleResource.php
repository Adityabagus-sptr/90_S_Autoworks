<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleResource\Pages;
use App\Models\Role;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    
    protected static ?string $navigationLabel = 'Roles & Permissions';
    
    protected static ?string $navigationGroup = 'User Management';
    
    protected static ?int $navigationSort = 1;

    // Authorization methods
    public static function canViewAny(): bool
    {
        return Auth::user()->hasPermission('view_roles');
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasPermission('create_roles');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasPermission('edit_roles');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasPermission('delete_roles');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()->hasPermission('delete_roles');
    }

    // Hide from navigation if user doesn't have permission
    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->hasPermission('view_roles');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Role Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Role Name')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('display_name')
                            ->label('Display Name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->rows(3),
                    ])
                    ->columns(2),
                    
                Forms\Components\Section::make('Permissions')
                    ->schema([
                        Forms\Components\CheckboxList::make('permissions')
                            ->label('Permissions')
                            ->options([
                                'view_users' => 'View Users',
                                'create_users' => 'Create Users',
                                'edit_users' => 'Edit Users',
                                'delete_users' => 'Delete Users',
                                'view_roles' => 'View Roles',
                                'create_roles' => 'Create Roles',
                                'edit_roles' => 'Edit Roles',
                                'delete_roles' => 'Delete Roles',
                                'view_articles' => 'View Articles',
                                'create_articles' => 'Create Articles',
                                'edit_articles' => 'Edit Articles',
                                'delete_articles' => 'Delete Articles',
                                'view_heroes' => 'View Heroes',
                                'create_heroes' => 'Create Heroes',
                                'edit_heroes' => 'Edit Heroes',
                                'delete_heroes' => 'Delete Heroes',
                                'view_contacts' => 'View Contacts',
                                'edit_contacts' => 'Edit Contacts',
                                'delete_contacts' => 'Delete Contacts',
                                'view_dashboard' => 'View Dashboard',
                            ])
                            ->columns(3)
                            ->gridDirection('row'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('display_name')
                    ->label('Role')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('System Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('users_count')
                    ->label('Users Count')
                    ->counts('users')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
