<?php
include_once "includes/functions.php";
$posts = get_posts();
$title = 'Главная страницца';

include_once "includes/header.php";
include_once "includes/tweet_form.php";
include_once "includes/posts.php";
include_once "includes/footer.php";
