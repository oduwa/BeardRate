<?php
require 'ParseSDK/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
ParseClient::initialize('f2RzLQGAeVldCdXamBL6j78BvIAoY0bbLyU6grgA', 'kUQylDfN3uFJqDkVOEF9zTgamjpQ2IUJ0OBbBUKL', 'gXizzWqsheyQe6oGl2gQcJPV6uNcWzQfbRbg4JN6');

  $lastIndex = $_GET["currentIndex"];

  if(isset($_GET["choice"])){
    // record the choice
    $res = 0;

    if($_GET["choice"] == 0){
      $res = 0;
    }
    else{
      $res = intval($_GET["beardLevel"]);
    }

    $newResult = new ParseObject("Result");
    $newResult->set("faceId", $lastIndex);
    $newResult->set("choice", $res);
    $newResult->save();

    // navigate to next option
    if($lastIndex < 5){
      $nextIndex = $lastIndex + 1;
      header('Location: BeardRate.php?i=' . $nextIndex);
    }
    else{
      header('Location: Thanks.php');
    }
  }
  else{
    header('Location: BeardRate.php');
  }

?>
