<?php

namespace Dashboards\Builder\Models;

class MakeChart
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $chart;
    /**
     * @var array
     */
    private $filters;
    /**
     * @var array
     */
    private $buttons;

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'title' => $this->title,
            'name' => $this->name,
            'chart' => $this->chart,
            'filters' => $this->filters,
            'buttons' => $this->buttons,
        ];
    }

    /**
     * @param string $title
     * @return MakeChart
     */
    public function setTitle(string $title): MakeChart
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $name
     * @return MakeChart
     */
    public function setName(string $name): MakeChart
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $chart
     * @return MakeChart
     */
    public function setChart(array $chart): MakeChart
    {
        $this->chart = $chart;
        return $this;
    }

    /**
     * @param array $filters
     * @return MakeChart
     */
    public function setFilters(array $filters): MakeChart
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @param array $buttons
     * @return MakeChart
     */
    public function setButtons(array $buttons): MakeChart
    {
        $this->buttons = $buttons;
        return $this;
    }
}
