<form action="/ussers/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $user['name']; ?>" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="display_name">Display Name</label>
        <input type="text" class="form-control" name="display_name" id="display_name" value="<?php echo $user['display_name']; ?>" placeholder="Enter display name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $user['email']; ?>" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control">
            <option value="admin" <?php if ($user['role'] == 'admin') {
                                        echo 'selected';
                                    } ?>>Admin</option>
            <option value="user" <?php if ($user['role'] == 'user') {
                                        echo 'selected';
                                    } ?>>User</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>