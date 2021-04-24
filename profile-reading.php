<?php
function printCard($img, $link, $title, $desc)
{
  return
    "
    <div class='ui card'>
        <a class='image' href='$link'>
            <img class='profile-reading-height' src='$img' alt='$title'>
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
    <?php require 'common/header.php';
    createHeader(""); ?>
  </header>
  <section>
    <div class="ui grid">
      <div class="four wide column">
        <img class="circular image center" src="assets/avatar.png" style="width: 60%">
        <div class="ui vertical pointing menu">
        <a class="item" href="profile.php">
            <span><i class="user icon"> </i>Profile</span>
          </a>
          <!-- <a class="item" href="profile-friends.php">
            <span><i class="users icon"> </i> Friends</span>
          </a> -->
          <a class="item active" href="profile-reading.php">
            <span><i class="book icon"> </i>Reading List</span>
          </a>
          <a class="item" href="profile-security.php">
            <span><i class="lock icon"> </i>Security</span>
          </a>
        </div>
      </div>
      <div class="twelve wide column">
      <div class="ui action input right-align" style="float: right; width: 30%;">
          <input type="text" >
          <div class="ui basic compact button">Search</div>
          </button>
        </div>

        <section class="clearfix genre-display">
          <h1 class="ui header genre-display-title">Horror</h1>
          <div class="ui link cards clearfix">
            <?= printCard(
              "assets/book-covers/alice.png",
              "book-ex.php",
              "Alice in Wonderland",
              "A fantastic story about a girl who finds a cat in a hole"
            ) ?>
            <?= printCard(
              "assets/book-covers/1984.png",
              "#",
              "1984",
              "A story about a society that has managed to get rid of almost all crime"
            ) ?>
            <?= printCard(
              "assets/book-covers/brave.png",
              "#",
              "Brave New World",
              "People are finally always happy and free of genetic illness"
            ) ?>
            <?= printCard(
              "assets/book-covers/F451.png",
              "#",
              "Fahrenheit 451",
              "An entire society insists that we will all wait for the movie"
            ) ?>
            <?= printCard(
              "assets/book-covers/moby.png",
              "#",
              "Moby Dick",
              "A wannabe fisherman is unable to catch just one fish"
            ) ?>
          </div>
        </section>

        <section class="clearfix genre-display">
          <h1 class="ui header genre-display-title">Romance</h1>
          <div class="ui link cards clearfix">
            <?= printCard(
              "assets/book-covers/alice.png",
              "book-ex.php",
              "Alice in Wonderland",
              "A fantastic story about a girl who finds a car in a hole"
            ) ?>
            <?= printCard(
              "assets/book-covers/1984.png",
              "#",
              "1984",
              "A story about a society that has managed to get rid of almost all crime"
            ) ?>
            <?= printCard(
              "assets/book-covers/brave.png",
              "#",
              "Brave New World",
              "People are finally always happy and free of genetic illness"
            ) ?>
            <?= printCard(
              "assets/book-covers/F451.png",
              "#",
              "Fahrenheit 451",
              "An entire society insists that we will all wait for the movie"
            ) ?>
            <?= printCard(
              "assets/book-covers/moby.png",
              "#",
              "Moby Dick",
              "A wannabe fisherman is unable to catch just one fish"
            ) ?>
          </div>
        </section>


      </div>
  </section>
</body>

</html>
