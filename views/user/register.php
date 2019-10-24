<div class="login">
    <h2 class="text-center">Admin Panel - Register</h2>
    <?php
    global $msg;
    registerUser();

    echo $msg;
    ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="First name">
        </div>
        <div class="form-group">
            <input type="text" name="last_name" class="form-control" placeholder="Last name">
        </div>
        <div class="form-group">
            <select name="role" class="form-control">
                <option>Choose User Role</option>
                <option value="standard_user">Standard User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="register" class="form-control" value="Register">
        </div>
    </form>
    <a href="?page=login">Log Into Existing Account.</a>
</div>