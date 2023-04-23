<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
table{
  margin-left:7%;
}

</style>

  <td width="10%">
     <!-- <img border="0" src="image/h.jpg" width="100%" height="150" align="right"></td> -->
  </tr>
</table>
  <table width="60%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
