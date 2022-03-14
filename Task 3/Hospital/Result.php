<?php
if ($_POST) {
    $errors = [];
    if (empty($_POST['Q1'])) {
        $errors['Answer-required'] = "<div style='margin-left:auto;margin-right:auto';class=' w-50 text-danger alert alert-danger font-weight-bold text-center'>Please Complite the questionnaire</div>";
    }
    if (empty($_POST['Q2'])) {
        $errors['Answer-required'] = "<div style='margin-left:auto;margin-right:auto'; class=' w-50 text-danger alert alert-danger   font-weight-bold text-center'>Please Complite the questionnaire</div>";
    }
    if (empty($_POST['Q3'])) {
        $errors['Answer-required'] = "<div style='margin-left:auto;margin-right:auto'; class=' w-50text-danger alert alert-danger  font-weight-bold text-center'>Please Complite the questionnaire</div>";
    }
    if (empty($_POST['Q4'])) {
        $errors['Answer-required'] = "<div style='margin-left:auto;margin-right:auto'; class=' w-50 text-danger alert alert-danger  font-weight-bold text-center'>Please Complite the questionnaire</div>";
    }
    if (empty($_POST['Q5'])) {
        $errors['Answer-required'] = "<div style='margin-left:auto;margin-right:auto'; class=' w-50text-danger alert alert-danger  font-weight-bold text-center'>Please Complite the questionnaire</div>";
    }
    if (empty($errors)) {
        header('location:Review.php');
        die;
    }
}
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <table class="table table-hover mt-5">
            <tr class="text-center">
                <td class="text-left">Questions </td>
                <td>Excellent</td>
                <td>Very Good</td>
                <td>Good</td>
                <td>Bad</td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Are You Satisfied with the level of cleanliness ?</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q1" value="10" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input text-center" type="radio" name="Q1" value="5" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q1" value="3" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q1" value="0" id="flexRadioDefault1">
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Are you satisfied with the service prices ?</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="10" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="5" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="3" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q2" value="0" id="flexRadioDefault1">
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Are you satisfied with the nursing service ?</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="10" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="5" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="3" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q3" value="0" id="flexRadioDefault1">
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Are you satisfied of the level of doctors ?</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="10" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="5" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="3" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q4" value="0" id="flexRadioDefault1">
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td class="text-left">Are you satisfied of the calmness in the hospital ?</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="10" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="5" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="3" id="flexRadioDefault1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Q5" value="0" id="flexRadioDefault1">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-center">
                    <div style="margin:auto ;width:100px" class="form-group">
                        <button style='width:150px' ; class="btn btn-outline-primary text-center">Check</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <?php if (isset($errors['Answer-required'])) {
        echo  $errors['Answer-required'];
    } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>