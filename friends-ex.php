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
        <div class="four wide column">
            <h1 class="ui header">Friends List</h1>
            <div class="ui vertical pointing menu">
                <a class="item">
                    <img class="ui avatar image" src="assets/avatar.png">
                    <span>John Doe</span>
                </a>
                <a class="active item">
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
        <div class="twelve wide column">
            <img class="circular image" src="assets/avatar1.png" style="float: left; width: 25%">
            <div style="float: left; padding-left: 20px;">
                <h2 style="text-decoration: underline; font-variant-caps: small-caps;">Bob Brown</h2>
                <p>
                    This is a brief biography about this person and their interest that they provide when creating their profile
                </p>
                <h3 style="margin-bottom: 5px">Interests</h3>
                <p>Romance, Science Fiction</p>
                <h3 style="margin-bottom: 5px">Favorite Books</h3>
                <p>Brave New World, 1984, Alice in Wonderland</p>
            </div>
            <div class="clearfix"></div>
            <h2 class="ui header" style="margin-top: 30px;">Schedule</h2>
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
                        <span class="calendar-date-number">
                            3
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        1984
                                    </div>
                                    <p>12:00 - 16:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
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
                        <span class="calendar-date-number">6</span>
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
                        <span class="calendar-date-number">
                            10
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        1984
                                    </div>
                                    <p>12:00 - 16:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
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
                        <span class="calendar-date-number">
                            14
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        Brave New World
                                    </div>
                                    <p>13:00 - 15:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
                    </td>
                    <td>
                        <span class="calendar-date-number">15</span>
                    </td>
                    <td>
                        <span class="calendar-date-number">16</span>
                    </td>
                    <td>
                        <span class="calendar-date-number">
                            17
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        1984
                                    </div>
                                    <p>12:00 - 16:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
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
                        <span class="calendar-date-number">20</span>
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
                        <span class="calendar-date-number">
                            24
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        1984
                                    </div>
                                    <p>12:00 - 16:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
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
                        <span class="calendar-date-number">
                            28
                            <a href="#">
                                <div class="ui message meeting-info-box popup-action">
                                    <div class="header">
                                        Brave New World
                                    </div>
                                    <p>13:00 - 15:00</p>
                                </div>
                                <div class="ui flowing popup top transition hidden">
                                    <p>Would you like to read this book and join this meeting too?</p>
                                    <button class="ui right labeled icon button">
                                        Request to Join
                                        <i class="icon plus"></i>
                                    </button>
                                </div>
                            </a>
                        </span>
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
        </div>
    </div>
</section>
</body>
</html>
