<?php 
  include_once 'inc/header.php';
  include_once 'inc/menu.php';


  drawMenu($leftMenu, 'nav');
// if (isset($_GET['name'])) {
//   echo $_GET['name'];
//   echo $_GET['lastname'];
// }
// if (isset($_POST['name'])) {
//   echo $_POST['name'];
//   echo $_POST['lastname'];
// }
  if (isset($_REQUEST['name'])) {
  echo $_REQUEST['name'];
  echo $_REQUEST['lastname'];
}
 ?>

<div style="margin: 50px 400px ">
	 <form method="REQUEST" action="forms.php">
	  First name:<br>
	  <input type="text" name="name" value="Mickey">
	  <br>
	  Last name:<br>
	  <input type="text" name="lastname" value="Mouse">
	  <br><br>
	  <input type="submit" value="Submit">
	</form> 
</div>

 



