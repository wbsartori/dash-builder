<?php

namespace Dashboards\Builder\Widgets\Abstracts;

interface ModelInterface
{
    /**
     * @return array
     */
    public function get(): array;
}