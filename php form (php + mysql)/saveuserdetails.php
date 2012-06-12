<?
require_once ("includes/config.inc");

if (isset($_POST['name_first'])) {

	$name_first = trim(mysql_real_escape_string($_POST['name_first']));
	$name_last = trim(mysql_real_escape_string($_POST['name_last']));
	$num_tel = trim(mysql_real_escape_string($_POST['num_tel']));
	$address = trim(mysql_real_escape_string($_POST['address']));
	
	$name_first = str_replace("'", "", $name_first);
	$name_last = str_replace("'", "", $name_last);
	$num_tel = str_replace("'", "", $num_tel);
	$address = str_replace("'", "", $address);
	
	if (preg_match ("/^([[:alpha:]]|-|')+$/i", $name_first)) {
		$a = TRUE;
	} else {
		$a = FALSE;
		$message = "Please enter a valid first name.";
	}
	
	if (preg_match ("/^([[:alpha:]]|-|')+([[:alpha:]]|[[:space:]]|_|\.|-|'|.)+$/i", $name_last)) {
		$b = TRUE;
	} else {
		$b = FALSE;
		$message = "Please enter a valid surname.";
	}
	
	if (preg_match ("/^$|^([[:digit:]])+([[:digit:]]|[^[:space:]])+$/i", $num_tel)) {
		$c = TRUE;
	} else {
		$c = FALSE;
		$message = "Please enter a valid telephone number.";
	}
	
	if (preg_match ("/^([[:alnum:]]|-|')+([[:alnum:]]|[[:space:]]|_|\.|-|'|.)+$/i", $address)) {
		$d = TRUE;
	} else {
		$d = FALSE;
		$message = "Please enter a valid address.";
	}

	
if ($a AND $b AND $c AND $d) {
	
	$Query = "CREATE TABLE IF NOT EXISTS users (user_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT, name_first CHAR(20) NOT NULL, name_last CHAR(20) NOT NULL, num_tel CHAR(16) NOT NULL, address CHAR(36) NOT NULL, PRIMARY KEY (user_id))";
	$Result = mysql_query($Query, $Link) or die (mysql_error());
	
	$Query = "INSERT INTO users VALUES ('0', '$name_first', '$name_last', '$num_tel', '$address')";
	$Result = mysql_query($Query, $Link) or die (mysql_error());
	if ($Result) {
		echo "Thank you for registering with our site!";
		} else {
		echo "You were not registered due to system error. Please try again.<BR><A HREF=\"sprockets_form.html\">Continue</A></CENTER>\n";
		} 	
	}
	
}

if ($message) { 
	print ("<CENTER><FONT COLOR=red>$message</FONT><BR><A HREF=\"bluebird_widgets_form.html\">Continue</A></CENTER>\n");
}

?>