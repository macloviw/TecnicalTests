<?php
//Coderbyte find the largest secuence of a consecutive characters inside an array of strings

function findLargestSecuence($arr) {
    $count = 0;
    $twoDarray = array();
    $newTwoDarray = array();
    // Proccess the string to find the largest secuence inside all elelements of the array
    for($i = 0; $i < count($arr); $i++) {
        if(longSubstring($arr[$i], "0") > $count) {
            $count = longSubstring($arr[$i], "0");
        }
        //Transform the array to a new array with the other dimension
        $split_array = str_split($arr[$i]);
        for($j = 0; $j < count($split_array); $j++) {
            $twoDarray[$j][$i] = $split_array[$j];
        }
    }
    // Then find the largest secuence inside the new array
    for($i = 0; $i < count($twoDarray); $i++) {
        array_push($newTwoDarray, implode("", $twoDarray[$i]));
        if(longSubstring($newTwoDarray[$i], "0") > $count) {
            $count = longSubstring($$newTwoDarray[$i], "0");
        }
    }
    return $count;
}

// find the longest substring of n's character or string
function longSubstring($s, $n)
{
    $ans = 1;
    $temp = 1;
     
    // Traverse the string
    for ($i = 1; $i < strlen($s); $i++)
    {
         if($s[$i] == $n){
            // If character is same as
            // previous increment temp value
            if ($s[$i] == $s[$i - 1])
            {
                ++$temp;
            }
            else
            {
                $ans = max($ans, $temp);
                $temp = 1;
            }
        }
    }
     
    $ans = max($ans, $temp);
 
    // Return the required answer
    return $ans;
}

$arr2 = array("01111", "01101", "00011", "11110");
echo findLargestSecuence($arr2);
?>
