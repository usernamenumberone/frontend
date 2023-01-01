<?php
include '../header3.php';
?>

<div class="row h-100 col-10" style="text-align: justify;">
    <div class="container-item">

        <div class="all-items">
            <h3>ALL Users</h3>
        </div>

        <div class="row">
            <?php while ($user = mysqli_fetch_assoc($user_result)) { ?>
                <div class="col-3 ">
                    <a href="#" class="card">
                        <img src="<?php echo $user['img_path']; ?>" class="card-img-top" alt="<?php echo $user['name']; ?>">
                        <div class="card-body">
                            <p class="card-text"><?php echo $user['name']; ?></p>
                            <p class="card-text"><?php echo $user['display_name']; ?></p>
                            <p class="card-text"><?php echo $user['email']; ?></p>
                            <p class="card-text"><?php echo $user['role']; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>