<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <style>

    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light" style ="height:50px;">
        <div class="card shadow-sm p-4" style="width: 479px;
        height: 394px;
        ">
            <h2 class="text-center mb-4">Login</h2>
            <form action="<?php echo base_url().'logcontroller/index';?> " method='post'>
                <!-- Nickname -->
                <div class="mb-3">
                    <label for="nickname" class="form-label">Username</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="username" 
                        name="username" 
                        placeholder="username" 
                        required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="password" 
                        name="password" 
                        placeholder="password" 
                        required>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
