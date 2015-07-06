<?php
include "../config/db2.php";
include "header.php";
echo '  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
';
echo '<style>
.container {
    width: auto;
    max-width: 680px;
    padding: 0px 15px;}
.ui-datepicker {
    width: 14em;
    padding: 0.2em 0.2em 0px;
    display: none;
}
</style>';
echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="../images/logo.png"></img>
      </div>';
echo'<p><form action="resultreport1.php" method="post"><label for="from">From</label>
<input type="text" id="from" name="from">
<label for="to">to</label>
<input type="text" id="to" name="to">
<button class="btn btn-primary" type="submit" name="submit">Continue</button>
</form>';
echo '</div><footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>';
echo '  <script>
  $(function() {
    $( "#from" ).datepicker({
      dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 2,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>'
?>