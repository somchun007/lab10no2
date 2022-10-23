<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root", "");
if ($conn) {
    mysqli_select_db($conn,"blueshop");
} else {
    echo mysqli_errno();
}
$sql = "SELECT * FROM member WHERE name LIKE '%$keyword%'";
$objQuery = mysqli_query($conn,$sql);
?>
<table border="1">
    <?php while ($row = mysqli_fetch_array($objQuery)) : ?>
        <tr > 
            <td><?= $row["username"]?></td>
            <td><?= $row["password"]?></td>
            <td><?= $row["name"]?></td>
            <td><?= $row["address"]?></td>
            <td><?= $row["mobile"]?></td>
            <td><?= $row["email"]?></td>
        </tr>
    <?php endwhile; ?>
</table>