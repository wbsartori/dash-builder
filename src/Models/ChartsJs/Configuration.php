<?php

namespace Dashboards\Builder\Models\ChartsJs;

class Configuration
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var array
     */
    private $labels;
    /**
     * @var array
     */
    private $datasets;
    /**
     * @var array
     */
    private $options;
    /**
     * @var array
     */
    private $plugins;

    /**
     * @return array[]
     */
    public function get(): array
    {
        return [
            'type' => $this->type,
            'data' => [
                'labels' => $this->labels,
                'datasets' => $this->datasets,
                'options' => $this->options,
                'plugins' => $this->plugins,
            ],
        ];
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): Configuration
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param array $labels
     * @return $this
     */
    public function setLabels(array $labels): Configuration
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @param array $datasets
     * @return $this
     */
    public function setDatasets(array $datasets): Configuration
    {
        $this->datasets = $datasets;
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options): Configuration
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param array $plugins
     * @return $this
     */
    public function setPlugins(array $plugins): Configuration
    {
        $this->plugins = $plugins;
        return $this;
    }
}
