<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make it 24</title>
</head>
<body>
    <?php
       // Saving the sets of numbers in arrays for better containment of the intengers
       $set1 = [6, 4, 4, 1];
       $set2 = [8, 2, 6, 1];
       $set3 = [6, 8, 8, 2];

       /* Function that is capable of grabbing those array of numbers and use them with watever
       operator is fit to reach the number 24*/
       /*Function makeIt24($numArray){
        for ($x = 0; $x <= count($numArray); $x++){
            if (next($numArray) !== true)
                if ($numArray[$x] + $numArray[$x + 1] != 24)
                    continue;
                if ($numArray[$x] + $numArray[$x + 2] != 24)
                    continue;
                if ($numArray[$x] + $numArray[$x + 3] != 24)
                    continue;
            else
                continue;
        }
       }

       makeIt24($set1);*/

       // Direct play of operators
       echo "<p>" . $set1[0] . '*' . $set1[1] . '=' . $set1[0] * $set1[1] . "</p>";
       echo "<p>" . $set2[0] . '*' . $set2[2] . ':' . $set2[1] . '=' . $set2[0] * $set2[2] / $set2[1] . "</p>";
       echo "<p>" . $set3[0] . '+' . $set3[1] . '+' . $set3[2] . '+' . $set3[3] . '=' . $set3[0] + $set3[1] + $set3[2] + $set3[3];
    ?>
</body>
</html>
