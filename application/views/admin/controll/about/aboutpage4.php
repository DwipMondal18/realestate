<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         .edit-button {
            background-color: #4CAF50;
            /* border:1px solid black; */
            text-decoration: none !important;
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer
            
        }

        .delete-button {
            background-color: #f44336;
            /* border:1px solid black; */
            text-decoration: none !important;
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <h2 class="mb-3">Forth Section</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Heaing1</th>
                    <th scope="col">description1</th>
                    <th scope="col">Heaing2</th>
                    <th scope="col">description2</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($use as $user): ?>
                    <tr>
                        <form method="post" action="">
                            <td>
                                <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                    <input type="text" name="heading1" class="form-control" value="<?php echo $user->heading1; ?>">
                                <?php else: ?>
                                    <?php echo $user->heading1; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                            <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                <textarea name="description1" class="form-control"><?php echo htmlspecialchars($user->description1, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            <?php else: ?>
                                <?php echo nl2br(htmlspecialchars($user->description1, ENT_QUOTES, 'UTF-8')); ?>
                            <?php endif; ?>
                        </td>
                            <td>
                                <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                    <input type="text" name="heading2" class="form-control" value="<?php echo $user->heading2; ?>">
                                <?php else: ?>
                                    <?php echo $user->heading2; ?>
                                <?php endif; ?>
                            </td>
                            
                            <td>
                            <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                <textarea name="description2" class="form-control"><?php echo htmlspecialchars($user->description2, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            <?php else: ?>
                                <?php echo nl2br(htmlspecialchars($user->description2, ENT_QUOTES, 'UTF-8')); ?>
                            <?php endif; ?>
                        </td>
                        <td>
                                <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                    <button type="submit" name="save" class="btn btn-primary" value="<?php echo $user->id; ?>">Save</button>
                                <?php else: ?>
                                    <button type="submit" name="edit" class="edit-button" value="<?php echo $user->id; ?>">Edit</button>
                                <?php endif; ?>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS Bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>