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
        "Books" => "/book.php",
        "Friends" => "/friends.php",
    );

    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $size = $formatter->format(count($links));

    echo
    '
    <div id="main-logo">
        <h1>Project Genre</h1>
    </div>
    <div id="main-buttons">
        <button class="ui">Log Out</button>
    </div>
    ';

    echo "<nav class='ui tabular $size item menu clearfix'>";

    foreach ($links as $name => $link)
        createNavLink($name, $link, $name === $active);

    echo "</nav>";
}

?>