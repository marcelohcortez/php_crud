<?php
if(!isset($_GET['ID'])){
    echo 'Don\'t try direct access';
    return;
}
require_once('../Model/connection.php');

$userID = $_GET['ID'];
$query = "select * from records where User_ID='".$userID."'";  //generate the query
$result = $con->query($query); //register the query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body class="bg-dark">
<main>
    <header>
        <h3 class="bg-success text-white text-center py-3"> Edit User</h3>
    </header>
    <article class="container">
        <section class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <?php
                            foreach($result as $user):
                            ?>
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $user['User_Name']?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $user['User_Email']?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age" value="<?php echo $user['User_Age']?>">
                                <input type="hidden" name="id" value="<?php echo $userID?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            <?php
                            endforeach;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
</body>
</html>