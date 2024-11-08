<?php

include ('./league_array.php');
include ('./header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>        
    <div class="container"> 
        <div class="container">
            <h3>League Table</h3>
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Team Name</th>
                        <th>GW Points</th>
                        <th>GW Rank</th>
                    </tr>
                </thead>
                <?php foreach ($league_data as $data) { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data ["id"] ?></td>
                    <td><?php echo $data ["Name"] ?></td>
                    <td><?php echo $data ["GW10 Pts"] ?></td>
                    <td><?php echo $data ["GW10 Rank"] ?></td>
                    </tr>
                    </tbody>
                <?php } ?>             
            </table>
        </div>
    </div>
<?php include('./footer.php') ?>