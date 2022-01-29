<?php
require_once '../config/db.php';

// get parameters from URL
if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $id = $_GET['id'];
    if ($mode === 'delete') {
        // define sql
        $sql = "UPDATE job_types SET inactive=1 WHERE id=$id";
        // run sql
        $db->query($sql);
    }
}
// insert job type
if(isset($_POST['btn_save'])){
    $job_type = $_POST['job_type'];
    $sql = "INSERT INTO job_types (type_name) VALUES (?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s', $job_type);
    $stmt->execute();
}

$sql = "SELECT * FROM job_types where inactive=0";
$result = $db->query($sql);

include_once '../header.php';
?>
<section class="container">
<h2>Manage Job type</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>On Date</th>
        <th>Option</th>
    </tr>
    <?php
while ($row = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>{$row->id}</td>";
    echo "<td>{$row->type_name}</td>";
    echo "<td>".date('l, M d/m/y H:i A',strtotime($row->create_at))."</td>";
    echo "<td>";
    echo "<a href='job-type.php?id={$row->id}&mode=edit'>Edit</a> | ";
    echo "<a href='job-type.php?id={$row->id}&mode=delete'>Delete</a>";
    echo "</td>";
    echo "</tr>\n";
}
?>
</table>
</section>



<!-- Modal -->
<form action="" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Job type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Type name</label>
        <input name="job_type" type="text" class="form-control" minlength="2" 
        maxlength="30"
         required id="exampleFormControlInput1" placeholder="Type name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button name="btn_save" value="save" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</form>


<?php
include_once '../footer.php';
?>