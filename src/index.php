<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Docker Pilot</title>
</head>
<?php

$con = new mysqli('mysql_db', 'root', 'root', 'docker_pilot');

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">


                <h1>Pilot Test</h1>
                <h4> Docker Tutorials</h4>
                <br>
                <img src="https://d33wubrfki0l68.cloudfront.net/e7a6759eb6232b4280b83b18aa255289d65e4b6e/7698a/images/logo.webp" width="700px;" height="400px;" alt="" srcset="">
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, maiores quo. Adipisci fuga dolorem aspernatur velit accusantium dolor quisquam blanditiis voluptates atque. Natus veritatis quod molestiae! Aliquam est accusamus debitis!
                </p>

                <footer>
                    <?php echo "Developed by Watson L Ingosi";
                    ?>
                </footer>
            </div>

            <div class="col-md-6">
                <h1>Add Names</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="submit" value="submit">
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];

                    $insert_name = "insert into names(firstname, lastname) values('$firstname', '$lastname')";

                    $run_name = mysqli_query($con, $insert_name);

                    if ($run_name) {
                        echo "success!";
                    }
                }

                ?>
            </div>

            <br>

            <table class="table table-bordered table-responsive col-md-6">
                <thead>
                    <th>#</th>
                    <th>F_name</th>
                    <th>L_name</th>
                    <th>Time</th>
                </thead>
                <?php
                $i = 0;
                $get_names = "select * from names";
                $run_names = mysqli_query($con, $get_names);
                while ($view_names = mysqli_fetch_array($run_names)) {

                    $firstname = $view_names['firstname'];
                    $lastname = $view_names['lastname'];
                    $ontime = $view_names['ontime'];
                    $i++;

                ?>
                    <tbody>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $firstname ?></td>
                        <td> <?php echo $lastname ?></td>
                        <td> <?php echo $ontime ?></td>

                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>