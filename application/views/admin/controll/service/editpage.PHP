<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for form styling */
    body {
      background-color: #f8f9fa; /* Light gray background */
    }
    .form-container {
      background-color: #ffffff; /* White background for form */
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      padding: 30px;
    }
    .form-title {
      color: #0d6efd; /* Bootstrap primary color */
      font-weight: bold;
    }
    .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }
    .btn-primary:hover {
      background-color: #084298;
      border-color: #084298;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="form-container mx-auto col-lg-6">
      <!-- Form Title -->
      <h2 class="form-title text-center mb-4">Edit form</h2>

      <!-- Form -->
      <form action ="<?php echo base_url('ServiceController/update/' . trim($user->id)); ?>" method="post" >
        <!-- MHeading Section -->
        <div class="mb-3">
          <label for="heading" class="form-label">Mani Heading</label>
          <input type="text" class="form-control" id="mheading" name="mheading" placeholder="Enter heading" value ="<?php echo $user->mheading;?>"
          >
        </div>

        <!-- Heading Section -->
        <div class="mb-3">
          <label for="title" class="form-label">Heading</label>
          <input type="text" class="form-control" id="title" name="heading" placeholder="Enter title" value ="<?php echo $user->heading;?>">
        </div>

        <!-- titel-->
        <div class="mb-3">
          <label for="con1" class="form-label"> Title</label>
          <input type="text" class="form-control" id="Title" name="Title" placeholder="Enter content 1" value ="<?php echo $user->title;?>">
        </div>

        <!-- Discription  -->
        <div class="mb-3">
          <label for="con2" class="form-label">Discription</label>
          <input type="text" class="form-control" id="discription" name="discription" placeholder="Enter content 2" value ="<?php echo $user->dis;?>">
        </div>

     
        <!-- Update Button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary w-100">Update</button>
        </div>
      </form>
    </div>
  </div>

  

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
