<?php
namespace GChartPhp\Chart;
use GChartPhp\Chart;

/**
 * @brief 3-dimensional Pie Chart
 */
class Pie3DChart extends PieChart
{
    function __construct($width = 500, $height = 200)
    {
        $this->setProperty('cht', 'p3');
        $this->setDimensions($width, $height);
    }
}