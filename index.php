<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="clckd" content="7e65bb146ad312d31655601449c92e77" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- My jQuery -->
    <script src="main.js"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>Covid-19 Tracker</title>
</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the COVID-19 cases around the world.</h5>
        <iframe data-aa='1881983' src='//ad.a-ads.com/1881983?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
        <iframe data-aa='1881983' src='//ad.a-ads.com/1881983?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
        <iframe data-aa='1881983' src='//ad.a-ads.com/1881983?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
        <iframe data-aa='1881983' src='//ad.a-ads.com/1881983?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
        <iframe data-aa='1881983' src='//ad.a-ads.com/1881983?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <canvas id="myChart"></canvas>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <iframe data-aa='1881974' src='//ad.a-ads.com/1881974?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
                        <th scope="col">Countries</th>
                        <iframe data-aa='1881974' src='//ad.a-ads.com/1881974?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
                        <th scope="col">Confirmed</th>
                        <iframe data-aa='1881974' src='//ad.a-ads.com/1881974?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
                        <th scope="col">Recovered</th>
                        <iframe data-aa='1881974' src='//ad.a-ads.com/1881974?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
                        <th scope="col">Deceased</th>
                       <iframe data-aa='1881974' src='//ad.a-ads.com/1881974?size=120x60' style='width:120px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, <a href="https://packetcode.in" target="_blank">Packetcode</a></span>
        </div>
    </footer>

</body>
</html>
