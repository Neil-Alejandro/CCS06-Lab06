<form method = "POST" action="thankyou.php">

Complete Name: <input type="text" name="complete_name" /><br />

Email Address: <input type="email" name = "email"/><br ?>

Type: <select name="type">
<option value="Inquiry">Inquiry</option>
<option value="Feedback">Feedback</option>
<option value="Other">Other</option>
</select> <br />

Level of Satisfaction: <input type = "range" name = "satisfaction_level" min="0" max="10" step="1">

Feedback Message: <textarea name = "message" ></textarea>

<button> Submit </button>
</form>