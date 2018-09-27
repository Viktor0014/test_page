<?php
echo "
<!DOCTYPE html>
<html>
 <head>
 <title>Help Page</title>";
function GetMetaTags($page){
  global $link;
  $query="select description, keywords, robots, revisit, revisit, reply_to, title from meta_tags_new where page='$page'";
  $result=mysqli_query($link,$query) or die("Died inserting login info into db.  Error returned if any: ".mysqli_error());
  if(mysqli_num_rows($result)==1) {
    return $result;
  }
  return false;
}
  if ($MetaTags=GetMetaTags($page)){
    while ($meta_tags=mysqli_fetch_array($MetaTags)){
      $description = $meta_tags['description'];
      $keywords    = $meta_tags['keywords'];
      $robots      = $meta_tags['robots'];
      $revisit     = $meta_tags['revisit'];
      $reply_to    = $meta_tags['reply_to'];
      $title       = $meta_tags['title'];
    }
  }
  echo "<meta name='description' content='".$description."'>
        <meta name='keywords' content='".$keywords."'>
        <meta name='robots' content='".$robots."'>
        <meta name='revisit-after' content='".$revisit."'>
        <meta name='reply-to' content='".$reply_to."'>
        <meta name=viewport content='width=device-width, initial-scale=1'>";

echo "<link href='https://fonts.googleapis.com/css?family=Comfortaa:700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'> ";
echo "<link href='https://fonts.googleapis.com/css?family=Noto+Sans&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'> ";

echo " <link rel='shortcut icon' href='/css/images/favicon.png' type='image/png'>";
echo "</head>
<body>
<div class='body_all'>";
echo "<div class='name_siete' > <a href='http://{$_SERVER['SERVER_NAME']}/' > mydomain.com<span class='beta'> (beta)</span></a></div>";
echo "<div class='block70'></div>";
echo "<div class='line'></div>";
?>
