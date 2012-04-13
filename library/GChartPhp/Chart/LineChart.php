<?php
namespace GChartPhp\Chart;
use GChartPhp\Chart;

class LineChart extends Chart
{
    public function __construct($width = 200, $height = 200)
    {
        $this->setProperty('cht', 'lc');
        $this->setDimensions($width, $height);
    }
    public function getUrl()
    {
        $retStr = parent::getUrl();
        return $retStr;
    }
}