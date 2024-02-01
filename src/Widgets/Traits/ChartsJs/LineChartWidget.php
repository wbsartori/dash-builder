<?php

namespace Dashboards\Builder\Widgets\Traits\ChartsJs;

trait LineChartWidget
{
    /**
     * @var string
     */
    protected $type = 'line';

    /**
     * @var array
     */
    protected $lineType = [
        'type' => 'line',
        'options' => [
            'legend' => [
                'position' => 'top'
            ],
            'tooltips' => [
                'mode' => 'index'
            ],
            'plugins' => [
                'datalabels' => [
                    'display' => true,
                    'anchor' => 'end',
                    'backgroundColor' => 'function (context) {return context.dataset.backgroundColor;}',
                    'borderRadius' => 4,
                    'color' => 'black',
                    'font' => [
                        'weight' => 'bold',
                        'size' => 8
                    ],
                    'formatter' => 'Math.round',
                ]
            ],
            'layout' => [
                'padding' => [
                    'left' => 10,
                    'right' => 10,
                    'top' => 0,
                    'bottom' => 10
                ]
            ]
        ],
    ];
}
