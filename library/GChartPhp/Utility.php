<?php
namespace GChartPhp;
/**
 * @brief Utility class
 *
 * @version 0.2
 * @since 0.4
 */
class Utility
{
    public static function getMaxOfArray($ArrayToCheck)
    {
        $maxValue = 0;

        foreach($ArrayToCheck as $temp)
        {
            if(is_array($temp))
            {
                $maxValue = max($maxValue, Utility::getMaxOfArray($temp));
            }
            else
            {
                $maxValue = max($maxValue, $temp);
            }
        }
        return $maxValue;
    }
}