<?php

namespace App\Filament\Widgets;

use App\Models\Ppdb;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class StatistikPPDB extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPendaftar = Ppdb::count();
        $pendaftarLakiLaki = Ppdb::where('gender', 'Laki-laki')->count();
        $pendaftarPerempuan = Ppdb::where('gender', 'Perempuan')->count();
        $pendaftarBulanIni = Ppdb::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        return [
            Stat::make('Total Pendaftar', $totalPendaftar)
                ->description('Jumlah total pendaftar')
                ->icon('heroicon-o-user-group')
                ->color('info'),

            Stat::make('Pendaftar Laki-laki', $pendaftarLakiLaki)
                ->description('Jumlah pendaftar laki-laki')
                ->icon('heroicon-o-user-plus')
                ->color('success'),

            Stat::make('Pendaftar Perempuan', $pendaftarPerempuan)
                ->description('Jumlah pendaftar perempuan')
                ->icon('heroicon-o-user-minus')
                ->color('warning'),

            Stat::make('Pendaftar Bulan Ini', $pendaftarBulanIni)
                ->description('Jumlah pendaftar baru bulan ini')
                ->icon('heroicon-o-calendar')
                ->color('danger'),
        ];
    }
}
