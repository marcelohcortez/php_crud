<?php
require_once('../Model/connection.php');

$query = "select * from records";  //generate the query
$result = $con->query($query); //register the query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body class="bg-dark">
<main>
    <header>
        <h3 class="bg-success text-white text-center py-3"> View Users</h3>
    </header>
    <article class="container">
        <section class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <thead class="text-bg-info">
                            <tr>
                                <td class="h3 text-center"> User ID</td>
                                <td class="h3 text-center"> User Name</td>
                                <td class="h3 text-center"> User Email</td>
                                <td class="h3 text-center"> User Age</td>
                                <td class=""> </td>
                                <td class=""> </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $user): //print all users
                            ?>
                            <tr>
                                <td><?php echo $user['User_ID']?></td>
                                <td><?php echo $user['User_Name']?></td>
                                <td><?php echo $user['User_Email']?></td>
                                <td><?php echo $user['User_Age']?></td>
                                <td><a href="edit.php?ID=<?php echo $user['User_ID']?>">Edit</a></td>
                                <td><a href="delete.php?Del_ID=<?php echo $user['User_ID']?>">Delete</a></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
</main>
</body>
</html>