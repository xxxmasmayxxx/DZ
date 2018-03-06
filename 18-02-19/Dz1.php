<?php
/*Написать функцию, которая будет принимать в качестве аргумента не пустой массив, будет находить минимальное и
максимальнрое значения массива и будет возвращать массив найденых ['min'=>$min, 'max' => $max] значений.
*/

            function func($arr){
    if (empty($arr)) {
        echo ' Массив пустой ';
        return;
    }

    else {
       $arrMinMax = [];
        echo '<br>' . '<br>' . 'Массив не пустой' . '<br>' . '<br>';
        array_push($arrMinMax, min($arr));
        array_push($arrMinMax, max($arr));
        print_r($arrMinMax);
    }

}

func([]);
            func([2,67,34,222,1,888,55]);
