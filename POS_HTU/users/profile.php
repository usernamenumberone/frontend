<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="<?php echo $user['img_path']; ?>" alt="<?php echo $user['name']; ?>" class="profile-img">
        </div>
        <div class="col-8">
            <h1><?php echo $user['name']; ?></h1>
            <p><?php echo $user['display_name']; ?></p>
            <p><?php echo $user['email']; ?></p>
            <p><?php echo $user['role']; ?></p>
        </div>
    </div>
</div>