<?php
$summ = " ";
if ($_POST) {

    switch ($_POST['op']) {
        case 'add':
            $summ = $_POST['first'] + $_POST['second'];
            break;
        case 'diff':
            $summ = $_POST['first'] - $_POST['second'];
            break;
        case 'mul':
            $summ = $_POST['first'] * $_POST['second'];
            break;
        case 'div':
            $summ = $_POST['first'] / $_POST['second'];
            break;
        case 'mod':
            $summ = $_POST['first'] % $_POST['second'];
            break;
        case 'pow':
            $summ = $_POST['first'] ** $_POST['second'];
            break;
        case 'sqr':
            $summ = $_POST['first'] ** (1 / $_POST['second']);
            break;
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
                    Calculator
                    <div class="col-4 offset-4 mt-5">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="number" name="first" id="ID" class="form-control text-center" placeholder="Enter The Number" aris-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <select name="op" id="operator">
                                    <option value="add">+</option>
                                    <option value="diff">-</option>
                                    <option value="mul">*</option>
                                    <option value="div">/</option>
                                    <option value="pow">^</option>
                                    <option value="mod">%</option>
                                    <option value="sqr">sqrt</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" name="second" id="ID" class="form-control text-center" placeholder="Enter The Number" aris-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success ">Check</button>
                            </div>
                            <br>
                        </form>
                    </div>
                    <?php echo "<div style='color:blue ;font-size:22px'>result=$summ</div>" ?>
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