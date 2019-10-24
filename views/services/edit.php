<?php

if(isset($_GET['id'])) {

    $edit_id = $_GET['id'];

    editService($edit_id);

    global $connection;
    $query = "SELECT * FROM services WHERE id = $edit_id";
    $selectServiceById = mysqli_query($connection, $query);
    confirmQuery($selectServiceById);

    while($row = mysqli_fetch_array($selectServiceById)) {

    $name          = $row['name'];
    $image         = $row['image'];
    $description   = $row['description'];



?>
<div class="container">
    <div style="width: 500px">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Service name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label>Image</label>
                <input name="image" type="hidden" value="<?php echo $image; ?>">
                <div><img src="uploads/<?php echo $image; ?>" width="150"><br><br><input type="file" name="new_image"></div>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"><?php echo $description; ?>
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn">
            </div>

        </form>
    </div>
</div>
<?php
}

} else {
    redirectTo("services.php");
} ?>
