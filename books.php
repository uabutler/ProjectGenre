<?php
function printCard($img, $link, $title, $desc)
{
    return
    "
    <div class='ui card'>
            <a class='image' href='$link'>
                <img class='book-cover-img' src='$img' alt='$title'>
            </a>
            <div class='content'>
                <a class='header' href='$link'>$title</a>
                <div class='meta'>
                    $desc
                </div>
            </div>
        </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>
<body>
<header>
    <?php require 'common/header.php'; createHeader("Books"); ?>
</header>
<section>
    <div class="ui action input search-adv" style="width: 30%">
        <input type="text" placeholder="Title, ISBN, ...">
        <div class="ui basic compact button">Search</div>
        <button class="ui basic icon button hintable" data-content="Advanced Search">
            <i class="cogs icon"></i>
        </button>
    </div>
</section>
<section class="clearfix genre-display">
    <h1 class="ui header genre-display-title">Horror</h1>
    <a class="genre-display-extra" href="#">more &raquo;</a>
    <div class="ui link cards clearfix">
        <?= printCard
        (
                "/assets/book-covers/alice.png",
                "#",
                "Alice in Wonderland",
                "A fantastic story about a girl who finds a cat in a whole"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/1984.png",
            "#",
            "1984",
            "A story about a society that has managed to get rid of almost all crime"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/brave.png",
            "#",
            "Brave New World",
            "People are finally always happy and free of genetic illness"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/F451.png",
            "#",
            "Fahrenheit 451",
            "An entire society insists that we will all wait for the movie"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/moby.png",
            "#",
            "Moby Dick",
            "A wannabe fisherman is unable to catch just one fish"
        ) ?>
    </div>
</section>
<section class="clearfix genre-display">
    <h1 class="ui header genre-display-title">Science Fiction</h1>
    <a class="genre-display-extra" href="#">more &raquo;</a>
    <div class="ui link cards clearfix">
        <?= printCard
        (
            "/assets/book-covers/moby.png",
            "#",
            "Moby Dick",
            "A wannabe fisherman is unable to catch just one fish"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/F451.png",
            "#",
            "Fahrenheit 451",
            "An entire society insists that we will all wait for the movie"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/1984.png",
            "#",
            "1984",
            "A story about a society that has managed to get rid of almost all crime"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/alice.png",
            "#",
            "Alice in Wonderland",
            "A fantastic story about a girl who finds a cat in a whole"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/brave.png",
            "#",
            "Brave New World",
            "People are finally always happy and free of genetic illness"
        ) ?>
    </div>
</section>
<section class="clearfix genre-display">
    <h1 class="ui header genre-display-title">Romance</h1>
    <a class="genre-display-extra" href="#">more &raquo;</a>
    <div class="ui link cards clearfix">
        <?= printCard
        (
            "/assets/book-covers/alice.png",
            "#",
            "Alice in Wonderland",
            "A fantastic story about a girl who finds a car in a whole"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/1984.png",
            "#",
            "1984",
            "A story about a society that has managed to get rid of almost all crime"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/brave.png",
            "#",
            "Brave New World",
            "People are finally always happy and free of genetic illness"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/F451.png",
            "#",
            "Fahrenheit 451",
            "An entire society insists that we will all wait for the movie"
        ) ?>
        <?= printCard
        (
            "/assets/book-covers/moby.png",
            "#",
            "Moby Dick",
            "A wannabe fisherman is unable to catch just one fish"
        ) ?>
    </div>
</section>
</body>
</html>