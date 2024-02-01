<?php

namespace Dashboards\Builder\Widgets\Abstracts;

trait Widget
{
    /**
     * @var array
     */
    protected $chart = [];
    /**
     * @var bool
     */
    protected $chartPattern = true;

    /**
     * @param array $data order params {
     * dataCharts,
     * dataLabels,
     * categories,
     * filters
     * }
     * @return array { chartBar }
     */
    public function amountChart(array $data): array
    {
        return $data;
    }
}
