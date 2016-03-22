<?php
  $index = 1;

  if(isset($_GET["i"])){
    $index = $_GET["i"];
  }

  $beardLevel = rand(1,3);

?>

<html>
  <head>
    <?php include 'includes.php';?>
    <title>BEARD-RATE </title>
  </head>

  <body>

    <h1>Which is hotter?</h1><br />

    <!-- IMAGES -->
    <div class="row">
      <div class="col-md-6">
          <a id="shaved-link" class="thumbnail" href="#">
              <img class="img-responsive" src=<?php echo '"images/face_' . $index . '_shaved.png"'?> alt="" width="320" height="480">
          </a>
      </div>

      <div class="col-md-6">
          <a id="bearded-link" class="thumbnail" href="#">
              <img class="img-responsive" src=<?php echo '"images/face_' . $index . '_beard_' . $beardLevel . '.png"'?> alt="" width="320" height="480">
          </a>
      </div>
    </div>

    <script>
      $(document).ready(function() {

        $("#shaved-link").click(function() {
          window.location.href = 'BeardResponseProcessor.php?choice=0&currentIndex=' + <?php echo($index); ?>;
        });

        $("#bearded-link").click(function() {
          window.location.href = 'BeardResponseProcessor.php?choice=1&beardLevel=' + <?php echo($beardLevel); ?> + '&currentIndex=' + <?php echo($index); ?>;
        });

      });
    </script>

  </body>
</html>
