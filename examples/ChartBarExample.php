<?php

namespace Dashboards\Builder\Examples;

use Dashboards\Builder\Models\MakeButton;
use Dashboards\Builder\Widgets\Traits\ChartsJs\OptionsChartJS;

class ChartBarExample
{
    use OptionsChartJS;

    private const CARDS = [
        'chart1' => [
            'title' => 'Clientes Inativados por mes',
            'name' => 'clientes_inativados_mes'
        ],
        'chart2' => [
            'title' => 'Clientes status',
            'name' => 'clientes_status'
        ],
    ];

    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'card1' => $this->amountChart($this->chart1()),
            'card2' => $this->amountChart($this->chart2()),
        ];
    }

    /**
     * @return array
     */
    public function chart1(): array
    {
        return $this->make()
            ->setTitle(self::CARDS['chart1']['title'])
            ->setName(self::CARDS['chart1']['name'])
            ->setChart(
                $this->addConfiguration()
                    ->setType('bar')
                    ->setLabels([
                        'Janeiro', 'Fevereiro', 'Marco',
                        'Abril', 'Maio', 'Junho', 'Julho',
                        'Setembro', 'Novembro', 'Dezembro'
                    ])
                    ->setDatasets(
                        [
                            [
                                'label' => 'Ativados',
                                'data' => [12, 10, 3, 5, 2, 3, 10, 8, 9, 10, 25, 30],
                                'borderWidth' => 1
                            ],
                            [
                                'label' => 'Inativados',
                                'data' => [30, 5, 23, 2, 8, 19, 3, 5, 2, 3, 9, 8],
                                'borderWidth' => 1
                            ]
                        ]
                    )
                    ->setOptions(
                        [
                            'scales' => [
                                'y' => [
                                    'beginAtZero' => true
                                ]
                            ]
                        ]
                    )
                    ->setPlugins([
                        'tootip' => [
                            'events' => ['click']
                        ]
                    ])
                    ->get()
            )
            ->setFilters(
                $this->addFilters()->addFilter(
                    'teste',
                    '=',
                    'teste',
                    'teste',
                    '=',
                    'teste')
                    ->get()
            )
            ->setButtons([
                MakeButton::button([
                    'name' => 'Teste',
                    'function' => 'alert("teste")'
                ]),
                MakeButton::selectButton(
                    'btn-teste',
                    'Filtros',
                    [
                        0 => [
                            'id' => 1,
                            'description' => 'Filial 1',
                        ],
                        1 => [
                            'id' => 1,
                            'description' => 'Filial 2',
                        ],
                    ]
                )
            ])
            ->get();
    }

    public function chart2(): array
    {
        return $this->make()
            ->setTitle('Cliente Status2')
            ->setName('cliente_status2')
            ->setChart(
                $this->addConfiguration()
                    ->setType('bar')
                    ->setLabels(['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'])
                    ->setDatasets(
                        [
                            [
                                'label' => '# of Votes',
                                'data' => [12, 19, 3, 5, 2, 3],
                                'borderWidth' => 1
                            ]
                        ]
                    )
                    ->setOptions(
                        [
                            'scales' => [
                                'y' => [
                                    'beginAtZero' => true
                                ]
                            ]
                        ]
                    )
                    ->setPlugins([])
                    ->get()
            )
            ->setButtons([
                MakeButton::button([
                    'name' => 'Teste',
                    'function' => 'alert("teste")'
                ]),
                MakeButton::selectButton(
                    'btn-teste',
                    'Filtros',
                    [
                        0 => [
                            'id' => 1,
                            'description' => 'Filial 1',
                        ],
                        1 => [
                            'id' => 1,
                            'description' => 'Filial 2',
                        ],
                    ])
            ])
            ->get();
    }
}
