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
            <div class="two fields">
                <div class="field">
                    <label>First Name</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text">
                </div>
            </div>

            <div class="field">
                <label>User Name</label>
                <input type="text">
            </div>
            <div class="field">
                <label>Email Address</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password">
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <input type="password">
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>I agree to the Terms and Conditions</label>
                </div>
            </div>

            <div class="field">
                <label>Already have an account? &nbsp; Click <span style="text-decoration: underline;" class="clickable" onclick="window.location='login.php'">here</span> to log in!</label>
            </div>
            <button onclick="window.location='index.php'" class="ui button blue">Sign Up</button>
        </div>
    </div>

</body>

</html>