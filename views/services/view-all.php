<?php
    if(isset($_GET['delete'])) {
        $deleteId = $_GET['delete'];
        deleteService($deleteId);
    }
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Operations</th>
    </tr>
    </thead>
    <tbody>
    <?php showServices(); ?>
    </tbody>
</table>
