<?php 

$core_tech_staff = [
    ["first name" => "Abdul", "last name" => "Joker", "skills" => "Computer Engineering (wannabe sniper)", "phone" => "+234 123 456 7890" ],
    ["first name" => "Francis", "last name" => "Onah", "skills" => "Graphics design (last stand guy)", "phone" => "+234 123 456 8890" ],
    ["first name" => "Collins", "last name" => "Okoroafor", "skills" => "Web dev (Heavy ops)", "phone" => "+234 123 456 9890" ],
    ["first name" => "Trust", "last name" => "Onyekwere", "skills" => "Web dev (meleeee)", "phone" => "+234 123 456 9890" ],
    ["first name" => "Victor", "last name" => "Okoroafor", "skills" => "Web dev (hop merchant)", "phone" => "+234 123 456 6890" ],
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
    <div class="row">
        <div class="col s12 m12 l4">
            <div class="card z-depth-3">
                <div class="card-image">
                    <img src="img/sniper-banner-mw3_d82257e641284435b0cececdb2bf3983.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                        <span><i class="material-icons">account_circle</i> <?php echo $core_tech_staff[0]["first name"]; ?></span>
                    <p>
                        <h6 class="red-text">Skills: </h6> <?php echo $core_tech_staff[0]["skills"]; ?>
                    </p>
                    <p>
                        <h6 class="red-text">Phone:</h6> <?php echo $core_tech_staff[0]["phone"]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card z-depth-3">
                <div class="card-image">
                    <img src="img/wvp04uli1f181.webp" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                        <span><i class="material-icons">account_circle</i> <?php echo $core_tech_staff[1]["first name"]; ?></span>
                    <p>
                        <h6 class="red-text">Skills: </h6> <?php echo $core_tech_staff[1]["skills"]; ?>
                    </p>
                    <p>
                        <h6 class="red-text">Phone:</h6> <?php echo $core_tech_staff[1]["phone"]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card z-depth-3">
                <div class="card-image">
                    <img src="img/mwr_usmc_heavy_gunner_by_karma45_dbiks10-fullview 1.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                        <span><i class="material-icons">account_circle</i> <?php echo $core_tech_staff[2]["first name"]; ?></span>
                    <p>
                        <h6 class="red-text">Skills: </h6> <?php echo $core_tech_staff[2]["skills"]; ?>
                    </p>
                    <p>
                        <h6 class="red-text">Phone:</h6> <?php echo $core_tech_staff[2]["phone"]; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col s12 m12 l4">
            <div class="card z-depth-3">
                <div class="card-image">
                    <img src="img/cod-mw2-best-melee-weapons-featured.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                        <span><i class="material-icons">account_circle</i> <?php echo $core_tech_staff[3]["first name"]; ?></span>
                    <p>
                        <h6 class="red-text">Skills: </h6> <?php echo $core_tech_staff[3]["skills"]; ?>
                    </p>
                    <p>
                        <h6 class="red-text">Phone:</h6> <?php echo $core_tech_staff[3]["phone"]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card z-depth-3">
                <div class="card-image">
                    <img src="img/warzone-2-landing-aspect-ratio-2-1.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                        <span><i class="material-icons">account_circle</i> <?php echo $core_tech_staff[4]["first name"]; ?></span>
                    <p>
                        <h6 class="red-text">Skills: </h6> <?php echo $core_tech_staff[4]["skills"]; ?>
                    </p>
                    <p>
                        <h6 class="red-text">Phone:</h6> <?php echo $core_tech_staff[4]["phone"]; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</html>