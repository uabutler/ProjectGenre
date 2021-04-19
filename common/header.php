<?php

error_reporting(E_ALL);
ini_set("error_reporting", "1");

function createNavLink($name, $location, $active)
{
    $classes = "item";
    if ($active)
        $classes .= " active";

    echo "<a class='$classes' href='$location'>$name</a>";
}

function createHeader($active)
{
    $links = array
    (
        "Home" => "/index.php",
        "Schedule" => "/schedule.php",
        "Books" => "/books.php",
        "Friends" => "/friends.php",
    );

    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $size = $formatter->format(count($links));

    echo
    '
    <div id="main-logo">
        <img src="/assets/logo.png">
    </div>
    <div id="main-buttons">
        Hello John Doe!
        <button class="ui button">Log Out</button>
    </div>
    ';

    echo "<nav class='ui tabular $size item menu clearfix'>";

    foreach ($links as $name => $link)
        createNavLink($name, $link, $name === $active);

    echo "</nav>";
}

?>