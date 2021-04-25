<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
    <script>
        let SELECTION = null;
        let TEXT = null;
        let MARK = null;

        const COMMENT_POPUP =
            `
            <div class="ui action input">
              <input type="text" placeholder="Bookmark comment">
              <button class="ui icon button">
                <i class="plus icon"></i>
              </button>
            </div>
            `;

        function highlightSelection()
        {
            // If there is a selection, remove it
            if (MARK)
            {
                MARK.remove();
                SELECTION.insertNode(TEXT);
            }

            // Get the text
            SELECTION = window.getSelection().getRangeAt(0);
            TEXT = SELECTION.extractContents();

            if (TEXT.textContent !== "")
            {
                // Create the selected text
                MARK = document.createElement('mark');
                MARK.id = "reading-page-paper-selection";
                MARK.appendChild(TEXT.cloneNode(true));
                SELECTION.insertNode(MARK);

                let mark_element = $('#reading-page-paper-selection');
                mark_element.popup({html: COMMENT_POPUP, on: "manual"});
                mark_element.popup('show');
            }

            if (window.getSelection().empty)
                window.getSelection().empty();
            else if (window.getSelection().removeAllRanges)
                window.getSelection().removeAllRanges();
        }

        $(function ()
        {
            $('.reading-page-paper').on('mouseup', highlightSelection)
        });
    </script>
</head>

