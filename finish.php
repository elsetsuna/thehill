<?php
header( "refresh:5;url=index.html" );
?>
<script >
(function () {
    var timeLeft = 5,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();
</script>
<?php
include "config/db2.php";
include "header.php";
echo '<style>
.container {
    width: auto;
    max-width: 680px;
    padding: 0px 15px;
</style>';
$guestid = $_POST['guestid'];
$anse1 = $_POST['ea1'];
$anse2 = $_POST['ea2'];
mysql_query("INSERT INTO e_answer (guest_id,eq_id,ea_value,ea_date) VALUES ('$guestid','1','$anse1',CURDATE())");
mysql_query("INSERT INTO e_answer (guest_id,eq_id,ea_value,ea_date) VALUES ('$guestid','2','$anse2',CURDATE())");
echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="images/logo.png"></img>
      </div>';
echo"Thank you for participating in <b>The Hill Hotel & Resort's</b> Guest comment program.<br><br>
Your opinions are very important to us. We appreciate your feedback and will use it to evaluate and make improvements to serve you better.<br><br>This page will be redirected in <span id='countdown'>5</span> second(s).</div>";
echo '<footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>';
?>