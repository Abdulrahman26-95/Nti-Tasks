<?php
//[نفس أسماء الصفوف , نفس ترتيب الصفوف , نفس نوع البيانات]Dynamic Col

$users = [
    (object)[
        'ID' => 1,
        'Name' => 'Abdulrahman',
        "Gender" => (object)[
            'Gender' => 'm'
        ],
        'Hobbies' => [
            'Football', 'Swimming', 'Readind'
        ],
        'Activities' => [
            "school" => 'Playing Football',
            'home' => 'Watching Matches'
        ],
    ],
    (object)[
        'ID' => 2,
        'Name' => 'Amir',
        "Gender" => (object)[
            'Gender' => 'm'
        ],
        'Hobbies' => [
            'Swimming', 'Running',
        ],
        'Activities' => [
            "school" => 'Painting',
            'home' => 'Sleeping'
        ],
    ],
    (object)[
        'ID' => 3,
        'Name' => 'Haya',
        "Gender" => (object)[
            'Gender' => 'f'
        ],
        'Hobbies' => [
            'Walking',
        ],
        'Activities' => [
            "school" => 'Painting',
            'home' => 'Drawing'
        ],
    ],
    (object)[
        'ID' => 4,
        'Name' => 'Rana',
        "Gender" => (object)[
            'Gender' => 'f'
        ],
        'Hobbies' => [
            'Running',
        ],
        'Activities' => [
            "school" => 'Swimming',
            'home' => 'Eating'
        ],
    ],
];
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
    <table class="table table-secondary text-center">
        <thead class="bg-secondary bg-gradient">
            <tr>
                <?php foreach ($users[0] as $index => $user) {
                ?>
                    <!-- //    print_r('m'); -->
                    <th scope="col"><?= $index ?></th>
                <?php  } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $i => $info) {
                //  print_r($data->name);
            ?>
                <tr>
                    <?php
                    foreach ($info as $property => $Data) { ?>
                        <td>
                            <?php
                            if (gettype($Data) != 'array' && gettype($Data) != 'object') {
                                echo $Data;
                            } else {
                                foreach ($Data as $complexProp => $Data) {
                                    if ($property == 'Gender') {
                                        if ($Data == 'm') {
                                            $Data = 'male';
                                        } else {
                                            $Data = 'female';
                                        }
                                    }
                                    echo  $Data . ' , ' . ' ';
                                }
                            }
                            ?>
                        </td>

                    <?php
                    }
                    ?>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>