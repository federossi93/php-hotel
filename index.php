<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    //var_dump($hotels);

    // foreach ($hotels as $key => $value){
    //     echo $value['name'] . '<br>';
    //     echo $value['description'] . '<br>';
    //     if($value['parking'] == 'true'){
    //         echo 'ce parcheggio'. '<br>';
    //     }else{
    //         echo 'non ce parcheggio'. '<br>';
    //     }
    //     echo $value['vote'] . '<br>';
    //     echo $value['distance_to_center'] . '<br>';
    // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance tocenter</th>
            </tr>
        </thead>

        <?php foreach ($hotels as $key => $value) { ?>
        <tbody>
            <tr>
                <td><?php echo $value['name'];?></td>
                <td><?php echo $value['description'];?></td>
                <td><?php if($value['parking'] == 'true'){
            echo 'there is parking';
        }else{
            echo 'there is no parking';
        }?></td>
                <td><?php echo $value['vote'];?></td>
                <td><?php echo $value['distance_to_center'];?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
    

</body>

</html>