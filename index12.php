<?php
$title = "Lesson 12";
require_once "blocks/header.php";
// include "blocks/header.php"; для дрібніших блоків
// include_once "blocks/header.php";

?>
<div class="container mt-2">
    <h1>Головна сторінка</h1>
    <p>&nbsp;</p>
    <form action="check_post.php" method="post">
        <h2>check_post</h2>
        <input type="text" name="username" placeholder="Enter your name" class="form-control"><br>
        <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
        <textarea name="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <input type="submit" value="Send form" class="btn btn-success">

    </form>
    <p>&nbsp;</p>
    <form action="check_get.php" method="get">
        <h2>check_get</h2>
        <input type="text" name="username" placeholder="Enter your name" class="form-control"><br>
        <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
        <textarea name="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <input type="submit" value="Send form" class="btn btn-success">

    </form>
</div>


<?php
require_once "blocks/footer.php";

?>