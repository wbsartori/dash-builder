<?php

namespace Dashboards\Builder\Widgets\Interfaces;

interface InterfaceWidget
{
    /**
     * @return array
     */
    public function query(): array;
    /**
     * @return array
     */
    public function getDataCard(): array;
}
