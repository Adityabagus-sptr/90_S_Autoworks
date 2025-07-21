<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Contact;
use App\Models\Article;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
                
            Stat::make('Total Articles', Article::count())
                ->description('Published articles')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info')
                ->chart([15, 4, 10, 2, 12, 4, 12]),
                
            Stat::make('Contact Messages', Contact::count())
                ->description('Total messages received')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning')
                ->chart([2, 10, 5, 22, 8, 4, 12]),
                
            Stat::make('Unread Messages', Contact::where('is_read', false)->count())
                ->description('Messages pending review')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('danger')
                ->chart([1, 3, 2, 5, 1, 2, 3]),
        ];
    }
}