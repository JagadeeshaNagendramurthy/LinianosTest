<?php

namespace UnitTestFiles\Test;

/**
 * Description of MultiplesGenerator
 *
 * @author jaga
 */
class MultiplesGenerator {

    public function translate($num) {
        $MultiplesReplaceArr = ['Linio', 'IT', 'Linianos'];
        $multiplesArr = [3, 5, 15];

        $multi = $num;
        for ($j = 2; $j >= 0; $j--) {
            $modnum = $num % $multiplesArr[$j];

            if ($modnum == 0) {
                $multi = $MultiplesReplaceArr[$j];
                break;
            }
        }

        return strval($multi);
    }

    public function run($num) {
        $output = array();
        for ($i = 1; $i <= $num; $i++) {

            $output[$i] = $this->translate($i);
        }

        return $output;
    }

}
