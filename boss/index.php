<?php
include "../config/db2.php";
include "header.php";
echo '<style>
.container {
    width: auto;
    max-width: 680px;
    padding: 0px 15px;
</style>';
echo '
    <div class="container">
      <div class="page-header" align="center">
        <img src="../images/logo.png"></img>
      </div>';
echo"<a href='report1.php'>Report1</a>";
echo '</div><footer class="footer">
      <div class="container" align="center">
      © The Hill Hotel & Resort 2015. Empowered by <img src="images/footer.png"></img><a href="http://medanbits.com">MedanBITS</a>
      </div>
    </footer>';
?>