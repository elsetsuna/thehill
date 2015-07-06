<?php
header( "refresh:300;url=index.html" );
?>
	<style>
	.fonti {
    font-size: 18px;
}
	</style>


<?php
include "config/db2.php";
include "header.php";
// if (isset($_POST['name'])){
// 	$name=$_POST['name'];
// $stay=$_POST['stay'];
// } else {
// 	$name ="";
// 	$stay= "";
// }
$emailErr ="";
$phoneErr = "";
$stayErr = "";
$estat = "";
$pstat = "";
$sstat = "";
$name = "";
$email = "";
$phone = "";
$stay = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if ($_POST["email"]) {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "*Invalid email format (example@example.com)";
       $estat = false;
     } else {
     	$estat = true;
     }
   } else {
     	$estat = true;
   }
      if (($_POST["phone"])) {
     $phone = test_input($_POST["phone"]);
     // check if e-mail address is well-formed
     if (!filter_var($phone, FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>"/^[0-9+]*$/")))) {
       $phoneErr = "*Invalid phone format (+62565445)";
       $pstat = false;
     } else {
     	$pstat = true;
     }
   } else {
   	$pstat = true ;
   }
         if (($_POST["stay"])) {
     $stay = test_input($_POST["stay"]);
     // check if e-mail address is well-formed
     if (!filter_var($stay, FILTER_VALIDATE_INT)) {
       $stayErr = "*Please Only use number";
       $sstat = false;
     } else {
     	$sstat = true;
     }
   }
if (isset($_POST['name'])) 
{
  $name = $_POST['name'];
} 
else 
{
  $name = null;
}
if (isset($_POST['email'])) 
{
  $email = $_POST['email'];
} 
else 
{
  $email = null;
}
if (isset($_POST['phone'])) 
{
  $phone = $_POST['phone'];
} 
else 
{
  $phone = null;
}
$stay=$_POST['stay'];
$nat=$_POST['nat'];
   if($estat == true && $pstat == true && $sstat == true){
// echo ''.$name.'';
// echo ''.$email.'';
// echo ''.$phone.'';
mysql_query("INSERT INTO guest (guest_name,guest_stay,guest_email,guest_phone,guest_nationality,guest_date) VALUES ('$name','$stay','$email','$phone','$nat',curdate())");
$getidq = mysql_query("SELECT * FROM guest ORDER BY guest_id DESC");
$getid = mysql_result($getidq,0,'guest_id');
//header('Location:mstep2.php?guestid='.$getid.'');
echo '<script>location.href="mstep2.php?guestid='.$getid.'"</script>';
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

echo '
	<body background="images/bg.jpg">
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header" align="center">
          <img src="images/logo.png"></img><nav>
  <ul class="pagination pagination-sm">
    <li class="active"><a href="#">1 </a></li><li class="disabled"><a href="#">2</a></li>
    <li class="disabled"><a href="#">3</a></li>
  </ul>
</nav>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="" method="post">
          <table width="100%"><tr><td><font size="4">Name : </font><br>&nbsp;</td><td>
              <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Name" required value="'.$name.'"><br></td></tr>';
              	echo '<tr><td><font size="4">Email : </font><br>(Optional)</td><td><font color="red">'.$emailErr.'</font><br><input type="text" class="form-control input-lg" name="email" id="email" placeholder="example@example.com" value="'.$email.'"><br></td></tr>';
              	echo '<tr><td><font size="4">Phone : </font><br>(Optional)</td><td><font color="red">'.$phoneErr.'</font><br><input type="text" class="form-control input-lg" name="phone" id="phone" placeholder="+621234567" value="'.$phone.'"><br></td></tr>';
              echo '
              <tr><td><font size="4">Period Stay : </font><br>&nbsp;</td><td><font color="red">'.$stayErr.'</font><br><input type="text" class="form-control input-lg" name="stay" id="stay" placeholder="how many nights?" value="'.$stay.'"required><br></td></tr>
              <tr><td><font size="4">Nationality : </font><br>&nbsp;</td><td> <select class="form-control" name="nat"><option value="Indonesia">Indonesia</option>
  '; ?>
  <?php
    $getcat = mysql_query("SELECT * FROM countries");
    $rowcat = mysql_num_rows($getcat);
    for ($cat=0;$cat<$rowcat;$cat++){
     $getnamecat = mysql_result($getcat,$cat, 'countryName'); 
       echo '<option value="'.$getnamecat.'">'.$getnamecat.'</option>';
    }
  echo '
     </select><br></td></tr>
              <tr><td colspan="2"><button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue</button></td></tr></table>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  </div>	
      </div>
  </div>
  </div>
</div>
    <footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>';
?>