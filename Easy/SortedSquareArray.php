<?php

class SortedSquareArray
{
    /**
     * @param int[] $nums
     *
     * @return int[] sorted
     *
     * QUESTION
     * -------------------------------------------------------------
     * Given an integer array nums sorted in non-decreasing order, return an array of the squares of each number sorted in non-decreasing order.
     * Example 1:
     *
     * Input: nums = [-4,-1,0,3,10]
     * Output: [0,1,9,16,100]
     * Explanation: After squaring, the array becomes [16,1,0,9,100].
     * After sorting, it becomes [0,1,9,16,100].
     * ---------------------------------------------------------------
     * CONCEPT
     *
     * If the array is sorted then it's an hint that your solution should be O(N) time complexity.
     *
     * We will linitialize an array with the lenght of the input array where we will store our squared results
     * Then we will have a pointer at the end and beginning of our input array
     * we will traverse through the array in reverse and compare the absolute value value of out pointers according to the current index and  insert square of the bigger one
     * into our result array and increase or decrease the pointer accordingly.
     */
    public function sortedSquares($nums)
    {
        $sortedSquaresArr = array_fill(0, count($nums), 0);
        $smallerPointer = 0;
        $largerPointer = count($nums) - 1;

        for ($idx = count($nums) - 1; $idx >= 0; $idx--) {
            $smallerValue = abs($nums[$smallerPointer]);
            $largerValue = abs($nums[$largerPointer]);

            if ($smallerValue > $largerValue) {
                $sortedSquaresArr[$idx] = $smallerValue * $smallerValue;
                $smallerPointer += 1;
            } else {
                $sortedSquaresArr[$idx] = $largerValue * $largerValue;
                $largerPointer -= 1;
            }
        }

        return $sortedSquaresArr;
    }
}
