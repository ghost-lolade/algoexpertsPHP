<?php

class TwoSum
{
    /**
     * @param int[] $nums
     * @param int $target
     *
     * @return int[]
     */
    public function twoSum($nums, $target)
    {
//         traverse through the array
//         calculate the current value x subtracted from 10 call it y
//         create a hash table, check if y is in the hash table
//         if yes return currrent value x and y

        $values = [];

//         for($x = 0; $x< count($nums); $x++) {

//             $y = $target - $nums[$x];

//             if(in_array($y, $values)) {
//                 $y = array_search($y, $values);
//                 $x = array_search($nums[$x], $nums);
//                 return [$y, $x];
//             }

//             array_push($values, $nums[$x]);
//         }

        foreach ($nums as $key => $value) {
            $y = $target - $value;

            if (in_array($value, $values)) {
                $y = array_search($y, $values);

                return [$y, $key];
            }

            array_push($values, $value);
        }

        return [];
    }
}
