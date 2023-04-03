include 'libs/load.php';
?>
<pre>
<?php
// echo Session::getUser()->getEmail();
// $image_tmp = $_FILES['post_image']['tmp_name'];
// $text = $_POST['post_text'];
// echo $image_tmp;
// Post::registerPost($text, $image_tmp);

Post::getAllPosts();
?></pre>