<!DOCTYPE html> <html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>
<body>
<header>
    <?php require 'common/header.php'; createHeader("Schedule"); ?>
</header>
<section>
    <div class="schedule-header">
        <div class="schedule-month-display">
            <button class="ui circular ui icon button">
                <i class="icon angle left"></i>
            </button>
            <span class="schedule-month-name">April</span>
            <button class="ui circular ui icon button">
                <i class="icon angle right"></i>
            </button>
        </div>
        <button class="ui right labeled icon button schedule-new-button">
            New Meeting
            <i class="icon plus"></i>
        </button>
    </div>
    <div class="clearfix"></div>
    <table class="ui fixed celled table">
        <thead>
        <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
        </tr>
        </tbody>
    </table>
</section>
</body>
</html>
