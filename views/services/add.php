<?php
addService();
?>
<div class="container">
<div style="width: 500px">
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Service name</label>
        <input type="text" name="name" class="form-control" placeholder="Service name">
    </div>

    <div class="form-group">
        <label>Image</label>
        <div><input type="file" name="image"></div>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" class="btn">
    </div>

</form>
</div>
</div>