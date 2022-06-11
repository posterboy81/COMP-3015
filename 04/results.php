<?php

use Cloudinary\Cloudinary;

$c = new Cloudinary();



const MAX_FILESIZE = 2000000;
const FILE_TYPE = "image/jpeg";

print_r($_FILES['profile_picture']);

$username   = '';
$password   = '';
$firstname  = '';
$lastname   = '';
$picture    = '';

if ($_FILES['profile_picture']['type'] == FILE_TYPE && $_FILES['profile_picture']['size'] <= MAX_FILESIZE) {
  $username   = trim($_POST['username']);
  $password   = $_POST['password'];
  $firstname  = trim($_POST['firstname']);
  $lastname   = trim($_POST['lastname']);
  $picture    = 'upload/' . md5(time() . $_FILES['profile_picture']['name']);

  move_uploaded_file($_FILES['profile_picture']['tmp_name'], $picture);
} else {
  echo "Invalid profile picture!";
  exit;
}
?>
<html>
<div>
  <span>Username: </span><span><?php echo $username; ?></span>
</div>
<div>
  <span>First Name: </span><span><?php echo $firstname; ?></span>
</div>
<div>
  <span>Last Name:</span><span><?php echo $lastname; ?></span>
</div>
<div>
  <img src="<?php echo $picture; ?>" alt="Profile picture of <?php echo $username; ?>" />
</div>

</html>