<?php

namespace Dashboards\Builder\Widgets\Traits\ChartsJs;

use Dashboards\Builder\Models\ChartsJs\Configuration;
use Dashboards\Builder\Models\ChartsJs\Options;
use Dashboards\Builder\Models\Filter;
use Dashboards\Builder\Models\MakeChart;
use Dashboards\Builder\Widgets\Abstracts\Widget;

trait OptionsChartJS
{
    use Widget;

    /**
     * @return MakeChart
     */
    public function make(): MakeChart
    {
        return new MakeChart();
    }

    /**
     * @return Configuration
     */
    public function addConfiguration(): Configuration
    {
        return new Configuration();
    }

    /**
     * @return Options
     */
    public function addOptions(): Options
    {
        return new Options();
    }

    /**
     * @return Filter
     */
    public function addFilters(): Filter
    {
        return new Filter();
    }
}
