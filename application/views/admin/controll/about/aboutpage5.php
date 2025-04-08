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
        <h2 class="mb-3">Table of contant</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    
                    <th scope="col">Title</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php foreach ($users as $user): ?>
                    <tr>
                        <form method="post" action="" > 
                            
                    <td>
                        <?php if (isset($_POST['edit1']) && $_POST['edit1'] == $user->id): ?>
                                    <input type="text" name="title" class="form-control" value="<?php echo $user->title; ?>">
                                <?php else: ?>
                                    <?php echo $user->title; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                            <?php if (isset($_POST['edit1']) && $_POST['edit1'] == $user->id): ?>
                                <textarea name="heading" class="form-control"><?php echo htmlspecialchars($user->heading, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            <?php else: ?>
                                <?php echo nl2br(htmlspecialchars($user->heading, ENT_QUOTES, 'UTF-8')); ?>
                            <?php endif; ?>
                        </td>

                            <td>
                           <?php if (isset($_POST['edit1']) && $_POST['edit1'] == $user->id): ?>
                                    <button type="submit" name="save1" class="btn btn-primary" value="<?php echo $user->id; ?>">Save</button>
                                <?php else: ?>
                                    <button type="submit" name="edit1" class="edit-button" value="<?php echo $user->id; ?>">Edit</button>
                                <?php endif; ?>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
        </table>
</div>

                   

<div class="container mt-4">
        <h2 class="mb-3">Table of contant</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    
                    <th scope="col">Number</th>
                    <th scope="col">Heading2</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php foreach ($use as $user): ?>
                    <tr>
                        <form method="post" action="" >
                            

                        <td>
                                <?php if (isset($_POST['edit']) && $_POST['edit'] == $user->id): ?>
                                    <input type="text" name="number" class="form-control" value="<?php echo $user->number; ?>">
                                <?php else: ?>
                                    <?php echo $user->number; ?>
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
                                <textarea name="description" class="form-control"><?php echo htmlspecialchars($user->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            <?php else: ?>
                                <?php echo nl2br(htmlspecialchars($user->description, ENT_QUOTES, 'UTF-8')); ?>
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
                </table>
                </div>


    <div class="container mt-4">
        <h2 class="mb-3">Table of contant</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    
                    <th scope="col">Project</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Action</th>
                  
                </tr>
            </thead>
            <?php foreach ($use2 as $user): ?>
                    <tr>
                        <form method="post" action="" >
                            

                        <td>
                                <?php if (isset($_POST['edit2']) && $_POST['edit2'] == $user->id): ?>
                                    <input type="text" name="project" class="form-control" value="<?php echo $user->project; ?>">
                                <?php else: ?>
                                    <?php echo $user->project; ?>
                                <?php endif; ?>
                            </td>

                        
                            <td>
                                <?php if (isset($_POST['edit2']) && $_POST['edit2'] == $user->id): ?>
                                    <input type="int" name="percen" class="form-control" value="<?php echo $user->percen; ?>">
                                <?php else: ?>
                                    <?php echo $user->percen; ?>
                                <?php endif; ?>
                            </td>


                        

                            <td>
                           <?php if (isset($_POST['edit2']) && $_POST['edit2'] == $user->id): ?>
                                    <button type="submit" name="save2" class="btn btn-primary" value="<?php echo $user->id; ?>">Save</button>
                                <?php else: ?>
                                    <button type="submit" name="edit2" class="edit-button" value="<?php echo $user->id; ?>">Edit</button>
                                <?php endif; ?>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </table>
</div>
                   
                    
                    <!-- <td class="action-buttons">
                    <a href="<?php echo base_url('AboutController/edit/' . trim($user->id)); ?>" class="edit-button">Edit</a>

                    <a  href="<?php echo base_url('AboutController/delete/' . trim($user->id)); ?>"class="delete-button" >Delete</a>
                    </td>
                </tr> -->
            

    
    <!-- Bootstrap JS Bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

