<?php
header( "refresh:300;url=index.html" );
?>
<?php
include "config/db2.php";

// $name=$_POST['name'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];
// $stay=$_POST['stay'];
// $nat=$_POST['nat'];

// echo ''.$name.'';
// mysql_query("INSERT INTO guest (guest_name,guest_stay,guest_email,guest_phone,guest_nationality,guest_date) VALUES ('$name','$stay','$email','$phone','$nat',curdate())");
// $getidq = mysql_query("SELECT * FROM guest ORDER BY guest_id DESC");
// $getid = mysql_result($getidq,0,'guest_id');
$getid = $_GET['guestid'];
include "header.php";
echo '<style>
.container {
    width: auto;
    max-width: 1000px;
    padding: 0px 15px;
}</style>';
$q = mysql_query("SELECT * FROM m_question");
$qresult1 = mysql_result($q,0,'mq_value');
$qresult2 = mysql_result($q,1,'mq_value');
$qresult3 = mysql_result($q,2,'mq_value');
$qresult4a = mysql_result($q,3,'mq_value');
$qresult4b = mysql_result($q,4,'mq_value');
$qresult4c = mysql_result($q,5,'mq_value');
$qresult4d = mysql_result($q,6,'mq_value');
$qresult4e = mysql_result($q,7,'mq_value');
$qresult4f = mysql_result($q,8,'mq_value');
$qresult4g = mysql_result($q,9,'mq_value');
$qresult5a = mysql_result($q,10,'mq_value');
$qresult5b = mysql_result($q,11,'mq_value');
$qresult6 = mysql_result($q,12,'mq_value');
$qresult7a = mysql_result($q,13,'mq_value');
$qresult7b = mysql_result($q,14,'mq_value');
//q_id
$qid1 = mysql_result($q,0,'mq_id');
$qid2 = mysql_result($q,1,'mq_id');
$qid3 = mysql_result($q,2,'mq_id');
$qid4a = mysql_result($q,3,'mq_id');
$qid4b = mysql_result($q,4,'mq_id');
$qid4c = mysql_result($q,5,'mq_id');
$qid4d = mysql_result($q,6,'mq_id');
$qid4e = mysql_result($q,7,'mq_id');
$qid4f = mysql_result($q,8,'mq_id');
$qid4g = mysql_result($q,9,'mq_id');
$qid5a = mysql_result($q,10,'mq_id');
$qid5b = mysql_result($q,11,'mq_id');
$qid6 = mysql_result($q,12,'mq_id');
$qid7a = mysql_result($q,13,'mq_id');
$qid7b = mysql_result($q,14,'mq_id');

echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="images/logo.png"></img><nav>
  <ul class="pagination pagination-sm">
    <li class="disabled"><a href="#">1 </a></li><li class="active"><a href="#">2</a></li>
    <li class="disabled"><a href="#">3</a></li>
  </ul>
</nav>
      </div>';
echo '<form action="step3.php" method="post">
<table border="0" class="table table-striped">
<tr>
<td>1. '.$qresult1.'</td>
<td width="400px"><label class="radio-inline">
  		<input type="radio" name="1a" id="1a" value="Yes" required> Yes
		</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="radio-inline">
  		<input type="radio" name="1a" id="1a" value="No"> No
		</label></td>
</tr>';
echo '<tr>
<td>2. '.$qresult2.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="2a" id="2a" value="i_travel_agent" required> Internet Travel Agent
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="2a" id="2a" value="Travel_Agent"> Travel Agent
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="2a" id="2a" value="Friends"> Friends
    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="2a" id="2a" value="Other"> Other
    </label></td>
</tr>';
echo '<tr>
<td>3. '.$qresult3.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="3a" id="3a" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="3a" id="3a" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="3a" id="3a" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="3a" id="3a" value="Poor"> Poor
    </label></td>
</tr>';
echo '<tr>
<td>4. Hotel Characteristics</td>
<td width="400px"></td>
</tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a. '.$qresult4a.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4a" id="4a" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4a" id="4a" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4a" id="4a" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4a" id="4a" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b. '.$qresult4b.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4b" id="4b" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4b" id="4b" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4b" id="4b" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4b" id="4b" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c. '.$qresult4c.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4c" id="4c" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4c" id="4c" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4c" id="4c" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4c" id="4c" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;d. '.$qresult4d.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4d" id="4d" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4d" id="4d" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4d" id="4d" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4d" id="4d" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;e. '.$qresult4e.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4e" id="4e" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4e" id="4e" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4e" id="4e" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4e" id="4e" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;f. '.$qresult4f.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4f" id="4f" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4f" id="4f" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4f" id="4f" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4f" id="4f" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;g. '.$qresult4g.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="4g" id="4g" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4g" id="4g" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4g" id="4g" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="4g" id="4g" value="Poor"> Poor
    </label></td></tr>';
echo '<tr>
<td>5. General Review</td>
<td width="400px"></td>
</tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a. '.$qresult5a.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="5a" id="5a" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5a" id="5a" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5a" id="5a" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5a" id="5a" value="Poor"> Poor
    </label></td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b. '.$qresult5b.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="5b" id="5b" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5b" id="5b" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5b" id="5b" value="Friends"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="5b" id="5b" value="Poor"> Poor
    </label></td></tr>';
echo '<tr>
<td>6. Quality Versus Price</td>
<td width="400px"></td>
</tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp; '.$qresult6.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="6a" id="6a" value="Excellence" required> Excellence
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="6a" id="6a" value="Good"> Good
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="6a" id="6a" value="Fair"> Fair
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="6a" id="6a" value="Poor"> Poor
    </label></td></tr>';
echo '<tr>
<td>7. Grand Mutiara Hotel Berastagi</td>
<td width="400px"></td>
</tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a. '.$qresult7a.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="7a" id="7a" value="Yes" required> Yes
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="7a" id="7a" value="No"> No
    </label>
</td></tr>';
echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b. '.$qresult7b.'</td>
<td width="400px"><label class="radio-inline">
      <input type="radio" name="7b" id="7b" value="Yes" required> Yes
    </label>&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">
      <input type="radio" name="7b" id="7b" value="No"> No
    </label>
</td></tr>';
echo '<input type="hidden" name="qid1" id="qid1" value="1">
<input type="hidden" name="qid2" id="qid2" value="2">
<input type="hidden" name="qid3" id="qid3" value="3">
<input type="hidden" name="qid4a" id="qid4a" value="4a">
<input type="hidden" name="qid4b" id="qid4b" value="4b">
<input type="hidden" name="qid4c" id="qid4c" value="4c">
<input type="hidden" name="qid4d" id="qid4d" value="4d">
<input type="hidden" name="qid4e" id="qid4e" value="4e">
<input type="hidden" name="qid4f" id="qid4f" value="4f">
<input type="hidden" name="qid4g" id="qid4g" value="4g">
<input type="hidden" name="qid5a" id="qid5a" value="5a">
<input type="hidden" name="qid5b" id="qid5b" value=5b>
<input type="hidden" name="qid6" id="qid6" value=6>
<input type="hidden" name="qid7a" id="qid7a" value="7a">
<input type="hidden" name="qid7b" id="qid7b" value="7b">
<input type="hidden" name="guestid" id="guestid" value="'.$getid.'"></table>
<button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" id="submit">Continue</button></form>
    </div>
    <footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
';
?>