<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Review</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <table class="table table-hover mt-5">
    <tr class="text-center">
      <td class="text-left">Question </td>
      <td>Review</td>
    </tr>
    <tr>
      <td>Are You Satisfied with the level of cleanliness ?</td>
      <td><?php echo $_SESSION['Q1'] ?></td>
    </tr>
    <tr>
      <td>Are you satisfied with the prices of services?</td>
      <td><?php echo $_SESSION['Q2'] ?></td>
    </tr>
    <tr>
      <td>Are you satisfied with the nursing services?</td>
      <td>
        <<?php echo $_SESSION['Q3'] ?> /td>
    </tr>
    <tr>
      <td>Are you satisfied with the level of doctors?</td>
      <td><?php echo $_SESSION['Q4'] ?></td>
    </tr>
    <tr>
      <td>Are you satisfied with the calm of the hospital?</td>
      <td><?php echo $_SESSION['Q5'] ?></td>
    </tr>
    <?php
    $i = 0;
    $total = 0;
    $A1 = 0;
    foreach ($_POST as $Q1 => $A) {
      switch ($A) {
        case 0:
          $Answer = 'Bad';
          break;
        case 3:
          $Answer = 'Good';
          break;
        case 5:
          $Answer = 'Very Good';
          break;
        case 10:
          $Answer = 'Excellent';
          break;
      }
    }
    ?>
    <?php
    if ($total > 25) {
      $review = 'Good';
      $message = '<div class="alert alert-success">Thank You</b></div>';
    } else {
      $review = 'Bad';
      $message =  '<div class="alert alert-danger text-center">We Will Call You on this Phone <br>' . '</b></div>';
    }
    ?>

    </tbody>
  </table>
  <?php
  echo $message;
  ?>
  </div>
</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>