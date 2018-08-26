
<?php
require_once("cookie_names.php");
// before body

if(!isset($_COOKIE[$cookie_navbar_expand])) {
    setcookie($cookie_navbar_expand, "true", time() + (86400 * 30), "/");
}


if($_COOKIE[$cookie_navbar_expand] == "true"){
	echo "<body>";
}else{
	echo "<body class='mini-navbar'>";
}

?>


<?php
//after body

?>