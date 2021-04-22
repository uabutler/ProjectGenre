<!DOCTYPE html>
<html lang="en">
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
        <button class="ui right labeled icon button schedule-new-button" onclick="window.location='/new-meeting.php'">
            New Meeting
            <i class="icon plus"></i>
        </button>
    </div>
    <div class="clearfix"></div>
    <table class="ui fixed celled table schedule-calendar">
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
            <td>
                <span class="calendar-date-number other-month">28</span>
            </td>
            <td>
                <span class="calendar-date-number other-month">29</span>
            </td>
            <td>
                <span class="calendar-date-number other-month">30</span>
            </td>
            <td>
                <span class="calendar-date-number other-month">31</span>
            </td>
            <td>
                <span class="calendar-date-number">1</span>
            </td>
            <td>
                <span class="calendar-date-number">2</span>
            </td>
            <td>
                <span class="calendar-date-number">3</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="calendar-date-number">4</span>
            </td>
            <td>
                <span class="calendar-date-number">5</span>
            </td>
            <td>
                <span class="calendar-date-number">
                    6
                    <a href="/meeting-detail.php">
                    <div class="ui message meeting-info-box">
                        <div class="header">
                            Alice in Wonderland
                        </div>
                        <p>3:00pm - 5:00pm</p>
                    </div>
                    </a>
                </span>
            </td>
            <td>
                <span class="calendar-date-number">7</span>
            </td>
            <td>
                <span class="calendar-date-number">8</span>
            </td>
            <td>
                <span class="calendar-date-number">9</span>
            </td>
            <td>
                <span class="calendar-date-number">10</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="calendar-date-number">11</span>
            </td>
            <td>
                <span class="calendar-date-number">12</span>
            </td>
            <td>
                <span class="calendar-date-number">13</span>
            </td>
            <td>
                <span class="calendar-date-number">14</span>
            </td>
            <td>
                <span class="calendar-date-number">15</span>
            </td>
            <td>
                <span class="calendar-date-number">16</span>
            </td>
            <td>
                <span class="calendar-date-number">17</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="calendar-date-number">18</span>
            </td>
            <td>
                <span class="calendar-date-number">19</span>
            </td>
            <td>
                <span class="calendar-date-number">
                    20
                    <a href="/meeting-detail.php">
                    <div class="ui message meeting-info-box">
                        <div class="header">
                            A Tale of Two Cities
                        </div>
                        <p>3:00pm - 5:00pm</p>
                    </div>
                    </a>
                </span>
            </td>
            <td>
                <span class="calendar-date-number">21</span>
            </td>
            <td>
                <span class="calendar-date-number">22</span>
            </td>
            <td>
                <span class="calendar-date-number">23</span>
            </td>
            <td>
                <span class="calendar-date-number">24</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="calendar-date-number">25</span>
            </td>
            <td>
                <span class="calendar-date-number">26</span>
            </td>
            <td>
                <span class="calendar-date-number">27</span>
            </td>
            <td>
                <span class="calendar-date-number">28</span>
            </td>
            <td>
                <span class="calendar-date-number">29</span>
            </td>
            <td>
                <span class="calendar-date-number">30</span>
            </td>
            <td>
                <span class="calendar-date-number other-month">1</span>
            </td>
        </tr>
        </tbody>
    </table>
</section>
</body>
</html>
