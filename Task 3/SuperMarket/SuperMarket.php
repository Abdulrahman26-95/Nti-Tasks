<?php

if (isset($_POST['EnterProducts'])) {
    $Table = ProductList();
}
if (isset($_POST['Thebill'])) {
    $billTable = billTable();
}
function ProductList()
{
    $table = "<table class='table table-sm table-primary'>
    <thead>
        <tr>
        <th scope='col' >Product Name </th>
        <th scope='col'>Price</th>
        <th scope='col'>Quantity</th>
        </tr>
    </thead>
    <tbody>";
    # The Number Or Rows 
    for ($i = 0; $i < $_POST['NoV']; $i++) {
        $table .= "
        <tr>
        <th scope='row'><input type='text' class='form-control' name='Product$i'></th>
        <th scope='row'><input type='text' class='form-control' name='Price$i'></th>
        <th scope='row'><input type='text' class='form-control' name='Quantity$i'></th>
        </tr>";
    }
    $table .= "   
    </tbody>
    </table>
    <button type='submit' name='Thebill' id='thebill' class='btn btn-primary'>The Bill</button>";
    return $table;
}
function billTable()
{
    $table = "<table class='table table-sm table-primary'>
    <thead>
      <tr>
        <th scope='col'>Product Name </th>
        <th scope='col'>Price</th>
        <th scope='col'>Quantity</th>
        <th scope='col'>Subtotal</th>
      </tr>
    </thead>
    <tbody>";
    $total = 0;
    for ($i = 0; $i < $_POST['NoV']; $i++) {
        $subTotal = $_POST['price' . $i] * $_POST['quantity' . $i];
        $total += $subTotal;
        $table .= "
      <tr>
        <th scope='row'>{$_POST['product' .$i]}</th>
        <th scope='row'>{$_POST['price' .$i]}</th>
        <th scope='row'>{$_POST['quantity' .$i]}</th>
        <th scope='row'>$subTotal</th>
      </tr>";
    }
    $Discout = percentOfDiscout($total) * $total;
    $totalAfterDiscount = $total - $Discout;
    $deliveryy = delivery($_POST['city']);
    $totalPlusDelevary = ($total + $deliveryy);
    $table .= "  <tr>
   <th>client name</th>
   <th>{$_POST['userName']}</th>
   </tr>  
   <tr>
   <th>City</th>
   <th>{$_POST['city']}</th>
   </tr>  
   <tr>
   <th>Total</th>
   <th>$total</th>
   </tr>  
   <tr>
   <th>Discount</th>
   <th>$Discout</th>
   </tr>  
   <tr>
   <th>total After Discount</th>
   <th>$totalAfterDiscount</th>
   </tr>  
   <tr>
   <th>delivery</th>
   <th>$deliveryy</th>
   </tr>  
   <tr>
   <th>total plus delivary</th>
   <th></th>
   </tr>  
    </tbody>
  </table>";
    return $table;
}
function percentOfDiscout($totalPrice)
{
    if ($totalPrice < 1000) {
        return 0;
    } elseif ($totalPrice >= 1000 && $totalPrice < 3000) {
        return 0.1;
    } elseif ($totalPrice >= 3000 && $totalPrice < 4500) {
        return 0.15;
    } else {
        return 0.2;
    }
}
function delivery($city)
{
    switch ($city) {
        case 'cairo':
            return 0;
        case 'giza':
            return 30;
        case 'alex':
            return 50;
        default:
            return 100;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Super Market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center text-info font-weight-bold h3">
                Super Market
                <div class="col-4 offset-4 mt-5">
                    <form method='post'>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">User Name</span>
                            <input type="text" class="form-control" placeholder="Enter Your User name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group text-center">
                            <select id='city' name='city' class='form-control text-center'>
                                <option <?= (isset($_POST['city']) && $_POST['city'] == 'cairo') ? 'selected' : '' ?> value='cairo'>cairo</option>
                                <option <?= (isset($_POST['city']) && $_POST['city'] == 'Giza') ? 'selected' : '' ?> value='Giza'>Giza</option>
                                <option <?= (isset($_POST['city']) && $_POST['city'] == 'Alex') ? 'selected' : '' ?> value='Alex'>Alex</option>
                                <option <?= (isset($_POST['city']) && $_POST['city'] == 'Other') ? 'selected' : '' ?> value='Other'>Other</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number Of Varieties</span>
                            <input type="text" class="form-control" name="NoV" placeholder="Enter The Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" name='EnterProducts' id='EnterProducts' class="btn btn-primary mb-5">Enter Ptoducts</button>
                    </form>
                </div>
                <?php
                if (isset($Table)) {
                    echo  $Table;
                }
                if (isset($billTable)) {
                    echo $billTable;
                }

                ?>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>