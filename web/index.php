<html>
  <head>
    <?php include 'includes.php';?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>BEARD-RATE </title>
  </head>

  <body>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">BeardRate</h4>
          </div>
          <div class="modal-body">
            <p>BeardRate wants to find out if you'd rather bang baby-faced dudes,
            straight up grizzly bears or guys with facial hair somewhere in between.</p><br />
            <p>BeardRate shows you a picture of a shaved guy and the same guy with a
            randomly selected level of face scruff. Then you choose. </p><br />
            <p><h4>How awesome is that?</h4>
            Pretty fucking awesome, that's how.</p>
          </div>
          <div class="modal-footer">
            <button type="button" onClick="no()" class="btn btn-default" data-dismiss="modal">I'm a pussy</button>
            <button type="button" onClick="yes()" class="btn btn-primary" data-dismiss="modal">Show me some dudes</button>
          </div>
        </div>

      </div>
    </div>

    <div id="buttonDiv" style="display:none">
      <button type="button" onClick="tryAgain()" class="btn btn-primary center-button">Am I a pussy?</button>
    </div>

    <script type="text/javascript">
      $(window).load(function(){
          $('#myModal').modal('show');
      });

      function no(){
        $('#buttonDiv').show();
      }

      function yes(){
        window.location.href = 'BeardRate.php';
      }

      function tryAgain(){
        $('#myModal').modal('show');
      }
    </script>

  </body>
</html>
