<div class="container mt-5">
    <h3 class="text-center mb-4">Edit User Information</h3>
    <form method="post" action="<?= base_url('RegisterController/update/' . $user['Id']) ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control" id="gender">
                <option value="male" <?= $user['gender'] === 'male' ? 'selected' : '' ?>>Male</option>
                <option value="female" <?= $user['gender'] === 'female' ? 'selected' : '' ?>>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" value="<?= htmlspecialchars($user['phone']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('RegisterController/index') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
