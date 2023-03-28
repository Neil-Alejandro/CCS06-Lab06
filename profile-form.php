<?php
if (isset($_POST['complete_name'])):
	echo "<style>
	.center {
		margin: auto;
		width: 50%;
		padding: 10px;
		font-size: 26px;
		font-family: Arial, Helvetica, sans-serif;
		}
		</style>";
	echo "<div class='center'>";
    echo "<h1 align='center'>Your Profile</h1>";
	echo "<hr>";
	echo "<div class='center'>";
    echo "Full name: " . $_POST['complete_name'] . " <br/> ";
	echo "Birthday: " . $_POST['birthdate'] . " <br/> ";
	echo "Email Address: " . $_POST['email'] . " <br/> ";
	echo "Program: " . $_POST['program'] . " <br/> ";
	echo "Favorite Color: " . $_POST['favorite_color'] . " <br/> ";
	echo "Superpower Level: " . $_POST['superpower_level']  . " <br/> ";
	echo "</div>";
    echo "<hr>";
	echo "</div>";
    // Debug
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
else:
?>

<style>
.center {
  margin: auto;
  width: 50%;
  padding: 10px;
  font-size: 26px;
  font-family: Arial, Helvetica, sans-serif;
}
</style>

<div class="center">

<h1 align="center">Enter Data</h1>

<hr>

<div class="center">

<form method="POST" action="profile-form.php" >

Name: <input type="text" name="complete_name" /> <br />

Birthdate: <input type="date" name="birthdate" /> <br />

Email Address: <input type="email" name="email" /> <br />

Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select> <br />

Favorite Color: <input type="color" name="favorite_color" />
<br />

Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" />
<br />

<button>Submit</button>

</form>
</div>
<hr>
</div>

<?php
endif;
?>