<body>
    <header>
        <?php require 'common/header.php';
        createHeader("Schedule"); ?>
    </header>
    <section id="reading-page">
        <div class="ui grid">
            <div class="ten wide column">
                <div class="reading-page-viewer">
                    <div class="reading-page-paper">
                        <h1 style="text-align: center; font-family: cursive; font-size: 5em; margin-bottom: 50px;">Chapter 1</h1>
                        <div style="font-size: 15pt;">
                          <p>
                              It was the best of times, it was the worst of times, it was the age of wisdom, it was the
                              age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the
                              season of Light, it was the season of Darkness, it was the spring of hope, it was the winter
                              of despair, we had everything before us, we had nothing before us, we were all going direct
                              to Heaven, we were all going direct the other way—in short, the period was so far like the
                              present period, that some of its
                              <mark class="hintable" data-html="<strong>John Doe: </strong> who do we think the author is refering to?">noisiest authorities</mark>
                              insisted on its being received, for good or for evil, in the superlative degree of comparison
                              only.
                          </p>
                          <p>
                              There were a king with a large jaw and a queen with a plain face, on the throne of England;
                              there were a king with a large jaw and a queen with a fair face, on the throne of France. In
                              both countries it was clearer than crystal to the lords of the State preserves of loaves and
                              fishes, that things in general were settled for ever.
                          </p>
                          <p>
                              It was the
                              <mark class="hintable" data-html="<strong>Bob Bobertson: </strong> How does the year this happened change the way we view this story?">year of Our Lord one thousand seven hundred and seventy-five.</mark>
                              Spiritual
                              revelations were conceded to England at that favoured period, as at this. Mrs. Southcott had
                              recently attained her five-and-twentieth blessed birthday, of whom a prophetic private in
                              the Life Guards had heralded the sublime appearance by announcing that arrangements were
                              made for the swallowing up of London and Westminster. Even the Cock-lane ghost had been laid
                              only a round dozen of years, after rapping out its messages, as the spirits of this very
                              year last past (supernaturally deficient in originality) rapped out theirs. Mere messages
                              in the earthly order of events had lately come to the English Crown and People, from a
                              congress of British subjects in America: which, strange to relate, have proved more
                              important to the human race than any communications yet received through any of the chickens
                              of the Cock-lane brood.
                          </p>
                        </div>
                        <p style="text-align: center; margin-top: 30px;">1</p>
                    </div>
                </div>
                <div style="width: 100%; text-align: center;">
                    <div class="ui pagination menu" style="margin-top: 10px;">
                        <a class="icon item">
                            <i class="left arrow icon"></i>
                        </a>
                        <a class="active item">
                            1
                        </a>
                        <a class="item">
                            2
                        </a>
                        <a class="item">
                            3
                        </a>
                        <div class="disabled item">
                            ...
                        </div>
                        <a class="item">
                            314
                        </a>
                        <a class="icon item">
                            <i class="right arrow icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="six wide column">
                <div class="ui grid">
                    <div class="eight wide column">
                        <button class="ui fluid button blue" style="margin-top:25px;" onclick="window.location='reading.php'"> <i class="video icon"></i> Video Call</button>
                    </div>
                    <div class="eight wide column">
                        <button class="ui fluid button blue" style="margin-top:25px;" onclick="window.location='reading.php'">  <i class="phone icon"></i> Audio Call</button>
                    </div>
                </div>
                <div class="ui comments" style="margin-top: 25px;">
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar.png">
                        </a>
                        <div class="content">
                            <a class="author">Joe Henderson</a>
                            <div class="metadata">
                                <div class="date">1 day ago</div>
                            </div>
                            <div class="text">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar1.png">
                        </a>
                        <div class="content">
                            <a class="author">Christian Rocha</a>
                            <div class="metadata">
                                <div class="date">2 days ago</div>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar.png">
                        </a>
                        <div class="content">
                            <a class="author">Joe Henderson</a>
                            <div class="metadata">
                                <div class="date">1 day ago</div>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar1.png">
                        </a>
                        <div class="content">
                            <a class="author">Christian Rocha</a>
                            <div class="metadata">
                                <div class="date">2 days ago</div>
                            </div>
                            <div class="text">
                                <p>Well, I didn't really read the chapter...</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar.png">
                        </a>
                        <div class="content">
                            <a class="author">Joe Henderson</a>
                            <div class="metadata">
                                <div class="date">1 day ago</div>
                            </div>
                            <div class="text">
                                <p>...why not?</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar1.png">
                        </a>
                        <div class="content">
                            <a class="author">Christian Rocha</a>
                            <div class="metadata">
                                <div class="date">2 days ago</div>
                            </div>
                            <div class="text">
                                <p>I don't know how to read...</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="assets/avatar.png">
                        </a>
                        <div class="content">
                            <a class="author">Joe Henderson</a>
                            <div class="metadata">
                                <div class="date">1 day ago</div>
                            </div>
                            <div class="text">
                                <p>...</p>
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <form class="ui reply form">
                        <div class="field">
                            <textarea style="height: 100px; max-height: 100px;"></textarea>
                        </div>
                        <div class="ui primary submit labeled icon button">
                            <i class="icon edit"></i> Add Comment
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="ui header">Bookmarks</h1>
        <div class="ui vertical pointing menu timestamp">
            <a class="item">
                <p style="float: right;">Ch. 1, Pg. 1 <span class="people-list-info"></span>
                    <br>
                    <span class="float: right">
                    <i style="margin-top: 10px; margin-left:30px;"class="edit icon"></i>
                    <i class="trash icon"></i>
                    </span>
                </p>
                
                <div>
                    <img class="ui avatar image" src="assets/avatar.png">
                    <span style="text-decoration: underline;">John Doe</span>'s note: &emsp;
                    <span style="color: gray">who do we think the author is refering to?</span>
                </div>
                <p style="margin-left: 25px;"><i class="icon left quote"></i> <b>noisiest authorities</b></p>
            </a>
            <a class="item">
                <p style="float: right;">Ch. 1, Pg. 1 <span class="people-list-info"></span>
                <br>
                    <span class="float: right">
                    <i style="margin-top: 10px; margin-left:30px;"class="edit icon"></i>
                    <i class="trash icon"></i></p>
                <div>
                    <img class="ui avatar image" src="assets/avatar1.png">
                    <span style="text-decoration: underline;">Bob Bobertson</span>'s note: &emsp;
                    <span style="color: gray">How does the year this happened change the way we view this story?</span>
                </div>
                <p style="margin-left: 25px;"><i class="icon left quote"></i> <b>year of Our Lord one thousand seven hundred and seventy-five.</b></p>
            </a>
            <a class="item">
                <p style="float: right;">Ch. 3, Pg. 1 <span class="people-list-info"></span>
                <br>
                    <span class="float: right">
                    <i style="margin-top: 10px; margin-left:30px;"class="edit icon"></i>
                    <i class="trash icon"></i></p>
                <div>
                    <img class="ui avatar image" src="assets/avatar2.png">
                    <span style="text-decoration: underline;">John Doe</span>'s note: &emsp;
                    <span style="color: gray">This chapter doesn't make a lot of sense to me, how to we think it fits into the story?</span>
                </div>
                <p style="margin-left: 25px;"><i class="icon left quote"></i> <b>Chapter 3</b></p>
            </a>
            <a class="item">
                <p style="float: right;">Ch. 6, Pg. 289 <span class="people-list-info"></span>
                <br>
                    <span class="float: right">
                    <i style="margin-top: 10px; margin-left:40px;"class="edit icon"></i>
                    <i class="trash icon"></i></p>
                <div>
                    <img class="ui avatar image" src="assets/avatar3.png">
                    <span style="text-decoration: underline;">John Doe</span>'s note: &emsp;
                    <span style="color: gray">Wait, I think I'm reading the wrong book</span>
                </div>
                <p style="margin-left: 25px;"><i class="icon left quote"></i> <b>He loved Big Brother.</b></p>
            </a>
        </div>
    </section>
</body>

</html>
