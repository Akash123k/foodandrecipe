<?php
if(isset($_GET['article_id'])) {
  include('articles/' . $_GET['article_id'] . '.php');
}
?>
