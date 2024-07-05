<?php

namespace App\Filament\Resources\AdhesionResource\Widgets;

use App\Models\adhesion_user;
use Carbon\Carbon;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class AdhesionChart extends LineChartWidget
{
    protected static ?string $heading = 'memberships';

    protected function getData(): array
    {
        $data = Trend::model(adhesion_user::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        // Format the date to display only the month name
        $formattedLabels = $data->map(function (TrendValue $value) {
            return Carbon::parse($value->date)->format('M'); // Format to month name
        });

        return [
            'datasets' => [
                [
                    'label' => 'members',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#C70039',
                    'borderColor' => '#581845',
                ],
            ],
            'labels' => $formattedLabels,
        ];
    }
}
