<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/config_db.php');
    $page=basename(__FILE__);
    include_once($_SERVER['DOCUMENT_ROOT'].'/header_simple_test.php');

echo " <div class='block40'></div>";

echo "<div  class='video'><a name='video2'></a> <span class='text14'> Тестовое видео 1</span><br> <div class='block20'></div> ";
echo "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/3YxaaGgTQYM\" frameborder=\"0\"; allow=\"encrypted-media\" allowfullscreen></iframe></div>";

echo "<div  class='video'><a name='video1'></a> <span class='text14'> Тестовое видео 2</span><br>
     <div class='block20'></div>";
echo "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/6Ejga4kJUts\" frameborder=\"0\" allow=\"encrypted-media\" allowfullscreen></iframe></div>";

echo " <div class='line400'></div>";


echo "<div class='line'> </div><p> <span class='text14'> &nbsp;Если вы не нашли ответ на интересующий вас вопрос, можете отправить
	 письмо на электронный адрес <a class='link_words' href='mailto:test@domain.com'>test@domain.com</a>.<br>";


echo "<div class='line20'></div>";
?>
<?php
?>
