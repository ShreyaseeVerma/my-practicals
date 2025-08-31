<?php
// Array banate hain
$numbers = array(10, 20, 30, 40, 50);
?>

<form method="post">
    Enter a number to search: 
    <input type="text" name="search_value">
    <input type="submit" value="Search">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search_value'];

    if (in_array($search, $numbers)) {
        echo "✅ Value $search exists in the array.";
    } else {
        echo "❌ Value $search does NOT exist in the array.";
    }
}
?>