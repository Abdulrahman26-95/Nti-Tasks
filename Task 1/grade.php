<?php
$MaxGrade = 50;

$Degree = $_POST['M1'] + $_POST['M2'] + $_POST['M3'] + $_POST['M4'] + $_POST['M5'];
$percentage = ($Degree / 250) * 100;
if ($percentage < 40) {
    $message = 'Grade F';
} elseif ($percentage >= 40 && $percentage < 60) {
    $message = 'Grade E';
} elseif ($percentage >= 60 && $percentage < 70) {
    $message = 'Grade D';
} elseif ($percentage >= 70 && $percentage < 80) {
    $message = 'Grade C';
} elseif ($percentage >= 80 && $percentage < 90) {
    $message = 'Grade B';
} elseif ($percentage >= 90 && $percentage <= 100) {
    $message = 'Grade A';
} else {
    $message = 'Please Enter Valid Mark';
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
        <div class="row">
            <div class="col-12 mt-5 text-center text-success font-weight-bold h3">
                Enter Your Marks Please
                <div class="col-4 offset-4 mt-5">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="number" name="M1" id="ID" class="form-control text-center" placeholder="Physics Mark" aris-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="number" name="M2" id="ID" class="form-control text-center" placeholder="Chemistry Mark" aris-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="number" name="M3" id="ID" class="form-control text-center" placeholder="Biology Mark" aris-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="number" name="M4" id="ID" class="form-control text-center" placeholder="Mathematics Mark" aris-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="number" name="M5" id="ID" class="form-control text-center" placeholder="Computer Mark" aris-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-success">Get The Grade</button>
                        </div>
                    </form>
                </div>
                <?php echo "<div style='color:blue ;font-size:22px'>$message</div>"; ?>

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