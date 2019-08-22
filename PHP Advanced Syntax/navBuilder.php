
<form action="" method="get">
    <span>Categories:</span><input type="text" name="categories"><br>
    <span>Tags:</span><input type="text" name="tags"><br>
    <span>Months:</span><input type="text" name="months"><br>
    <input type="submit" name="sub">
</form>

<?php
if (isset($_GET['sub'])) {
    $categories = (explode(", ", $_GET['categories']));
    $tags = explode(", ", $_GET['tags']);
    $months = explode(", ", $_GET['months']);

    function UnorderedListFromArrayOfWords($array)
    {
        print '<ul>';
        foreach ($array as $arrayElement) {
            print "<li>$arrayElement</li>";
        }
        print '<ul/>';
    }

    print "<div>";
    print "<h2>Categories</h2>";
    UnorderedListFromArrayOfWords($categories);
    print "</div>";

    print "<div>";
    print "<h2>Tags</h2>";
    UnorderedListFromArrayOfWords($tags);
    print "</div>";

    print "<div>";
    print "<h2>Months</h2>";
    UnorderedListFromArrayOfWords($months);
    print "</div>";
}