<?php

require_once '../config/db.php';
$mode = $_GET['mode'] ?? '';

// get parameters from URL
if (isset($_GET['mode'])) {
    
    $id = $_GET['id'];
    if ($mode === 'delete') {
        // define sql
        $sql = "UPDATE job_types SET inactive=1 WHERE id=$id";
        // run sql
        $db->query($sql);
    }

    // get data to form
    if($mode==='edit') {
        $sql = "SELECT * FROM job_types WHERE id=$id";
        $result = $db->query($sql);
        $row = $result->fetch_object();
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
// update job type
if(isset($_POST['btn_update'])){
    $id = $_POST['id'];
    $job_type = $_POST['job_type'];
    $sql = "UPDATE job_types SET type_name=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('si', $job_type, $id);
    $stmt->execute();
    header('Location: job-type.php');
}
// select data
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

<!-- form edit -->
<?php if($mode==='edit'): ?>
<div class="card">
<form action="" method="post">
    <div class="card-header">
        Edit Job type
    </div>
    <div class="card-body">
       <input type="hidden" name="id" value="<?php echo $row->id ?>" />
            <div class="form-group">
                <label for="job_type">Job type</label>
                <input type="text" class="form-control" id="job_type" name="job_type" value="<?php echo $row->type_name; ?>">
            </div>
    </div>
    <div class="modal-footer">
        <a href="job-type.php" class="btn btn-secondary">Cancel</a>
        <button name="btn_update" value="save" type="submit" class="btn btn-primary">Save</button>
      </div>
     </form> 
</div>
<?php endif; ?>


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