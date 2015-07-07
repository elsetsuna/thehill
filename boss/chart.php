<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 1.2.1
 * @license: see license.txt included in package
 */
include "config/db2.php";
$from = $_POST['from'];
$to  = $_POST['to'];
$qno1yes = mysql_query("SELECT * FROM m_answer WHERE ma_date BETWEEN '$from' AND '$to' AND mq_id = '1' AND ma_value='Yes'");
$countrowno1 = mysql_num_rows($qno1yes);
$qno2yes = mysql_query("SELECT * FROM m_answer WHERE ma_date BETWEEN '$from' AND '$to' AND mq_id = '1' AND ma_value='No'");
$countrowno2 = mysql_num_rows($qno2yes);
 //make pie
include("lib/inc/chartphp_dist.php");
$p = new chartphp();
$p->data = array(array(array('Yes', $countrowno1),array('No', $countrowno2)));
$p->chart_type = "pie";
// Common Options
$p->title = "";
$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="lib/js/jquery.min.js"></script>
        <script src="lib/js/chartphp.js"></script>
        <link rel="stylesheet" href="lib/js/chartphp.css">

    <style>
        /* white color data labels */
        .jqplot-data-label{color:white;}
    </style>
    </head>
    
    <body>
    asdasdas
        <div style="width:20%; min-width:100px;">
        <?php echo $out; ?>
        </div><br>
        <?php include "chart2.php"; ?>
    </body>
</html>

