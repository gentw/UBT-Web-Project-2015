<?php

function showServices () {
    global $connection;

    $q = "SELECT * FROM services";
    $selectServices = mysqli_query($connection, $q);
    confirmQuery($selectServices);

    while($row = mysqli_fetch_array($selectServices)) {
        $number = 1;
        $serviceID      = $row['id'];
        $serviceName    = $row['name'];


        echo "<tr>";
        echo "<th scope='row'>$number</th>";
        echo "<td>$serviceName</td>";
        echo "<td><a href='?action=edit&id=$serviceID'>Edit</a> | <a href='?delete=$serviceID'>Delete</a></td>";
        echo "</tr>";
        $number++;
    }
}

function addService() {
    global $connection;

    if(isset($_POST['submit'])) {
        $name           = $_POST['name'];
        $description    = $_POST['description'];
        $image		    = $_FILES['image']['name'];
        $image_tmp      = $_FILES['image']['tmp_name'];

        if(!empty($name) && !empty($description) && !empty($image)) {
            $name           = mysqli_real_escape_string($connection, $name);
            $description    = mysqli_real_escape_string($connection, $description);
            $image          = mysqli_real_escape_string($connection, $image);

            //$inputName = $_FILES['image'];
            $uploadDestination = "uploads/";
            move_uploaded_file($image_tmp, $uploadDestination . $image);
            $q = "INSERT INTO services (name, image, description) ";
            $q .= "VALUES('{$name}', '{$image}', '{$description}')";
            $addService = mysqli_query($connection, $q);
            confirmQuery($addService);

            redirectTo("services.php");
        }
    }
}

function queryEditById($id) {

}

function editService($id) {
    global $connection;



    if(isset($_POST['submit'])) {

        $name           = $_POST['name'];
        $oldImage       = $_POST['image'];
        $newImage           = $_FILES['new_image']['name'];

        $description    = $_POST['description'];
        //$checkNewImage = false;

        if($newImage != "") {

            $newImage_temp      = $_FILES['new_image']['tmp_name'];
            $newImage = mysqli_real_escape_string($connection, $newImage);

            $destination = "uploads/";
            move_uploaded_file($newImage_temp, $destination . $newImage);

            $q = "UPDATE services SET ";
            $q .= "name = '{$name}', ";
            $q .= "image = '{$newImage}', ";
            $q .= "description = '{$description}' WHERE id = {$id}";
        } else {
            $q = "UPDATE services SET ";
            $q .= "name = '{$name}', ";
            $q .= "image = '{$oldImage}', ";
            $q .= "description = '{$description}' WHERE id = {$id}";
        }

        $editService = mysqli_query($connection, $q);
        confirmQuery($editService);
        redirectTo("services.php");
    }
}

function deleteService($id) {
    global $connection;

    if(isset($id)) {
        $q = "DELETE FROM services WHERE id = {$id}";
        $deleteService = mysqli_query($connection, $q);
        confirmQuery($deleteService);

        redirectTo("services.php");
    }

}
