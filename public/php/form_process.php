<?php
include("connect.php");

if(isset($_POST['submit'])){
$s_name = strip_tags($_POST['name']);
$name = mysqli_real_escape_string($db, $s_name);
if(empty($_POST['email'])){
$email = "--";
}else{
$s_email = strip_tags($_POST['email']);
$email = mysqli_real_escape_string($db, $s_email);
}
$s_tel = strip_tags($_POST['tel']);
$tel = mysqli_real_escape_string($db, $s_tel);
$s_address = strip_tags($_POST['address']);
$address = mysqli_real_escape_string($db, $s_address);
$s_qualification = strip_tags($_POST['qualification']);
$qualification = mysqli_real_escape_string($db, $s_qualification);
$s_field = strip_tags($_POST['field']);
$field = mysqli_real_escape_string($db, $s_field);
$section="Training";
$blank="-";
$captcha = $_POST['g-recaptcha-response'];

    $que = "INSERT INTO form VALUES(NULL, '$name', '$email', '$tel', '$address', '$qualification', '$field','$blank','$section')";
    $run = mysqli_query($db, $que);
    if($run){
       	?>
       	<script>
       		alert("Your form was sent!!");
       		window.open("../home-training.php","_self");
       	</script>
    
       	<?php
       	}





}
?>