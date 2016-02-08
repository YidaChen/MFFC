<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title><?php echo $title ?></title>

</head>

<body>

<?php
echo $req.'<br>'.$req2;
?>
<div class="article">

    <h1><?php echo $article['title'] ?></h1>

    <div class="content">

        <?php echo $article['content'] ?>

    </div>

</div>

<ul class="findme">

    <li>Find Me !</li>

    <li>

        <?php echo $find_me ?>

    </li>

</ul>

</body>

</html>
