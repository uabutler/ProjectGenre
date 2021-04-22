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
        <a class="item active" href="profile.php">
            <span><i class="user icon"> </i>Profile</span>
          </a>
          <a class="item" href="profile-friends.php">
            <span><i class="users icon"> </i> Friends</span>
          </a>
          <a class="item" href="profile-reading.php">
            <span><i class="book icon"> </i>Reading List</span>
          </a>
          <a class="item" href="profile-security.php">
            <span><i class="lock icon"> </i>Security</span>
          </a>
        </div>
      </div>
      <div class="twelve wide column">
        <div class="ui form">
          <div class="two fields">
            <div class="field">
              <label>First Name</label>
              <input type="text" value="John">
            </div>
            <div class="field">
              <label>Last Name</label>
              <input type="text" value="Doe">
            </div>
          </div>

          <div class="field">
            <label>User Name</label>
            <input type="text" value="johnwick123">
          </div>
          <div class="field">
            <label>Introduction</label>

            <input type="text"  value="This is a brief biography about this person and their interest that they provide when creating their profile">
          </div>

          <div class="field">
            <label>Interests</label>
            <input type="text" value="Romance, Science Fiction, Horror">
          </div>

          <button onclick="window.location='profile.php'" style="float:right" class="ui button blue">Update</button>

        </div>
      </div>
  </section>
</body>

</html>