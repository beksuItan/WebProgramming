<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Exercise 3.1</p>

    <?php

        function first($arr){
            $res =array_sum($arr);

            $count = 0;

            foreach($arr as $val){
                if($val > 0){
                    $count++;
                }
            }

            echo "Sum of elements: ". $res ."\n and number of positive elements: ". $count;
        }

        $arr = array(2,-3,4,5,-6,7,8,9,10,-9);

        first($arr);
        
    ?>
    <br>

    <p>Exercise 3.2</p>

    <?php

        function second($arr){        
                        
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

            echo "Maximum number is : " . $maxi . "\n. Index of maximum number is : " . $max_index ."\n";
            echo "Minimum number is : " . $mini . "Index of minimum number is: " . $min_index . "\n";

        }

        $arr = array(2,-3,4,5,-6,7,8,9,10,-9);

        second($arr);
    
    
    ?>

    <br>

    <p>Exercise 3.3</p>

    <?php

        function third($arr){        
            $new_arr = array();

            foreach($arr as $val){
                if($val % 2 != 0){
                    array_push($new_arr, $val);
                }
            }

            echo min($new_arr);

        }

        $arr = array(2,-3,4,5,-6,7,8,9,10,-9);

        third($arr);
    
    
    ?>

    <br>
</body>
</html>