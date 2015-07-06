<?php
echo '<style>
.printbreak {
page-break-after: always;
}
.container {
    width: auto;
    max-width: 800px;
    padding: 0px 15px;
}</style>';
include "config/db2.php";
include "header.php";http://localhost/hill/images/logo.png
$from = $_POST['from'];
$to  = $_POST['to'];
echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="../images/logo.png" height="75"></img>
      </div>';
$q = mysql_query("SELECT * FROM guest WHERE guest_date BETWEEN '$from' AND '$to'");
$countguestrow = mysql_num_rows($q);
$x = "";
for ($c=0;$c<$countguestrow;$c++){
    while($x<=$c){
      $x++;
    }
    $gid = mysql_result($q,$c,'guest_id');
    $gname = mysql_result($q,$c,'guest_name');
    $gstay = mysql_result($q,$c,'guest_stay');
    $gmail = mysql_result($q,$c,'guest_email');
    $gphone = mysql_result($q,$c,'guest_phone');
    $gnat = mysql_result($q,$c,'guest_nationality');
    $gdate = mysql_result($q,$c,'guest_date');

echo '
<div class="printbreak">
<table border="1" width="100%">
<tr><td> Guest Name : '.$gname.' </td><td>Stay Period : '.$gid.'</td></tr>
<tr><td> Guest Email : '.$gmail.' </td><td>Guest Phone : '.$gphone.'</td></tr>
<tr><td> Guest Nationality : '.$gnat.' </td><td>Guest Date : '.$gdate.'</td></tr></table><br>';
$qm = mysql_query("SELECT * FROM m_question");
$qmrow = mysql_num_rows($qm);
//$qa = mysql_query("SELECT * FROM m_asnwer WHERE guest_id = '$gid'");
echo '<table class="table table-striped">';
for ($que=0;$que<$qmrow;$que++){
	$queid = mysql_result($qm,$que,'mq_id');
	$queval = mysql_result($qm,$que,'mq_value');
	$qa = mysql_query("SELECT * FROM m_answer WHERE mq_id = '$queid' AND guest_id = '$gid'");
  $countqa = mysql_num_rows($qa);
  $ans = mysql_result($qa,0,'ma_value');
	echo '
<tr><td>'.$queval.'</td><Td width="100" height="5">'.$ans.'</td></tr>
';
}
echo '
</table><table class="table table-striped">';
$qe = mysql_query("SELECT * FROM e_question");
$qerow = mysql_num_rows($qe);
for ($eue=0;$eue<$qerow;$eue++){
$eueid = mysql_result($qe,$eue,'eq_id');
$eueval = mysql_result($qe,$eue,'eq_value');
$ea = mysql_query("SELECT * FROM e_answer WHERE eq_id = '$eueid' AND guest_id = '$gid'");
$eans = mysql_result($ea,0,'ea_value');
echo '<tr><td>'.$eueval.'</td></tr><tr><td>'.$eans.'</td></tr>';
}
echo '</table><br><br>
</div>
';}
echo '</div>';
?>