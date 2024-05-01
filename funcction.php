<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
</head>
<style>
  *{
  margin:0;
  padding:0;
  box-sizing:border-box;

   

}
.container{
  max-width: 60%;
  background-color:blue;
  margin:auto;
  padding:23px
}

</style>

<body>
  
  <div class="container">
    this is a function examples

    <?php

    function print5(){
      echo "FIVE";
    }
    print5();


    function printnum($number){
      echo "<br>you numer is";
      echo $number;
    }
  
    printnum(23);



    ?>




  </div>
</body>
</html>