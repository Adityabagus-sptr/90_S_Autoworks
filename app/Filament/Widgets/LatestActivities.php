<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Contact;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class LatestActivities extends BaseWidget
{
    protected static ?int $sort = 2;
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery())
            ->heading('Aktivitas Terbaru')
            ->description('Artikel dan pesan kontak terbaru')
            ->poll('60s')
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Artikel' => 'info',
                        'Kontak' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul/Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-m-eye')
                    ->url(fn ($record) => $record->url),
            ])
            ->paginated(false);
    }

    protected function getTableQuery(): Builder
    {
        // Get recent articles and contacts separately, then combine IDs
        $recentArticles = Article::orderBy('created_at', 'desc')->limit(5)->pluck('id');
        $recentContacts = Contact::orderBy('created_at', 'desc')->limit(5)->pluck('id');
        
        // Use Article as base model for the union
        return Article::select([
            'id',
            DB::raw("'Artikel' as type"),
            'title',
            'description',
            'created_at',
            DB::raw("CONCAT('/admin/articles/', id, '/edit') as url"),
        ])
        ->whereIn('id', $recentArticles)
        ->union(
            Contact::select([
                'id',
                DB::raw("'Kontak' as type"),
                'name as title',
                'message as description',
                'created_at',
                DB::raw("CONCAT('/admin/contacts/', id, '/edit') as url"),
            ])
            ->whereIn('id', $recentContacts)
        )
        ->orderBy('created_at', 'desc');
    }
}