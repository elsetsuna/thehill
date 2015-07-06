<?php
header( "refresh:300;url=index.html" );
?>
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
$queid1 = $_POST['qid1'];
$queid2 = $_POST['qid2'];
$queid3 = $_POST['qid3'];
$queid4a = $_POST['qid4a'];
$queid4b = $_POST['qid4b'];
$queid4c = $_POST['qid4c'];
$queid4d = $_POST['qid4d'];
$queid4e = $_POST['qid4e'];
$queid4f = $_POST['qid4f'];
$queid4g = $_POST['qid4g'];
$queid5a  = $_POST['qid5a'];
$queid5b = $_POST['qid5b'];
$queid6 = $_POST['qid6'];
$queid7a = $_POST['qid7a'];
$queid7b = $_POST['qid7b'];
$ans1 = $_POST['1a'];
$ans2 = $_POST['2a'];
$ans3 = $_POST['3a'];
$ans4a = $_POST['4a'];
$ans4b = $_POST['4b'];
$ans4c = $_POST['4c'];
$ans4d = $_POST['4d'];
$ans4e = $_POST['4e'];
$ans4f = $_POST['4f'];
$ans4g = $_POST['4g'];
$ans5a = $_POST['5a'];
$ans5b = $_POST['5b'];
$ans6 = $_POST['6a'];
$ans7a = $_POST['7a'];
$ans7b = $_POST['7b'];
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid1','$ans1',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid2','$ans2',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid3','$ans3',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4a','$ans4a',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4b','$ans4b',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4c','$ans4c',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4d','$ans4d',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4e','$ans4e',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4f','$ans4f',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid4g','$ans4g',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid5a','$ans5a',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid5b','$ans5b',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid6','$ans6',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid7a','$ans7a',CURDATE()) ");
mysql_query("INSERT INTO m_answer (guest_id,mq_id,ma_value,ma_date) VALUES ('$guestid','$queid7b','$ans7b',CURDATE()) ");
echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="images/logo.png"></img><nav>
  <ul class="pagination pagination-sm">
    <li class="disabled"><a href="#">1 </a></li><li class="disabled"><a href="#">2</a></li>
    <li class="active"><a href="#">3</a></li>
  </ul>
</nav>
      </div>';
$geteqq = mysql_query("SELECT * FROM e_question");
$geteqva1 = mysql_result($geteqq,0,'eq_value');
$geteqva2 = mysql_result($geteqq,1,'eq_value');
echo '<form action="finish.php" method="post">8. '.$geteqva1.'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Optional)<br><br><textarea class="form-control" style="width: 95%; margin-left: 20px;" rows="3" name="ea1" id="ea1"></textarea>';
echo '<br>9. '.$geteqva2.'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Optional)<br><br><textarea class="form-control" style="width: 95%; margin-left: 20px;" rows="3" name="ea2" id="ea2"></textarea>
		<input type="hidden" name="guestid" id="guestid" value="'.$guestid.'">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" id="submit">Finish</button></form>';
echo ' </div> <footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
';
?>