<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>
<body>
<header>
    <?php require 'common/header.php'; createHeader("Friends"); ?>
</header>
<section>
    <div class="ui grid">
        <div class="eight wide column">
            <h1 class="ui header">Friends List</h1>
            <div class="ui vertical pointing menu">
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar1.png">
                    <span>Bob Brown</span>
                </a>
                <a class="item" href="friends-ex.php">
                    <img class="ui avatar image" src="assets/avatar2.png">
                    <span>Bob Brownie</span>
                </a>
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar3.png">
                    <span>Charlie Chapel</span>
                </a>
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar1.png">
                    <span>Charlie Chapelie</span>
                </a>
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar2.png">
                    <span>Dave David</span>
                </a>
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar3.png">
                    <span>Dave David</span>
                </a>
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar1.png">
                    <span>John Doe</span>
                </a>
            </div>
        </div>
        <div class="eight wide column">
            <h1 class="ui header">Find Friends</h1>
            <form class="ui form">
                <div class="field">
                    <label>Search</label>
                    <input type="text" placeholder="Find friends">
                </div>
                <div class="field">
                    <label>Planning To Read</label>
                    <select multiple="" class="ui search dropdown">
                        <option value="">Select a book</option>
                        <option value="1984">1984</option>
                        <option value="at">A Tale of Two Cities</option>
                        <option value="aw">Alice in Wonderland</option>
                        <option value="bnw">Brave New World</option>
                        <option value="f">Fahrenheit 451</option>
                        <option value="m">Moby Dick</option>
                    </select>
                </div>
                <button class="ui right floated button">Search</button>
            </form>
            <h1 class="ui header clearfix">Recommended Friends</h1>
            <div class="ui vertical pointing menu">
                <a class="item">
                    <button onclick="window.location='friends-success.php'" class="mini ui icon button" style="float:right;">
                        <i class="plus icon"></i>
                    </button>
                    <img class="ui avatar image" src="assets/avatar.png">
                    <span style="text-decoration: underline;">John Doe</span>
                    <p>Reading List: <span class="people-list-info">Brave New World</span></p>
                </a>
                <a class="item">
                    <button class="mini ui icon button" style="float:right;">
                        <i class="plus icon"></i>
                    </button>
                    <img class="ui avatar image" src="assets/avatar1.png">
                    <span style="text-decoration: underline;">Bob Brown</span>
                    <p>Reading List: <span class="people-list-info">1984, Alice in Wonderland</span></p>
                </a>
                <a class="item">
                    <button class="mini ui icon button" style="float:right;">
                        <i class="plus icon"></i>
                    </button>
                    <img class="ui avatar image" src="assets/avatar2.png">
                    <span style="text-decoration: underline;">Charlie Chapel</span>
                    <p>Reading List: <span class="people-list-info">Tale of Two Cities</span></p>
                </a>
                <a class="item">
                    <button class="mini ui icon button" style="float:right;">
                        <i class="plus icon"></i>
                    </button>
                    <img class="ui avatar image" src="assets/avatar3.png">
                    <span style="text-decoration: underline;">Dave David</span>
                    <p>Reading List: <span class="people-list-info">Moby Dick</span></p>
                </a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
