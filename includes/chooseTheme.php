<?php
$query = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($connect, $query);
$ans = mysqli_fetch_assoc($result);

if ($ans['theme'] == 1) {
    ?>
    <link href="assets/css/template.min.css" rel="stylesheet">
    <link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">
    <?php
} else {
    ?>
    <link href="assets/css/template.dark.min.css" rel="stylesheet">
    <?php
}
?>