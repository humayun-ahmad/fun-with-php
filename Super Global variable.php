<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supper Global Variable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>$_POST Variable</h4>
                <hr>
                <h4>$_POST Variable</h4>
                <?php

                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $email = $_REQUEST['email'];
                        if(empty($email)){
                            echo "please enter your email address!";
                        }
                        else{
                            echo $email;
                        }
                    }

                ?>
                <form action="" method="POST">
                    <input type="text" name="email" placeholder="email address"><br><br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>

</body>
</html>