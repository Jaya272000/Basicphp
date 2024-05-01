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
    This is a container

    <?php
    $age=34;
    if($age>18){
      echo "you can go to party";
    }
    else{
      echo "you can not go to the party";
    
    }
    ?>
  </div>
</body>
</html>