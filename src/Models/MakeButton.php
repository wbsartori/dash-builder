<?php

namespace Dashboards\Components\Buttons;

class MakeButton
{
    /**
     * @param array $elements
     * @return string
     */
    public static function button(array $elements): string
    {
        $styles = 'height: 28px;width: 8rem; cursor: pointer;';

        if ($elements['function']) {
            $elements['function'] = 'onclick=' . $elements['function'] . ';';
        }

        return '<button type="submit" '
            . $elements['function']
            . ' style="'
            . $styles . '">'
            . $elements["name"]
            . '</button>';
    }

    /**
     * @param string $nameAndId
     * @param string $filterName
     * @param array $items
     * @return string
     */
    public static function selectButton(string $nameAndId, string $filterName, array $items): string
    {
        $styles = 'height: 28px;width: 8rem; cursor: pointer;';
        $select = '<select style="' . $styles . '" name="' . $nameAndId . '" id="' . $nameAndId . '">';
        $select .= '<option style="text-align: center" value="">' . $filterName . '</option>';
        foreach ($items as $item) {
            $select .= '<option value="' . $item["id"] . '">' . $item["description"] . '</option>';
        }
        $select .= '</select>';

        return $select;
    }

    /**
     * @param string $text
     * @return string
     */
    public function alert(string $text): string
    {
        return 'alert(' . $text . ')';
    }
}
