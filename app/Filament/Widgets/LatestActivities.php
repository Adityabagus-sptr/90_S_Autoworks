<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Contact;
use App\Models\HeroSlide;
use App\Models\Link;
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
            ->description('Artikel, Link, Hero Slides, dan pesan kontak terbaru')
            ->poll('60s')
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Artikel' => 'info',
                        'Kontak' => 'warning',
                        'Link' => 'success',
                        'Hero Slide' => 'primary',
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
        // Ambil 5 data terbaru dari tiap sumber
        $recentArticles = Article::orderBy('created_at', 'desc')->limit(5)->pluck('id');
        $recentContacts = Contact::orderBy('created_at', 'desc')->limit(5)->pluck('id');
        $recentLinks = Link::orderBy('created_at', 'desc')->limit(5)->pluck('id');
        $recentSlides = HeroSlide::orderBy('created_at', 'desc')->limit(5)->pluck('id');

        // Gunakan Article sebagai base model untuk union
        $query = Article::select([
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
        ->union(
            Link::select([
                'id',
                DB::raw("'Link' as type"),
                'name as title',
                'description',
                'created_at',
                DB::raw("CONCAT('/admin/links/', id, '/edit') as url"),
            ])
            ->whereIn('id', $recentLinks)
        )
        ->union(
            HeroSlide::select([
                'id',
                DB::raw("'Hero Slide' as type"),
                'title',
                DB::raw("'' as description"),
                'created_at',
                DB::raw("CONCAT('/admin/hero-slides/', id, '/edit') as url"),
            ])
            ->whereIn('id', $recentSlides)
        );

        return $query->orderBy('created_at', 'desc');
    }
}