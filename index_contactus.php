<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Contact Us Form In Php</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h2 class="text-center py-2"> Contact Us </h2>
                    <hr>
                    <?php
                    $Msg = "";
                    if(isset($_GET['error']))
                    {
                        $Msg = " Please Fill in the Blanks ";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                    }

                    if(isset($_GET['success']))
                    {
                        $Msg = " Your Message Has Been Sent ";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';
                    }

                    ?>
                </div>
                <div class="card-body">
                    <form action="process.php" method="post">
                        <input type="text" name="UName" placeholder="Name" class="form-control mb-2">
                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                        <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                        <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                        <button class="btn btn-success" name="btn-send"> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>