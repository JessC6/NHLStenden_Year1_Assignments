<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Numbers Without Using Functions or Direct Re-assignments</title>
</head>
<body>
    <?php
       // Storing the values in variables
       $left = 5;
       $right = 7;

       // Swtitch without the use of a function or re-assignments
       $left = $left + $right; // $left = 12
       $right = $left - $right; // $right = 5
       $left = $left - $right; // $left = 7

       echo 'The value of the variable $left is...' . $left . "<br>";
       echo 'The value of the variable $right is...' . $right . "<br>";
    ?>
</body>
</html>
