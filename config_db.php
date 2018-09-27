<?php
# Данные для подключения к БД
$dbhost="localhost";
$dbname="project_1";//should be database name
$dbpass="";
$dbuser="";
function connectToDB() {
  global $link, $dbhost, $dbuser, $dbpass, $dbname;
  ($link = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname")) || die("Couldn't connect to MySQL");
}

connectToDB();
?>
