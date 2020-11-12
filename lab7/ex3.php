<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.html">Back to HOME</a>

    <h3>Exercise 3.1</h3>

    <?php
        // Find the sum and the number of positive elements.  
        function problem1($arr){
            $res = array_sum($arr);

            $count = 0;

            foreach($arr as $val){
                if($val > 0){
                    $count++;
                }
            }

            echo "Sum of elements: ". $res ."\n and number of positive elements: ". $count;
        }


        problem1(array(2,-3,4,5,-6,7,8,9,10,-9));
        
    ?>
    <br>

    <h3>Exercise 3.2</h3>

    <?php
        // Find the minimum and maximum of  the array elements and their positions. 
        function problem2($arr){        
                        
            $maxi = max($arr[0],$arr[1]);
            $mini = min($arr[0],$arr[1]);
            $max_index = 0;
            $min_index = 0;

            for((int)$i = 0;$i < count($arr);$i++){
                if($arr[$i] > $maxi){
                    $maxi = $arr[$i];
                    $max_index = $i;
                }elseif($arr[$i] < $mini){
                    $mini = $arr[$i];
                    $min_index = $i;
                }
            }

            echo "Maximum number is : " . $maxi . ".\n Index of maximum number is : " . $max_index ."\n";
            echo "Minimum number is : " . $mini . ".\n Index of minimum number is: " . $min_index . "\n";

        }


        problem2(array(2,-3,4,5,-6,7,8,9,10,-9));
    
    
    ?>

    <br>

    <h3>Exercise 3.3</h3>
    <?php
        // Find the minimum element among the elements on the odd positions of the array.   
        function problem3($arr){        
            $new_arr = array();     
            for((int)$i=0;$i<=count($arr);$i++){
                if($i % 2 != 0){
                    array_push($new_arr,$arr[$i]);
                }
            }

            echo "Minimum number among the elements on the odd positions of the array is : " . min($new_arr) . ".\n";

        }

        problem3(array(2,-3,4,5,-6,7,8,9,10,-9));
    ?>
    <br>

    <h3>Exercise 3.4</h3>
    <?php
        //Find the sum and the number of positive elements located between the minimum and maximum elements of the array. 
        function problem4($arr){    
            $mini = $arr[0];
            $maxi = $arr[0];
            $mindex = 0;
            $maxdex = 0;
            $summa = 0;
            $count = 0;

            foreach($arr as $index => $val){
                if($val > $maxi){
                    $maxi = $val;
                    $maxdex = $index;
                }

                if($val < $mini){
                    $mini = $val;
                    $mindex = $index;
                }
            }
          

            for((int)$i = $mindex; $i <= $maxdex;$i++){
                $summa += $arr[$i];

                if($arr[$i] > 0){
                    $count++;
                }
            }
            echo "Sum : ". $summa ."\n and number ". $count . "\n of positive elements between min and max";  
       
        }


        problem4(array(2,-3,4,5,-6,7,8,9,10));
    ?>
    <br>
    
    <h3>Exercise 3.5</h3>
    <?php
        // is an element equal to 5, assign to X  a value that is equal to the sum of all positive elements.
        function problem5($arr){

            $sum = 0;
            $isFound = false;

            foreach($arr as $val){
                
                if($val == 5){
                    $isFound = true;
                }
                
                if($val > 0){
                    $sum += $val;
                }
                
            }
            
            if($isFound){
                echo $sum ."\n";
            }
        }


        problem5(array(2,4,2,4,-5,6,5,2,5,6,7,-1,-9,-2));
    ?>

    <br>
    <h3>Exercise 3.6</h3>

    <?php
        function problem6($arr){
            $sum = 0;
            foreach($arr as $val){
                if($val < 0){
                    $sum += $val;
                }
            }

            echo "Find sum of negative numbers ". $sum ."\n";
        }


        problem6(array(1,2,4,5,6,7,8,9,10,-12,-2,5,-3,5,7));
    
    ?>

    <br>
    <h3>Exercise 3.7</h3>

    <?php
        function problem7($arr){
            $maxi = $arr[0];
            $maxdex = 0;
            foreach($arr as $index => $val){
                if($val > $maxi){
                    $maxi = $val;
                    $maxdex = $index;
                }
            }

            echo "Maximum number is ". $maxi ."\n and index is ". $maxdex;
        }


        problem7(array(1,3,5,2,6,-1,4,-2,6,-7,-1,10));

    ?>

    <br>
    <h3>Exercise 3.8</h3>

    <?php
        function problem8($arr){
            $new_arr = array();     
            for((int)$i=0;$i<=count($arr);$i++){
                if($i % 2 != 0){
                    array_push($new_arr,$arr[$i]);
                }
            }

            echo "Minimum number among the elements on the odd positions of the array is : " . min($new_arr) . ".\n";

        }


        problem8(array(-1,2,4,5,0,2,5,6,7,20,-4,8,9,10));

    ?>

    <br>
    <h3>Exercise 3.9</h3>

    <?php
        function problem9($arr){    
            $mini = $arr[0];
            $maxi = $arr[0];
            $mindex = 0;
            $maxdex = 0;
            $summa = 0;
            $count = 0;

            foreach($arr as $index => $val){
                if($val > $maxi){
                    $maxi = $val;
                    $maxdex = $index;
                }

                if($val < $mini){
                    $mini = $val;
                    $mindex = $index;
                }
            }
          

            for((int)$i = $mindex; $i <= $maxdex;$i++){
                $summa += $arr[$i];

                if($arr[$i] > 0){
                    $count++;
                }
            }
            echo "Sum : ". $summa ."\n and number ". $count . "\n of positive elements between min and max";  
       
        }


        problem9(array(2,-3,4,5,-6,7,8,9,10));
    ?>

    <br>
    <h3>Exercise 3.10</h3>

    <?php
    
        function problem10($arr){
            $sum = 0;
            $isFound = false;

            foreach($arr as $val){
                
                if($val == 7){
                    $isFound = true;
                }
                
                if($val > 0){
                    $sum += $val;
                }
                
            }
            
            if($isFound){
                echo $sum ."\n";
            }
        }


        problem10(array(1,2,3,5,6,7,8,9,10,-1,-2,4,-5,6));
    
    ?>

    <br>
    <h3>Exercise 3.11</h3>

    <?php
        function problem11($arr){
                         
            $maxi = max($arr[0],$arr[1]);
            $mini = min($arr[0],$arr[1]);
            $max_index = 0;
            $min_index = 0;

            for((int)$i = 0;$i < count($arr);$i++){
                if($arr[$i] > $maxi){
                    $maxi = $arr[$i];
                    $max_index = $i;
                }elseif($arr[$i] < $mini){
                    $mini = $arr[$i];
                    $min_index = $i;
                }
            }

            echo "Maximum number is : " . $maxi . ".\n Index of maximum number is : " . $max_index ."\n";
            echo "Minimum number is : " . $mini . ".\n Index of minimum number is: " . $min_index . "\n";

        }

        problem11(array(1,2,3,4,5,6,7,8,-2,-4,5,-3,-6));
    ?>
    <br>
    <h3>Exercise 3.12</h3>

    <?php
        function problem12($arr){
            $new_arr = array();     
            for((int)$i=0;$i<=count($arr);$i++){
                if($i % 2 != 0){
                    array_push($new_arr,$arr[$i]);
                }
            }

            echo "Maximum number among the elements on the odd positions of the array is : " . max($new_arr) . ".\n";

        }

        problem12(array(1,2,3,4,5,6,7,8,9,10,-2,-4,-7,8));

        $s1 = "asd";
        $s2 = "sda";

        $res = "{$s1} {$s2}";

    ?>

</body>
</html>