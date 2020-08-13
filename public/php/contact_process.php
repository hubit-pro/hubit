<?php
include("connect.php");
if(isset($_POST['submit'])){
    $s_name = strip_tags($_POST['name']);
	$s_email = strip_tags($_POST['email']);
	$s_phone = strip_tags($_POST['phone']);
	$s_msg = strip_tags($_POST['msg']);
    
    $name=mysqli_real_escape_string($db, $s_name);
    $email=mysqli_real_escape_string($db, $s_email);
    $phone=mysqli_real_escape_string($db, $s_phone);
	$msg=mysqli_real_escape_string($db, $s_msg);

	$section="Solution";
	$blank="-";
   	$query="INSERT INTO form VALUES(NULL, '$name', '$email', '$phone','$blank','$blank','$blank','$msg','$section')";
   	$run=mysqli_query($db, $query);
   	if($run){
   		?>
   		<script>
   			alert("Your data was inserted!!");
   			window.open("../contact.php","_self");
   		</script>

   		<?php
   	}
   }
?>