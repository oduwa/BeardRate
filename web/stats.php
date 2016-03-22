<?php
require 'ParseSDK/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
ParseClient::initialize('f2RzLQGAeVldCdXamBL6j78BvIAoY0bbLyU6grgA', 'kUQylDfN3uFJqDkVOEF9zTgamjpQ2IUJ0OBbBUKL', 'gXizzWqsheyQe6oGl2gQcJPV6uNcWzQfbRbg4JN6');

$faceCount = 5;
$faceResponses = array_fill(0, $faceCount, array_fill(0,4,0));
$query = new ParseQuery("Result");

// Process ALL (without limit) results with "each".
// Will throw if sort, skip, or limit is used.
$query->each(function($obj) {
    global $faceResponses;
    $faceIdx = $obj->get("faceId")-1;
    $choiceIdx = $obj->get("choice")-0;
    $faceResponses[$faceIdx][$choiceIdx] = $faceResponses[$faceIdx][$choiceIdx]+1;
});


?>

<html>
  <head>
    <?php include 'includes.php';?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>BEARD-RATE </title>
  </head>

  <body>

    <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Clean-Shaven</th>
        <th>Beard Pic 1</th>
        <th>Beard Pic 2</th>
        <th>Beard Pic 3</th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i = 0; $i < $faceCount; $i++) {
          echo('<tr>');
          echo('<td><img class="img-responsive" src="images/face_');
          echo(intval($i)+1);
          echo('_shaved.png" alt="" width="32" height="48" /></td>');
          echo('<td>'. intval($faceResponses[$i][0]) .'</td>');
          echo('<td>'. intval($faceResponses[$i][1]) .'</td>');
          echo('<td>'. intval($faceResponses[$i][2]) .'</td>');
          echo('<td>'. intval($faceResponses[$i][3]) .'</td>');
          echo('</tr>');
        }
      ?>
    </tbody>
  </table>

  </body>
</html>
