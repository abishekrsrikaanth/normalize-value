<?php

if (!function_exists('normalize_value')) {

    /**
     * @param $value
     * @param $steps
     * @return mixed
     * @throws Exception
     */
    function normalize_value($value, $steps)
    {
        $index = \_\findLastIndex($steps, function ($step) use ($value) {
            return $step['value'] <= $value;
        });

        //Out of Bounds
        if ($index === -1) return $steps[0]['norm'];

        if ($index >= count($steps) - 1) return $steps[count($steps) - 1]['norm'];

        $stepLow = $steps[$index];
        $stepHigh = $steps[$index + 1];

        $normalizedValue =
            $stepLow['norm'] +
            ($stepHigh['norm'] - $stepLow['norm']) *
            ($value - $stepLow['value']) /
            ($stepHigh['value'] - $stepLow['value']);

        //Invalid calculation

        if (is_nan($normalizedValue) || is_infinite(abs($normalizedValue))) {
            throw new \Exception("Invalid value or steps");
        }

        return $normalizedValue;
    }

}