<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <title>Project Genre</title>
</head>
<body>
<header>
    <?php require 'common/header.php'; createHeader("Books"); ?>
</header>
<section>
    <div class="ui grid">
        <div class="four wide column">
            <img src="/assets/book-covers/alice.png" style="margin-top: 20px; width: 100%;">
        </div>
        <div class="twelve wide column">
            <div class="ui vertical labeled right floated icon buttons" style="margin-top: 20px;">
                <button class="ui button">
                    <i class="plus icon"></i>Create Meeting
                </button>
                <button class="ui button">
                    <i class="plus icon"></i>Add to Reading List
                </button>
            </div>
            <h1 style="margin-top: 0; font-size: 72px; margin-bottom: 0;">Alice in Wonderland</h1>
            <p>
                <strong>Author: </strong>Lewis Carroll &emsp;
                <strong>Genre: </strong> Children, Fantasy, Adventure &emsp;
                <strong>Rating: </strong> <span class="ui rating disabled" data-rating="3" data-max-rating="5"></span>
            </p>
            <hr style="width: 50%; color: lightgray; text-align: left; margin-left: 0;">
            <div style="font-size: 15pt; margin-top: 20px;">
                <p>
                    <strong>Description:</strong> This selection of Carroll's works includes Alice's Adventures in Wonderland and its sequel, Through the Looking-Glass, both containing the famous illustrations by Sir John Tenniel. No greater books for children have ever been written. The simple language, dreamlike atmosphere, and fantastical characters are as appealing to young readers today as ever they were.
                </p>
                <p>
                    Meanwhile, however, these apparently simple stories have become recognised as adult masterpieces, and extraordinary experiments, years ahead of their time, in Modernism and Surrealism. Through wordplay, parody and logical and philosophical puzzles, Carroll engenders a variety of sub-texts, teasing, ominous or melancholy. For all the surface playfulness there is meaning everywhere. The author reveals himself in glimpses.
                </p>
                <p>
                    Source: Publisher
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="ui grid">
        <div class="eight wide column">
            <h1 class="ui header">Reviews</h1>
            <div class="ui comments">
                <form class="ui reply form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                    <div class="left floated">
                        How would you rate this book? <div class="ui rating star ratable" data-max-rating="5"></div>
                        <div class="ui primary submit labeled right floated icon button">
                            <i class="icon edit"></i> Post Review
                        </div>
                    </div>
                </form>
                <h2 class="clearfix">User Reviews</h2>
                <div class="comment">
                    <a class="avatar">
                        <img src="assets/avatar.png">
                    </a>
                    <div class="content">
                        <a class="author">Joe Henderson</a>
                        <div class="metadata">
                            <div class="ui rating disabled" data-rating="3" data-max-rating="5"></div>
                            <div class="date">1 day ago</div>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
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
                            <div class="ui rating disabled" data-rating="4" data-max-rating="5"></div>
                            <div class="date">2 days ago</div>
                        </div>
                        <div class="text">
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="assets/avatar2.png">
                    </a>
                    <div class="content">
                        <a class="author">Bob Bobertson</a>
                        <div class="metadata">
                            <div class="ui rating disabled" data-rating="2" data-max-rating="5"></div>
                            <div class="date">2 days ago</div>
                        </div>
                        <div class="text">
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="eight wide column">
            <h1 class="ui header">Book Information</h1>
            <table class="ui celled table">
                <tbody>
                <tr>
                    <th>Reading Age:</th>
                    <td>Baby &ndash; 12 years</td>
                </tr>
                <tr>
                    <th>Language:</th>
                    <td>English</td>
                </tr>
                <tr>
                    <th>Publication Date:</th>
                    <td>1865</td>
                </tr>
                <tr>
                    <th>Page Count:</th>
                    <td>108</td>
                </tr>
                <tr>
                    <th>Publisher:</th>
                    <td>Macmillan</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>
