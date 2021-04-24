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
          <a class="item">
            <span><i class="user icon"> </i>Profile</span>
          </a>
          <a class="item active">
            <span><i class="users icon"> </i> Friends</span>
          </a>
          <a class="item" href="profile-reading.php">
            <span><i class="book icon"> </i>Reading List</span>
          </a>
          <a class="item">
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

        <div class="clearfix"></div>

        <div class="ui vertical pointing menu">
          <a class="item">
            <img class="ui avatar image" src="assets/avatar.png">
            <span>John Doe</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar1.png">
            <span>Bob Brown</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar2.png">
            <span>Charlie Chapel</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar3.png">
            <span>Dave David</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar.png">
            <span>John Doe</span>
          </a>
          <a class="item" href="friends-ex.php">
            <img class="ui avatar image" src="assets/avatar1.png">
            <span>Bob Brown</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar2.png">
            <span>Charlie Chapel</span>
          </a>
          <a class="item">
            <img class="ui avatar image" src="assets/avatar3.png">
            <span>Dave David</span>
          </a>
        </div>
      </div>
  </section>
</body>

</html>
