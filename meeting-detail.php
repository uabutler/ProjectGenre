<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>

<body>
    <header>
        <?php require 'common/header.php';
        createHeader("Schedule"); ?>
    </header>
    <section>
        <div class="ui grid">
            <div class="four wide column">
                <img onclick="window.location='book-ex.php'" class="clickable" src="assets/book-covers/alice.png" style="margin-top: 20px; width: 100%">
            </div>
            <div class="twelve wide column">
                <div class="ui vertical labeled right floated icon buttons">
                    <button class="ui button">
                        <i class="cog icon"></i>Setting
                    </button>
                </div>
                <h1 onclick="window.location='book-ex.php'"style="margin-top: 0; font-size: 72px; margin-bottom: 0;" class="clickable">Alice in Wonderland</h1>
                <!-- <p>
                    <strong>Author: </strong>George Orwell &emsp;
                    <strong>Genre: </strong> Science Fiction, Political fiction, Social science fiction, Dystopian Fiction &emsp;
                    <strong>Rating: </strong> <span class="ui rating disabled" data-rating="4" data-max-rating="5"></span>
                </p>-->
                <hr style="width: 50%; color: lightgray; text-align: left; margin-left: 0;">
                <div style="font-size: 15pt; margin-top: 20px;">
                    <p>
                        <strong>Host:</strong> John Doe
                    </p>
                    <p>
                    <!-- <div class="ui one column grid">
                        <div class="column clickable hintable" data-content="Click to join">
                            <strong><i class="map marker alternate icon" ></i></strong> Virtual
                        </div>
                        <div class="column clickable hintable" data-content="Click to open">
                            <strong><i class="check circle icon" ></i></strong>In-book Discussion
                        </div>
                   
                    </div> -->
                        
                      <div class="column"><strong><i class="calendar alternate outline icon"></i></strong> 3:00pm - 5:00pm &nbsp; 04/06/2021</div>
                    </p> 
                  

                    <p>
                        <strong><i class="users icon"></i></strong> 4/4: Charlie Chapel, Dave David, Inigo Bains, Cali Dodson
                    </p>
                    <p>
                        <strong>Description:</strong> Hello everyone, well come to this book club! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <button class="ui fluid button blue" style="margin-top:25px;" onclick="window.location='reading.php'">Join Meeting</button>
            </div>
        </div>
    </section>
   
</body>

</html>
