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
<section class="ui form">
    <h1 class="ui header" style="text-align: center;">Advanced Search</h1>
    <div class="three fields">
        <div class="field">
            <label>Title</label>
            <input type="text" placeholder="Book Title">
        </div>
        <div class="field">
            <label>Author</label>
            <input type="text" placeholder="Book Author">
        </div>
        <div class="field">
            <label>ISBN</label>
            <input type="text" placeholder="10 or 13 digit ISBN">
        </div>
    </div>
    <div class="field">
        <label>Genre</label>
        <select class="ui search dropdown">
            <option value="">No genre selected</option>
            <option value="horror">Horror</option>
            <option value="horror">Science Fiction</option>
            <option value="horror">Romance</option>
            <option value="horror">Biography</option>
            <option value="horror">Reference</option>
        </select>
    </div>
    <div class="field">
        <label>Publication Date</label>
        <div class="two fields">
            <div class="field">
                <input type="text" placeholder="Start year">
            </div>
            <div class="field">
                <input type="text" placeholder="End year">
            </div>
        </div>
    </div>
    <div class="field">
        <label>Keywords</label>
        <div class="ui action input">
            <input type="text" placeholder="keyword">
            <select class="ui compact selection dropdown">
                <option value="and">AND</option>
                <option value="or">OR</option>
                <option value="not">NOT</option>
            </select>
            <div class="ui icon button">
                <i class="plus icon"></i>
            </div>
        </div>
    </div>
    <div class="ui submit right floated button">Search</div>
</section>
</body>
</html>
