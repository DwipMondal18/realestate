<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
    body {
        padding-top: 100px; /* Adjust based on the header height */
    }

    .header-style-1 {
        z-index: 1050; /* Ensure the header is above other elements */
}
</style>
    
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Contact Form</h3>
                        <form action="<?=base_url();?>RegisterController/submit" method="POST">
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            
                            <!-- Gender Field -->
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Phone Number Field -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <h3 class="text-center mb-4">User Information Table</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->
    <div class="container mt-5">
    <h3 class="text-center mb-4">User Information Table</h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['Id']) ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars(ucfirst($user['gender'])) ?></td>
                            <td><?= htmlspecialchars($user['phone']) ?></td>
                            <td>
                                <!-- Corrected Edit Button -->
                                <a href="<?= base_url('RegisterController/edit/' . urlencode($user['Id'])) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <!-- Corrected Delete Button -->
                                <a href="<?= base_url('RegisterController/delete/' . urlencode($user['Id'])) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>





    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
