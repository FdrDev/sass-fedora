<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <style>
  img{border-radius: 12px;}
  h1{color:white}
  body{
  font-family: 'Montserrat',sans-serif;
  background: radial-gradient(#03a9f4, #050dff);
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  }
  </style>
    <title>Hello World from PHP</title>
  </head>
  <body>

    <?php

    function rndImg(){
      include "vars.php";

      $isActive= false;
      do {
        $ind = rand(0,4);
        $img = $imgs[$ind];

        $path=$img["path"];
        $url = $img["url"];
        $isActive = $img["is_active"];

      } while (!$isActive);
      echo "<a href='$url'><img src='$path'></a>";
    }

    rndImg();

     ?>
  </body>
</html>
