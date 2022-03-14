<?php
if ($_POST) {
    $errors = [];
    if (empty($_POST['UserName'])) {
        $message = $errors['UserName'] = "<div class='alert alert-danger h6 text-center'>Please Enter Your User Name</div>";
    }
    if (empty($_POST['Money'])) {
        $message = $errors['Money'] = "<div class='alert alert-danger h6 text-center'>Please Enter Your The Amount Of Money</div>";
    }
    if (empty($_POST['Years'])) {
        $message = $errors['Years'] = "<div class='alert alert-danger h6 text-center'>Please Enter Your The Number Of Years</div>";
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

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 text-center text-primary font-weight-bold h1">
                    Bank
                    <form action="" method="POST">
                        <div class="input-group flex-nowrap my-5">
                            <span class="input-group-text" id="addon-wrapping">User Name</span>
                            <input type="text" name="UserName" class="form-control" placeholder=" Enter Your Username" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <?php if (isset($errors['UserName'])) {
                            echo $errors['UserName'];
                        }
                        ?>
                        <div class="input-group flex-nowrap my-5">
                            <span class="input-group-text" id="addon-wrapping">$</span>
                            <input type="number" name="Money" class="form-control" placeholder="Enter The amount of money" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <?php if (isset($errors['Money'])) {
                            echo $errors['Money'];
                        }
                        ?>
                        <div class="input-group flex-nowrap my-5">
                            <span class="input-group-text" id="addon-wrapping">Loan Years</span>
                            <input type="text" name="Years" class="form-control" placeholder="Enter Number of Years" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <?php if (isset($errors['Years'])) {
                            echo  $errors['Years'];
                        }
                        ?>
                        <div class="form-group">
                            <button class="btn btn-outline-primary w-100 ">Calculate</button>
                        </div>
                    </form>
                    <?php
                    if (empty($errors)) {
                        if ($_POST) {
                            $User = $_POST['UserName'];
                            $Money = $_POST['Money'];
                            $Years = $_POST['Years'];
                            $interest = $Years * 0.1 * $Money;
                            $total = $interest + $Money;
                            $loanAfterInterest = $Money + $interest;
                            $Monthly = $total / ($Years * 12);
                        }
                    }
                    ?>
                    <table class="table">
                        <tbody>
                        </tbody>
                    </table>
                    <table style='font-size:18px' class="table fs-6">
                        <thead class="table-dark">
                            <tr>
                                <th scope="">User Name</th>
                                <th scope="">Interest Rate</th>
                                <th scope="">Loan After Interest Rate </th>
                                <th scope="">Monthly Pay</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $_POST['UserName'] ?></td>
                                <td><?php echo $interest ?></td>
                                <td><?php echo $total; ?></td>
                                <td><?php echo $Monthly; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>