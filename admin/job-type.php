<?php
require_once '../config/db.php';
$sql = "SELECT * FROM job_types";
$result = $db->query($sql);

include_once '../header.php';
?>
<h2>Manage Job type</h2>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>On Date</th>
        <th>Option</th>
    </tr>
    <?php
    while($row = $result->fetch_object()){
        echo "<tr>";
        echo "<td>{$row->id}</td>";
        echo "<td>{$row->type_name}</td>";
        echo "<td>{$row->create_at}</td>";
        echo "<td>";
        echo "<a href='job-type.php?id={$row->id}'>Edit</a> | ";
        echo "<a href='job-type.php?id={$row->id}'>Delete</a>";
        echo "</td>";
        echo "</tr>\n";
    }
    ?>
</table>

<?php
include_once '../footer.php';
?>