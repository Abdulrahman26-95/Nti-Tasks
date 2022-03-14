<?php
session_start();
$title = "Submit Form";
if ($_POST) {
    $errors = [];
    if (empty($_POST['Phone'])) {
        $errors['Phone-required'] = "<div class='text-danger font-weight-bold'>Phone Is Required</div>";
    }
    if (empty($errors)) {
        header('location:Result.php');
        die;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div style='padding-top:50px;'><img src="../Hospital//images//hospital.jpg" class="img-thumbnail w-100" alt=" ..."></div>
            </div>
            <div class="col">
                <div class="row mt-5 ">
                    <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                        Hospital
                        <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                            <form action="" method="POST">
                                <div style='font-size:25px;margin:auto' class="row text-center; ">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="form-label">Phone</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="Number" name="Phone" id="inputPassword6" placeholder="Enter Your Number" class="col-form-control text-center mb-3" aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <button class="btn btn-outline-primary ">Sibmit</button>
                                </div>
                            </form>
                            <?php if (isset($errors['Phone-required'])) {
                                echo $errors['Phone-required'];
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>