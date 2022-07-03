<?php  require_once("../../path.php");
require_once (ROOT_PATH . "/app/controllers/topics.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">




    <title>Edit Topic</title>
</head>
<body>
        <!--end of side contents-->
        <?php require_once(ROOT_PATH . "/app/includes/adminheader.php");?>

 
        <?php require_once(ROOT_PATH . "/app/includes/adminsidebar.php");?>


        <!--start of side contents-->
        <div class="main-contents">
            <div class="bbn-group">
                <a href="create.php" class="btn-main">Add Topics</a>
                <a href="index.php" class="btn-main">Manage Topics</a>
            </div>


            <div class="contents2">
                <h2 class="table-title">Edit Topic</h2>
                <?php include (ROOT_PATH . "/app/helpers/errors.php")?>
                <form action="edit.php" method="post">
                    <div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label class="title1">Name</label> <br>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="name-input">
                </div>
                     
                    <div>
                    <label class="title1">Description</label> <br>
                    <textarea name="description" id="body"> <?php echo $description; ?></textarea>
                </div>
                    
                   <div>
                    <input type="submit" name="update" value="Update Topic" class="btn-submit">
                   </div>
            
                </form>
            </div>
            <!--end of main contents-->
        </div>

    </div>














    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src = "../../assets/js/bootstrap.js"></script>  
    <script src = "../../assets/js/script.js"></script>
</body>
</html>