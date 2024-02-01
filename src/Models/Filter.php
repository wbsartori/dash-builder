<?php

namespace Dashboards\Builder\Models;

class Filter
{
    /**
     * @var array
     */
    private $filter = [];
    /**
     * @var string
     */
    private $addDisplayValue = '';
    /**
     * @var array
     */
    private $addBetweenDisplayValue = [];
    /**
     * @var string
     */
    private $addDisplayField = '';
    /**
     * @var string
     */
    private $addDisplayOperator = '';
    /**
     * @var string
     */
    private $addField = '';
    /**
     * @var string
     */
    private $addValue = '';
    /**
     * @var array
     */
    private $addBetweenValue = [];
    /**
     * @var string
     */
    private $addOperator = '';

    /**
     * @var string
     */
    private $type = '';

    private const TYPES = [
        0 => 'addFilter',
        1 => 'addBetweenFilter'
    ];

    /**
     * @Annotation{'display_campo' => NomeCampo,'display_valor' => valor,'display_operador' => '=',
     * 'campo' => 'tabela.campo','operador' => '=','valor' => valor}
     * @param string $displayField
     * @param string $displayOperator
     * @param string $displayValue
     * @param string $field
     * @param string $operator
     * @param string $value
     * @return $this
     */
    public function addFilter(
        string $displayField,
        string $displayOperator,
        string $displayValue,
        string $field,
        string $operator,
        string $value
    ): Filter {
        $this->setType(self::TYPES[0]);
        $this->setAddDisplayField($displayField);
        $this->setAddDisplayOperator($displayOperator);
        $this->setAddDisplayValue($displayValue);
        $this->setAddField($field);
        $this->setAddOperator($operator);
        $this->setAddValue($value);
        $this->setFilter([
            'display_campo' => $this->getAddDisplayField(),
            'display_valor' => $this->getAddDisplayValue(),
            'display_operador' => $this->getAddDisplayOperator(),
            'campo' => $this->getAddField(),
            'operador' => $this->getAddOperator(),
            'valor' => $this->getAddValue(),
        ]);

        return $this;
    }

    public function addBetweenFilter(
        string $displayField,
        string $displayOperator,
        array $displayValue,
        string $field,
        string $operator,
        array $value
    ): Filter {
        $this->setType(self::TYPES[1]);
        $this->setAddDisplayField($displayField);
        $this->setAddDisplayOperator($displayOperator);
        $this->setAddBetweenDisplayValue($displayValue);
        $this->setAddField($field);
        $this->setAddOperator($operator);
        $this->setAddBetweenValue($value);
        $this->setFilter([
            'display_campo' => $this->getAddDisplayField(),
            'display_valor' => $this->getAddBetweenDisplayValue()['two'],
            'display_valor2' => $this->getAddBetweenDisplayValue()['one'],
            'display_operador' => $this->getAddDisplayOperator(),
            'campo' => $this->getAddField(),
            'operador' => $this->getAddOperator(),
            'valor' => $this->getAddBetweenValue()['one'],
            'valor2' => $this->getAddBetweenValue()['two'],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->filter;
    }

    public function setFilter(array $filters)
    {
        $this->filter[] = $filters;
    }

    /**
     * @return string
     */
    private function getAddDisplayValue(): string
    {
        return $this->addDisplayValue;
    }

    /**
     * @param string $addDisplayValue
     */
    private function setAddDisplayValue(string $addDisplayValue): void
    {
        $this->addDisplayValue = $addDisplayValue;
    }

    /**
     * @return string
     */
    private function getAddDisplayField(): string
    {
        return $this->addDisplayField;
    }

    /**
     * @param string $addDisplayField
     */
    private function setAddDisplayField(string $addDisplayField): void
    {
        $this->addDisplayField = $addDisplayField;
    }

    /**
     * @return string
     */
    private function getAddDisplayOperator(): string
    {
        return $this->addDisplayOperator;
    }

    /**
     * @param string $addDisplayOperator
     */
    private function setAddDisplayOperator(string $addDisplayOperator): void
    {
        $this->addDisplayOperator = $addDisplayOperator;
    }

    /**
     * @return string
     */
    private function getAddField(): string
    {
        return $this->addField;
    }

    /**
     * @param string $addField
     */
    private function setAddField(string $addField): void
    {
        $this->addField = $addField;
    }

    /**
     * @return string
     */
    private function getAddValue(): string
    {
        return $this->addValue;
    }

    /**
     * @param string $addValue
     */
    private function setAddValue(string $addValue): void
    {
        $this->addValue = $addValue;
    }

    /**
     * @return string
     */
    private function getAddOperator(): string
    {
        return $this->addOperator;
    }

    /**
     * @param string $addOperator
     */
    private function setAddOperator(string $addOperator): void
    {
        $this->addOperator = $addOperator;
    }

    /**
     * @return array
     */
    private function getAddBetweenValue(): array
    {
        return $this->addBetweenValue;
    }

    /**
     * @param array $addBetweenValue
     */
    private function setAddBetweenValue(array $addBetweenValue): void
    {
        $this->addBetweenValue = $addBetweenValue;
    }

    /**
     * @return array
     */
    private function getAddBetweenDisplayValue(): array
    {
        return $this->addBetweenDisplayValue;
    }

    /**
     * @param array $addBetweenDisplayValue
     */
    private function setAddBetweenDisplayValue(array $addBetweenDisplayValue): void
    {
        $this->addBetweenDisplayValue = $addBetweenDisplayValue;
    }

    /**
     * @return string
     */
    private function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    private function setType(string $type): void
    {
        $this->type = $type;
    }
}
