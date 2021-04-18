<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'common/head.php'; ?>
    <title></title>
</head>
<body>
<header>
    <div id="main-logo">
        <h1>Project Genre</h1>
    </div>
    <div id="main-buttons">
        <button class="ui">Log Out</button>
    </div>
    <nav class="ui tabular four item menu clearfix">
        <a class="item">Home</a>
        <a class="item">Schedule</a>
        <a class="active item">Books</a>
        <a class="item">Friends</a>
    </nav>
    <script>
        $(function ()
        {
            $('.hintable').popup();
        })
    </script>
</header>
<section>
    <div class="ui action input search-adv">
        <input type="text" placeholder="Title, ISBN, ...">
        <div class="ui basic compact button">Search</div>
        <button class="ui basic icon button hintable" data-content="Advanced Search">
            <i class="cogs icon"></i>
        </button>
    </div>
</section>
<section>
    
</section>
</body>
</html>