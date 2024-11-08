<?php 

$core_tech_staff = [
    ["first name" => "Abdul", "last name" => "Joker", "skills" => "Computer fix (suicide squad)", "phone" => "+234 123 456 7890" ],
    ["first name" => "Francis", "last name" => "Onah", "skills" => "Graphics design (last stand)", "phone" => "+234 123 456 8890" ],
    ["first name" => "Collins", "last name" => "Okoroafor", "skills" => "Fullstack Web dev (Heavy ops)", "phone" => "+234 123 456 9890" ],
    ["first name" => "Trust", "last name" => "Onyekwere", "skills" => " Web dev (meleeee)", "phone" => "+234 123 456 9890" ],
    ["first name" => "Victor", "last name" => "Okoroafor", "skills" => "Web dev (1V1)", "phone" => "+234 123 456 6890" ],
    ["first name" => "Sean", "last name" => "Gbadamosi", "skills" => "Web dev (anime)", "phone" => "+234 123 256 6890" ],
];

// print_r($core_tech_staff)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
    .material-icons{
        padding-top: 10px;
    }
</style>

<body>
    <br>  
    
    <div class="container">
        <div class="row">
            <?php foreach ($core_tech_staff as $staff) { ?>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-3">
                        <!-- <div class="card-image"> -->
                            <img src="img/sniper-banner-mw3_d82257e641284435b0cececdb2bf3983.jpg" class="responsive-img" alt="">
                        <!-- </div> -->
                        <div class="card-content">
                            <h5 class="red-text"><?php echo $staff ["first name"] ?></h5>
                            <p>Skills: <?php echo $staff ["skills"] ?> </p>
                            <p>Phone: <?php echo $staff ["phone"] ?> </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <br>
</body>
</html>