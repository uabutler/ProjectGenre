<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>

<body class="auth-container">
    <div id="main-logo">
        <img src="/assets/logo.png">
    </div>
    <div id="main-buttons">
        <span style="text-decoration: underline;" class="clickable" onclick="window.location='profile.php'">Welcome!</span>
        &emsp;
    </div>
    <div class="ui one column centered grid auth">
        <div class="column "></div>
        <div class="ui form">
            <div class="field">
                <label>User Name</label>
                <input type="text">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password">
            </div>
            <div class="field">
                <label>Don't have an account? &nbsp; Click <span style="text-decoration: underline;" class="clickable" onclick="window.location='signup.php'">here</span> to sign up!</label>
            </div>
            <button class="ui button blue" onclick="window.location='index.php'" type="submit">Log In</button>
        </div>
    </div>
    </div>


</body>

</html>