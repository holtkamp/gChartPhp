<?php
namespace GChartPhp\Chart\BarChart;
use GChartPhp\Chart\BarChart;

class OverlappedBarChart extends BarChart
{
    function __construct($width = 200, $height = 200)
    {
        $this->setChartType('o', 'v');
        $this->setDimensions($width, $height);
    }
    public function setHorizontal($isHorizontal = true)
    {
        if($isHorizontal)
        {
            $this->setChartType('o', 'h');
        }
        else
        {
            $this->setChartType('o', 'v');
        }
    }
}