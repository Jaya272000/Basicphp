<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;

   

}
.container{
  max-width: 60%;
  background-color:brown;
  margin:auto;
  padding:23px
}
</style>
<body>
  <div class="container">
    <h1>Lets Learn about PHP</h1>

    <?php
    // create array in php
    $languages=array("python","c++","php","nodejs");
    echo $languages[0];


    // loop in php

    // while loop
    $a=0;
    while ($a <= 10) {
      echo "the value of a is";
      echo $a;
      echo "<br>";
      $a++;
      # code...
    }

    // ierating arrays in php using while loop
    $a=0;
    while ($a < count($languages)) {
      echo "the value of languages is :";
      echo $languages[$a];
      echo "<br>";
      $a++;
    }

    // for loop

    for($a=0; $a<10; $a++){
      echo "<br> the value of a is:";
      echo $a;
    }

    // for each loop

    foreach($languages as $value){
      echo "<br> the value is from for each";
      echo $value;
    }

   
    ?>
  </div>
</body>
</html>