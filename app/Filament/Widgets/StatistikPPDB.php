<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatistikPPDB extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pendaftar', Student::count())
                ->description('Jumlah total pendaftar')
                ->icon('heroicon-o-user-group'),

            Stat::make('Pendaftar Laki-laki', Student::where('gender', 'Laki-laki')->count())
                ->description('Jumlah pendaftar laki-laki')
                ->icon('heroicon-o-user-plus'),

            Stat::make('Pendaftar Perempuan', Student::where('gender', 'Perempuan')->count())
                ->description('Jumlah pendaftar perempuan')
                ->icon('heroicon-o-user-minus'),

            Stat::make('Pendaftar Bulan Ini', Student::whereMonth('created_at', now()->month)->count())
                ->description('Jumlah pendaftar baru bulan ini')
                ->icon('heroicon-o-calendar'),
        ];
    }
}
