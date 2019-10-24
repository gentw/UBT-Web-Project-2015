<div class="login">
    <h2 class="text-center">Admin Panel</h2>
    <?php
        logInUser();
    ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="form-control" value="Login">
        </div>
    </form>

    <a href="?page=register">If you don't have any account click here.</a>
</div>