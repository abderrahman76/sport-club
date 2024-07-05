<?php

namespace App\Filament\Resources\Badge_evenementRecource\Widgets;

use App\Models\Badge_evenement;
use Carbon\Carbon;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


class eventChart extends LineChartWidget
{
    protected static ?string $heading = 'event participents';

    protected function getData(): array
    {
        $data = Trend::model(Badge_evenement::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
        $formattedLabels = $data->map(function (TrendValue $value) {
            return Carbon::parse($value->date)->format('M'); // Format to month name
        });
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#C70039',
                    'borderColor' => '#581845',
                ],
            ],
            'labels' =>  $formattedLabels,
        ];
    }
}
