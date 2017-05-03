<?php
function selection_sort($tab)
{
    $n = count($tab);
    for($j=0; $j<$n-1; $j++)
    {
        $pmin = $j;
        for($i=$j+1; $i<$n; $i++)
        {
            if($tab[$i] < $tab[$pmin])
            {
                $pmin = $i;
            }
        }
        $x = $tab[$pmin];
        $tab[$pmin] = $tab[$j];
        $tab[$j] = $x;
    }   
    return $tab;
}

var_dump(selection_sort([3,2,1,6,7,8,4,9,11,10]));





