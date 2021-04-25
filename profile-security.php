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
          <a class="item" href="profile-reading.php">
            <span><i class="book icon"> </i>Reading List</span>
          </a>
          <a class="item active" href="profile-security.php">
            <span><i class="lock icon"> </i>Security</span>
          </a>
        </div>
      </div>
      <div class="twelve wide column">
        <div class="ui form">
          <div class="field">
            <label>Email Address</label>
            <input type="text" value="johndoe123@gmail.com">
          </div>

          <div class="field">
            <label>Confirm Old Password</label>
            <input type="password">
          </div>

          <div class="field">
            <label>New Password</label>
            <input type="password">
          </div>

          <div class="field">
            <label>Confirm New Password</label>
            <input type="password">
          </div>

          <button onclick="window.location='password-success.php'" style="float:right" class="ui button blue">Confirm Change</button>
        </div>
      </div>
  </section>
</body>

</html>